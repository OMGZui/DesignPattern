#!/bin/bash
echo -n "输入你改动的内容："
read msg

echo -n "---开始构建---"
git add .
git commit -m "$msg"
git push origin master
echo -n "---构建完成---"