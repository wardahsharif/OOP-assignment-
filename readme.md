# OOP PHP Assignment 

The assignment explored key object-oriented programming (OOP) concepts in PHP. These concepts help in building clean, modular, and maintainable code. Here's how everything fits together:



## Table of Contents
1. [Abstract Classes](#abstract-classes)
2. [Interface](#interface)
3. [Iterability](#iterables)
4. [Namespaces](#namespaces)
5. [Static Properties & Methods](#staticproperties-methods)
6. [Traits](#traits)





## Abstract classes


 An abstract class is like a template for other classes.
 It can't be used on its own, but it defines methods that must be created in any class that extends it.
 This is useful when multiple classes share common behavior but implement some details differently.


![Home Page](src/assets/homepage1.png)


## Interface

An interface in PHP is like a blueprint or a contract. 
It defines the structure that any class must follow if it implements that interface.
However, unlike a class, an interface doesn’t contain any actual code—just method names.
It ensures that different classes use the same method signatures, but the classes decide how to implement them.

Why Use Interfaces?

Interfaces are useful when you want to enforce that a group of classes follow the same rules,
(i.e., have the same methods) but may implement those methods differently.


![About Page](src/assets/aboutpage.png)


## Iterables


An iterable is any type of object that can be looped over using a foreach loop.
 In PHP, an object is considered iterable if it implements the Traversable interface
(which is a base interface for both Iterator and IteratorAggregate).

Why Use Iterables?
To create custom objects that you can loop through, just like arrays.
Useful when you want to define how an object should be traversed
(e.g., through a collection of items).


![Services Page Screenshot](src/assets/service.png)


## Namespaces


A namespace is a way to group related classes, functions, and constants together to avoid name conflicts.
This becomes especially useful when you have large projects with many classes, where different developers might accidentally create classes or functions with the same name.

Why Use Namespaces?

To avoid naming conflicts when different parts of your project or third-party libraries have classes or functions with the same name.
It helps organize your code by logically grouping related classes.


![Contact Page Screenshot](src/assets/contactpage.png)


## Static Properties & Methods


- Static Properties Are variables that are shared across all instances of a class.
 Instead of each object having its own copy, a static property is shared by all instances of the class.

- Static Methods Are functions that can be called on the class itself, not on an object. 
You don't need to create an instance of the class to call a static method.


When to Use Static

When you want to store information that should be the same across all instances of a class 
(like a counter or configuration settings).
When a method should be accessed without creating an instance of the class.

![Footer Screenshot](src/assets/homepage2.png)


## Traits
A trait is a code reuse mechanism in PHP.
It allows you to share common functionality across multiple classes without using inheritance.
Unlike interfaces, traits can contain actual code (methods).

why use traits?

Traits are useful when multiple classes need to share the same methods,
but you don't want to use inheritance.

Differences from Classes: 
Traits are not full classes; they cannot be instantiated, 
and they don’t have a constructor. They're used to add functionality to classes.

![Footer Screenshot](src/assets/homepage2.png)
