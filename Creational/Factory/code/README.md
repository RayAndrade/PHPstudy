# PHP Factory Pattern

## Overview
This repository demonstrates the **Factory Method Pattern** in PHP, following the structure and naming conventions from the **Gang of Four's Design Patterns** book. The **Factory Method Pattern** is a **Creational Design Pattern** used to instantiate objects without specifying their concrete types.

---

## Class Structure
### 1. Product Interface (`Product.php`)
This interface ensures that all products implement the `operation()` method.

```php
interface Product {
    public function operation(): string;
}
```

### 2. Concrete Product (`ConcreteProduct.php`)
This class implements the `Product` interface and provides a concrete implementation of the `operation()` method.

```php
class ConcreteProduct implements Product {
    public function operation(): string {
        return "ConcreteProduct: Operation executed.";
    }
}
```

### 3. Creator Abstract Class (`Creator.php`)
The `Creator` class defines an abstract factory method `factoryMethod()`. Subclasses must implement this method to instantiate specific product types.

```php
abstract class Creator {
    abstract public function factoryMethod(): Product;

    public function someOperation(): string {
        $product = $this->factoryMethod(); // Factory Method creates an object
        return "Creator: " . $product->operation();
    }
}
```

### 4. Concrete Creator (`ConcreteCreator.php`)
This subclass implements the factory method to return instances of `ConcreteProduct`.

```php
class ConcreteCreator extends Creator {
    public function factoryMethod(): Product {
        return new ConcreteProduct(); // Returns an instance of ConcreteProduct
    }
}
```

### 5. Client (`Client.php`)
The client uses the factory method to instantiate products and perform operations.

```php
class Client {
    public static function main() {
        $creator = new ConcreteCreator(); // Instantiates the concrete factory
        echo $creator->someOperation(); // Uses the factory method
    }
}
```

---

## Running the Demo (`index.php`)
To test the Factory Pattern implementation, use the `index.php` file.

```php
// index.php
require_once 'Client.php';
Client::main();
```

### **Execution**
Run the following command in the terminal:

```sh
php index.php
```

Expected output:
```
Creator: ConcreteProduct: Operation executed.
```

---

## Summary
- **Factory Method** encapsulates object creation logic.
- **Decouples client code** from concrete class instantiations.
- **Follows the Open-Closed Principle**, allowing new product types without modifying existing code.

This pattern is widely used in frameworks and libraries to create objects dynamically based on configuration or input. 🚀
