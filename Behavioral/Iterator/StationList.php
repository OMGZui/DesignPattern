<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 16:26
 */

namespace DesignPattern\Behavioral\Iterator;

class StationList implements \Countable, \Iterator
{
    protected $stations = [];
    protected $counter;

    public function add(RadioStation $station)
    {
        $this->stations[] = $station;
    }

    public function remove(RadioStation $toRemove)
    {
        $toRemoveFrequency = $toRemove->getFrequency();
        return $this->stations = array_filter($this->stations, function (RadioStation $radioStation) use ($toRemoveFrequency) {
            return $radioStation->getFrequency() !== $toRemoveFrequency;
        });
    }

    public function get()
    {
        return $this->stations;
    }

    public function count()
    {
        return count($this->stations);
    }

    public function current()
    {
        return $this->stations[$this->counter];
    }

    public function next()
    {
        $this->counter++;
    }

    public function key()
    {
        return $this->counter;
    }

    public function valid()
    {
        return isset($this->stations[$this->counter]);
    }

    public function rewind()
    {
        $this->counter = 0;
    }

}