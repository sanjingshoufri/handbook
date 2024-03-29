# 概述
- 设计模式提供常规复用的解决方案，关于一些软件设计中出现的问题

# 分类
- 创建型
	- 关于类的实例化和对象的创建

# 类之间的关系
## 依赖
- UML类图中
	- 依赖关系使用带箭头的虚线来表示，箭头从使用类指向被依赖的类
- 某个类的方法通过局部变量、方法的参数或者对静态方法的调用来访问另一个类(被依赖类)中的某些方法来完成一些职责

## 关联
- 概述
	- 对象之间的一种引用关系，用于表示一类对象与另一类对象之间的联系
	- 关联可以是双向的，也可以是单向的
- UML类图中
	- 双向的关联可以用带两个箭头或者没有箭头的实线来表示
	- 单向的关联用带一个箭头的实线来表示，箭头从使用类指向被关联的类
- 代码实现
	- 通常将一个类的对象作为另一个类的成员变量来实现关联关系	

## 聚合
- 概述
	- 也称为强关联，是整体和部分之间的关系，是has-a的关系
- UML类图中	
	- 聚合关系可以用带空心菱形的实线来表示，菱形指向整体	

## 组合
- 概述
	- 表示类之间的整体与部分的关系，但它是一种更强烈的聚合关系，是cxmtains-a关系
- UML类图中		
	- 用带实心菱形的实线来表示，菱形指向整体

## 泛化
- 概述
	- 对象之间耦合度最大的一种关系，表示一般与特殊的关系，是父类与子类之间的关系，是一种继承关系，是 is-a 的关系
- UML类图中	
	- 泛化关系用带空心三角箭头的实线来表示，箭头从子类指向父类
- 代码实现
	- 使用面向对象的继承机制来实现泛化关系	

## 实现
- 概述
	- 接口与实现类之间的关系在这种关系中，类实现了接口，类中的操作实现了接口中所声明的所有的抽象操作
- UML类图中
	- 实现关系使用带空心三角箭头的虚线来表示，箭头从实现类指向接口	