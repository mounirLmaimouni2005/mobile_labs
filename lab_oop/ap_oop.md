---
marp: true
theme: default
paginate: true
---

# Object-Oriented Programming (OOP)

Understanding the Concepts, Principles and Structure of OOP


<!--
Speaker notes: In this presentation, I will introduce Object-Oriented Programming, explain its main concepts, explore its four pillars, and discuss important principles used to build structured and maintainable software.
-->

---

# Plan (Part 1)

- Introduction to OOP
- Problem Statement
- Solution: Object-Oriented Programming
- Classes and Objects
- Properties and Methods
- Constructors and Destructors
- The Four Pillars of OOP
- Access Modifiers

---

- Getters and Setters
- Interfaces and Abstract Classes
- Static Properties and Methods
- Advanced OOP Concepts
- Relationships Between Classes
- SOLID Principles
- Advantages and Disadvantages of OOP
- Conclusion
<!--
Speaker notes: This presentation covers the fundamental and advanced concepts of Object-Oriented Programming, starting with its definition and ending with software design principles.
-->

---

# 1. Introduction to OOP

**Definition:**

Object-Oriented Programming (OOP) is a programming paradigm that organizes software around objects rather than only functions and procedures.

Objects contain data (properties) and behavior (methods).

**Main Idea:**

OOP helps developers organize code into reusable, independent and structured components.

<!--
Speaker notes: OOP is based on objects. Each object combines data and behavior. This approach helps developers organize applications into logical components.
-->

---

# 1.1 Problem Statement


- Code becomes difficult to organize and maintain.
- Repeated code increases duplication.
- Managing data and functions separately becomes complicated.
- Changes in one part of the program can affect other parts.
- Reusing existing code becomes more difficult.


<!--
Speaker notes: Before understanding the solution, we need to identify common problems developers face when building and maintaining large applications.
-->

---

# 1.2 Solution: Object-Oriented Programming



**OOP offers several solutions:**

- **Organization:** Groups related data and methods into classes.
- **Reusability:** Allows code reuse through inheritance and composition.
- **Encapsulation:** Protects data and controls access to it.
- **Maintainability:** Makes applications easier to modify and maintain.
- **Flexibility:** Allows developers to extend applications without changing existing code unnecessarily.


<!--
Speaker notes: OOP addresses these challenges by introducing classes, objects and principles that improve code organization, reusability and maintainability.
-->

---

# 2. Classes and Objects

## What is a Class?

A class is a blueprint or template used to create objects. It defines the properties and methods that its objects will have.

## What is an Object?

An object is an instance of a class. It represents a specific entity with its own data and behaviors.


<!--
Speaker notes: A class defines the structure, while an object is a real instance created from that structure. One class can create many objects.
-->

---

# 3. Properties and Methods

## Properties

Properties are variables defined inside a class. They represent the data or characteristics of an object.

**Examples:** Name, color, price and age.

## Methods

Methods are functions defined inside a class. They represent the actions or behaviors that an object can perform.

**Examples:** Start(), Stop(), Move().



<!--
Speaker notes: Properties store information about an object, while methods define the actions that the object can perform.
-->

---

# 4. Constructors and Destructors

## Constructor

A constructor is a special method automatically called when an object is created. It is mainly used to initialize an object's properties.

## Destructor

A destructor is a special method automatically called when an object is destroyed or when the script finishes execution. It can be used to perform cleanup operations.

**In PHP:**

- `__construct()`
- `__destruct()`

<!--
Speaker notes: In PHP, constructors initialize objects when they are created. Destructors perform cleanup operations when objects are destroyed.
-->

---

# 5. The Four Pillars of OOP

The four pillars are the fundamental principles that make Object-Oriented Programming powerful and flexible.

1. Encapsulation
2. Inheritance
3. Polymorphism
4. Abstraction

<!--
Speaker notes: These four principles form the foundation of OOP. Each one has a different role in organizing and designing software.
-->

---

# 5.1 Encapsulation

**Definition:**

Encapsulation is the principle of bundling data and methods together inside a class while controlling access to the internal data.

**Purpose:**

- Protect object data.
- Prevent unauthorized modifications.
- Control how properties are accessed and modified.

**Example:** A bank account should not allow anyone to directly change its balance.

<!--
Speaker notes: Encapsulation protects an object's internal data and provides controlled ways to access or modify it.
-->

---

# 5.2 Inheritance

**Definition:**

Inheritance is a mechanism that allows one class (child class) to acquire the properties and methods of another class (parent class).

**Purpose:**

- Reuse existing code.
- Reduce code duplication.
- Create relationships between classes.


<!--
Speaker notes: Inheritance allows child classes to reuse functionality from parent classes, reducing duplication.
-->

---

# 5.3 Polymorphism

**Definition:**

Polymorphism means "many forms". It allows different classes to implement the same method or interface in different ways.

**Purpose:**

- Provide flexibility.
- Allow different objects to respond differently to the same method call.
- Make code easier to extend.

**Example:** Different animals can implement the `makeSound()` method differently.

<!--
Speaker notes: Polymorphism allows objects of different classes to respond to the same method call with different behaviors.
-->

---

# 5.4 Abstraction

**Definition:**

Abstraction is the principle of hiding complex implementation details and exposing only the essential features of an object.

**Purpose:**

- Reduce complexity.
- Hide unnecessary details.
- Focus on what an object does rather than how it works.

**Example:** A user can drive a car without understanding how its engine works internally.

<!--
Speaker notes: Abstraction simplifies the use of complex systems by exposing only the necessary functionality.
-->

---

# 6. Access Modifiers

**Definition:**

Access modifiers are keywords used to control the visibility and accessibility of class properties and methods.

## Public

Accessible from anywhere.

## Private

Accessible only inside the class where it is declared.

## Protected

Accessible inside the class and its child classes.

**Purpose:** Protect data and control access to class members.

<!--
Speaker notes: Access modifiers define where properties and methods can be accessed. PHP provides public, private and protected visibility.
-->

---

# 7. Getters and Setters

## Getter

A getter is a method used to retrieve the value of a private or protected property.

## Setter

A setter is a method used to modify the value of a private or protected property.

**Purpose:**

- Control access to properties.
- Validate data before modifying it.
- Support encapsulation.

<!--
Speaker notes: Getters and setters provide controlled access to properties, especially when those properties are private or protected.
-->

---

# 8. Interfaces and Abstract Classes

## Interface

An interface defines a contract that specifies which methods a class must implement.

It describes what a class must do, without defining the complete implementation.

## Abstract Class

An abstract class is a class that cannot be instantiated directly. It can contain both abstract methods and methods with complete implementations.

---
## Main Difference

- Interface defines a contract.
- Abstract class provides a common base with shared behavior.

<!--
Speaker notes: Interfaces define required behaviors, while abstract classes can provide shared implementation and define abstract methods.
-->

---

# 9. Static Properties and Methods

**Definition:**

Static properties and methods belong to the class itself rather than to individual objects.

They can be accessed without creating an instance of the class.

**Purpose:**

- Share data between objects.
- Define functionality related to the class.
- Avoid unnecessary object creation.

**In PHP:** The `static` keyword is used to declare static members.

<!--
Speaker notes: Static members belong to the class, not to a particular object. They can be accessed using the scope resolution operator.
-->

---

# 10. Advanced OOP Concepts

## The `$this` Keyword

`$this` is a special PHP variable that refers to the current object. It allows access to the object's properties and methods.

## Class Constants

Class constants are values that cannot be changed after they are defined. They are accessed using the class name or an object.

---

## Final Classes and Methods

The `final` keyword prevents a class from being inherited or a method from being overridden by child classes.

## Traits

Traits allow developers to reuse methods across multiple classes without using inheritance.

## Namespaces

Namespaces organize classes, interfaces and other PHP elements into logical groups and help prevent naming conflicts.

## Autoloading

Autoloading automatically loads class files when they are needed, without requiring manual inclusion of every file.

<!--
Speaker notes: These concepts provide additional tools for organizing PHP applications, avoiding naming conflicts and reusing functionality.
-->

---

# 11. Relationships Between Classes

Relationships between classes describe how different classes are connected and interact with each other.

## Association

Association is a general relationship where two independent classes interact or communicate with each other.

## Aggregation

Aggregation is a weak "has-a" relationship where one object contains or uses another object, but both can exist independently.

## Composition

Composition is a strong "has-a" relationship where one object owns another object, and the contained object depends on the owner's lifecycle.

<!--
Speaker notes: These relationships explain how objects connect to each other. Association is general, aggregation allows independent lifecycles, and composition represents stronger ownership.
-->

---

# 11.1 Composition vs. Inheritance

## Inheritance

Represents an "is-a" relationship.

A child class inherits properties and methods from a parent class.

## Composition

Represents a "has-a" relationship.

A class contains objects of other classes to reuse their functionality.

---

**Key Difference:**

- Inheritance reuses functionality through class hierarchy.
- Composition reuses functionality by combining objects.

<!--
Speaker notes: Inheritance establishes a parent-child relationship, while composition allows a class to use other objects as components.
-->

---

# 12. SOLID Principles

**Definition:**

SOLID is a set of five software design principles that help developers create maintainable, flexible, reusable and scalable object-oriented applications.

## S — Single Responsibility Principle

A class should have only one responsibility and one reason to change.

## O — Open/Closed Principle

Software entities should be open for extension but closed for modification.

---
## L — Liskov Substitution Principle

Child classes should be usable wherever their parent classes are expected without breaking the program.

## I — Interface Segregation Principle

A class should not be forced to implement methods that it does not need.

## D — Dependency Inversion Principle

High-level modules should depend on abstractions rather than concrete implementations.

<!--
Speaker notes: SOLID provides five design principles that improve software structure and make applications easier to maintain and extend.
-->

---

# 13. Advantages and Disadvantages of OOP

## Advantages

- **Code Reusability:** Reuse existing code through inheritance and composition.
- **Maintainability:** Organize code into independent classes.
- **Encapsulation:** Protect internal data.
- **Flexibility:** Extend applications more easily.
- **Scalability:** Manage large software projects more effectively.

---
## Disadvantages

- **Complexity:** Requires understanding several concepts.
- **Learning Curve:** Can be difficult for beginners.
- **Overhead:** Object creation and abstraction can introduce additional resource usage.
- **Overengineering:** Using OOP unnecessarily can make simple programs more complicated.

<!--
Speaker notes: OOP offers many benefits for software development, but it can also introduce complexity and unnecessary structure when used inappropriately.
-->

---

# 14. Conclusion

Object-Oriented Programming is an important programming paradigm that helps developers build organized, reusable and maintainable software.

By understanding classes, objects, the four pillars of OOP, access modifiers and SOLID principles, developers can create more structured and flexible applications.

<!--
Speaker notes: To conclude, OOP provides a structured way to design software. Its concepts and principles help developers create applications that are easier to understand, reuse and maintain.
-->

---

# Thank You!



<!--
Speaker notes: Thank you for your attention. I am ready to answer your questions.
-->