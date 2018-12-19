# DesignPattern 设计模式

## 一、什么是设计模式

设计模式（Design pattern）代表了最佳的实践，通常被有经验的面向对象的软件开发人员所采用。设计模式是软件开发人员在软件开发过程中面临的一般问题的解决方案。这些解决方案是众多软件开发人员经过相当长的一段时间的试验和错误总结出来的。

设计模式是一套被反复使用的、多数人知晓的、经过分类编目的、代码设计经验的总结。使用设计模式是为了重用代码、让代码更容易被他人理解、保证代码可靠性。 毫无疑问，设计模式于己于他人于系统都是多赢的，设计模式使代码编制真正工程化，设计模式是软件工程的基石，如同大厦的一块块砖石一样。项目中合理地运用设计模式可以完美地解决很多问题，每种模式在现实中都有相应的原理来与之对应，每种模式都描述了一个在我们周围不断重复发生的问题，以及该问题的核心解决方案，这也是设计模式能被广泛应用的原因。

## 二、设计模式的类型

- 创建型模式（Creational）：`这些设计模式提供了一种在创建对象的同时隐藏创建逻辑的方式，而不是使用 new 运算符直接实例化对象。这使得程序在判断针对某个给定实例需要创建哪些对象时更加灵活`
  - 简单工厂模式（Simple Factory Pattern） [传送门](./Creational/SimpleFactory)
  - 抽象方法模式（Factory Method Pattern） [传送门](./Creational/FactoryMethod)
  - 抽象工厂模式（Abstract Factory Pattern） [传送门](./Creational/AbstractFactory)
  - 单例模式（Singleton Pattern） [传送门](./Creational/Singleton)
  - 建造者模式（Builder Pattern） [传送门](./Creational/Builder)
  - 原型模式（Prototype Pattern） PHP使用`clone`即可实现，目的是减少开销
- 结构型模式（Structural）：`这些设计模式关注类和对象的组合。继承的概念被用来组合接口和定义组合对象获得新功能的方式`
  - 适配器模式（Adapter Pattern） [传送门](./Structural/Adapter)
  - 桥接模式（Bridge Pattern） [传送门](./Structural/Bridge)
  - 装饰器模式（Decorator Pattern） [传送门](./Structural/Decorator)
  - 外观模式（Facade Pattern） [传送门](./Structural/Facade)
  - 享元模式（Flyweight Pattern） [传送门](./Structural/FlyWeight)
  - 代理模式（Proxy Pattern） [传送门](./Structural/Proxy)
- 行为型模式（Behavioral）：`这些设计模式特别关注对象之间的通信`
  - 责任链模式（Chain of Responsibility Pattern） [传送门](./Behavioral/ChainOfResponsibility)
  - 命令模式（Command Pattern） [传送门](./Behavioral/Command)
  - 迭代器模式（Iterator Pattern） [传送门](./Behavioral/Iterator)
  - 备忘录模式（Memento Pattern）  [传送门](./Behavioral/Memento)
  - 观察者模式（Observer Pattern） [传送门](./Behavioral/Observer)
  - 状态模式（State Pattern）
  - 策略模式（Strategy Pattern）
  - 访问者模式（Visitor Pattern） [传送门](./Behavioral/Visitor)

## 三、设计模式的六大原则

- 开闭原则（Open Close Principle）

开闭原则的意思是：`对扩展开放，对修改关闭`。在程序需要进行拓展的时候，不能去修改原有的代码，实现一个热插拔的效果。简言之，是为了使程序的扩展性好，易于维护和升级。想要达到这样的效果，我们需要使用接口和抽象类，后面的具体设计中我们会提到这点。

- 里氏代换原则（Liskov Substitution Principle）

里氏代换原则是面向对象设计的基本原则之一。 里氏代换原则中说，任何基类可以出现的地方，子类一定可以出现。LSP 是`继承复用的基石`，只有当派生类可以替换掉基类，且软件单位的功能不受到影响时，基类才能真正被复用，而派生类也能够在基类的基础上增加新的行为。里氏代换原则是对开闭原则的补充。实现开闭原则的关键步骤就是抽象化，而基类与子类的继承关系就是抽象化的具体实现，所以里氏代换原则是对实现抽象化的具体步骤的规范。

- 依赖倒转原则（Dependence Inversion Principle）

这个原则是开闭原则的基础，具体内容：`针对接口编程`，依赖于抽象而不依赖于具体。

- 接口隔离原则（Interface Segregation Principle）

这个原则的意思是：使用多个隔离的接口，比使用单个接口要好。它还有另外一个意思是：降低类之间的耦合度。由此可见，其实设计模式就是从大型软件架构出发、便于升级和维护的软件设计思想，它强调`降低依赖，降低耦合`。

- 迪米特法则，又称最少知道原则（Demeter Principle）

最少知道原则是指：一个实体应当尽量少地与其他实体之间发生相互作用，使得系统功能模块相对`独立`。

- 合成复用原则（Composite Reuse Principle）

合成复用原则是指：尽量使用`合成/聚合`的方式，而不是使用继承。

## 四、UML类图

[UML类图][1]

## 使用

```bash
composer create-project -s dev omgzui/design-pattern
```

or

```bash
git clone https://github.com/OMGZui/DesignPattern
composer install
```

## 测试

```bash
vendor/bin/phpunit tests/
```

## 资料

- [图说设计模式][2]
- [design-patterns-for-humans][3]
- [DesignPatternsPHP][4]

[1]:https://github.com/OMGZui/DesignPattern/blob/master/uml.md
[2]:https://design-patterns.readthedocs.io/zh_CN/latest/index.html
[3]:https://github.com/kamranahmedse/design-patterns-for-humans
[4]:https://github.com/domnikl/DesignPatternsPHP