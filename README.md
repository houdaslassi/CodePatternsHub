# PHP Design Patterns and OOP Concepts

This project helps you understand Object-Oriented Programming (OOP) and design patterns through simple, real-world examples.

## What is OOP?

Think of OOP like building with LEGO blocks:
- Each block (class) has its own shape and color
- You can combine blocks to make bigger things
- Some blocks can inherit features from others
- You can use blocks in different ways

## OOP Building Blocks

### 1. Classes and Objects
- Class = Recipe (tells how to make something)
- Object = The actual thing made from the recipe
- Example: 
  ```php
  class Car { }          // Recipe for a car
  $myCar = new Car();    // An actual car
  ```

### 2. Inheritance
- Child classes get features from parent classes
- Like children inheriting traits from parents
- Example:
  ```php
  class Vehicle { }      // Parent class
  class Car extends Vehicle { }  // Child class
  ```

### 3. Encapsulation
- Keeping things private inside a class
- Like a car's engine - you don't need to see it to drive
- Example:
  ```php
  class Car {
    private $engine;     // Hidden from outside
    public function start() { }  // Public method to use
  }
  ```

### 4. Polymorphism
- Same method, different behavior
- Like different animals making different sounds
- Example:
  ```php
  class Animal {
    public function makeSound() { }
  }
  class Dog extends Animal {
    public function makeSound() { echo "Woof!"; }
  }
  class Cat extends Animal {
    public function makeSound() { echo "Meow!"; }
  }
  ```

### 5. Abstraction
- Showing only what's needed
- Like a TV remote - buttons are simple, but the inside is complex
- Example:
  ```php
  abstract class Remote {
    abstract public function powerButton();
  }
  ```

## Design Patterns in Action

Design patterns are like proven solutions to common problems.

### 1. Factory Pattern
- Problem: Creating objects in different ways
- Solution: A factory that makes objects for you
- Real Example: Different types of documents (PDF, Word)
- Code Example:
  ```php
  $document = DocumentFactory::create('pdf');
  $document->save();
  ```

### 2. Strategy Pattern
- Problem: Different ways to do the same thing
- Solution: Switch strategies easily
- Real Example: Different payment methods
- Code Example:
  ```php
  $payment = new PaymentProcessor();
  $payment->setMethod(new CreditCard());
  $payment->pay(100);
  ```

### 3. Observer Pattern
- Problem: Keeping objects updated
- Solution: Subscribe to changes
- Real Example: News notifications
- Code Example:
  ```php
  $news = new NewsPublisher();
  $news->subscribe(new EmailSubscriber());
  $news->publish("New update!");
  ```

### 4. Decorator Pattern
- Problem: Adding features without changing code
- Solution: Wrap objects with new features
- Real Example: Coffee with toppings
- Code Example:
  ```php
  $coffee = new SimpleCoffee();
  $coffee = new MilkDecorator($coffee);
  $coffee = new SugarDecorator($coffee);
  ```

### 5. Singleton Pattern
- Problem: Need only one instance
- Solution: Control object creation
- Real Example: Application settings
- Code Example:
  ```php
  $settings = Settings::getInstance();
  $settings->set('theme', 'dark');
  ```

## How to Use This Project

1. Install PHP on your computer
2. Look at the examples in each file
3. Try changing the code to see what happens
4. Create your own examples using these patterns

## Tips for Learning

- Start with simple examples
- Try to think of real-world uses
- Don't worry about memorizing - focus on understanding
- Practice by creating your own examples

Remember: Design patterns are tools, not rules. Use them when they help solve your problem!