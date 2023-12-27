# PHP Design Patterns and OOP Concepts

This project shows how Object-Oriented Programming (OOP) concepts work with design patterns in PHP.

## OOP Basics

### Classes and Objects
- Classes are like blueprints
- Objects are things made from those blueprints
- Example: `Car` is a class, `myCar` is an object

### Inheritance
- One class can get features from another class
- Example: `SportsCar` can inherit from `Car`

### Encapsulation
- Hiding how things work inside a class
- Example: Car's engine details are hidden

### Polymorphism
- Same method can work differently in different classes
- Example: `drive()` works differently for `Car` and `Truck`

### Abstraction
- Showing only what's needed, hiding the rest
- Example: You don't need to know how a car's engine works to drive it

## Design Patterns

Design patterns are like ready-made solutions for common OOP problems.

### 1. Factory Pattern
- Uses: Encapsulation, Abstraction
- Creates objects without showing how they are made
- Example: Creating different types of loggers (console or file)

### 2. Strategy Pattern
- Uses: Polymorphism, Encapsulation
- Lets you change how something works at runtime
- Example: Different ways to pay (cash or card)

### 3. Observer Pattern
- Uses: Polymorphism, Encapsulation
- Notifies other objects when something changes
- Example: News publisher sending updates to subscribers

### 4. Decorator Pattern
- Uses: Inheritance, Polymorphism
- Adds new features to objects without changing them
- Example: Adding milk or sugar to coffee

### 5. Singleton Pattern
- Uses: Encapsulation
- Makes sure only one copy of something exists
- Example: Global settings that everyone shares

## How to Run

1. Make sure you have PHP installed
2. Run the examples by uncommenting the example code at the bottom of each file
3. Or create a new PHP file and try the patterns yourself

## Example Usage

```php
// Factory Pattern
$logger = LoggerFactory::createLogger('console');
$logger->log('Hello World');

// Strategy Pattern
$processor = new PaymentProcessor();
$processor->setPaymentStrategy(new CashPayment());
$processor->processPayment(100.00);

// Observer Pattern
$publisher = new NewsPublisher();
$publisher->attach(new EmailSubscriber());
$publisher->notify('Breaking news!');

// Decorator Pattern
$coffee = new SimpleCoffee();
$coffee = new MilkDecorator($coffee);
echo $coffee->getDescription();

// Singleton Pattern
$config = Config::getInstance();
$config->set('app_name', 'My App');
```