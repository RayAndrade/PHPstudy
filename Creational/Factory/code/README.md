<?php

// Step 1: Define the Product Interface (Product.php)
interface Product {
    public function operation(): string;
}

// Step 2: Implement the Concrete Product (ConcreteProduct.php)
class ConcreteProduct implements Product {
    public function operation(): string {
        return "ConcreteProduct: Operation executed.";
    }
}

// Step 3: Define the Creator Interface (Creator.php)
abstract class Creator {
    // Factory Method: Must be implemented by subclasses
    abstract public function factoryMethod(): Product;

    // A common operation that uses the product
    public function someOperation(): string {
        $product = $this->factoryMethod(); // Factory Method creates an object
        return "Creator: " . $product->operation();
    }
}

// Step 4: Implement the Concrete Creator (ConcreteCreator.php)
class ConcreteCreator extends Creator {
    public function factoryMethod(): Product {
        return new ConcreteProduct(); // Returns an instance of ConcreteProduct
    }
}

// Step 5: Implement the Client (Client.php)
class Client {
    public static function main() {
        $creator = new ConcreteCreator(); // Instantiates the concrete factory
        echo $creator->someOperation(); // Uses the factory method
    }
}

// Run the Client
Client::main();

?>


## **Order of Class Creation**
To avoid dependency issues, we should create classes in this order:

1. **Product Interface (`Product.php`)** – This defines the contract for all concrete products.
2. **Concrete Product (`ConcreteProduct.php`)** – A class implementing the `Product` interface.
3. **Creator Interface (`Creator.php`)** – Defines the factory method.
4. **Concrete Creator (`ConcreteCreator.php`)** – Implements the factory method to return `ConcreteProduct` objects.
5. **Client (`Client.php`)** – Uses the factory to instantiate products.

---

Now, let's generate the PHP code with each class in a separate file.

### **Explanation of Classes and Methods**

1. **`Product` Interface (`Product.php`)**  
   - Defines a method `operation()` that must be implemented by concrete products.

2. **`ConcreteProduct` (`ConcreteProduct.php`)**  
   - Implements `Product` and provides a concrete `operation()` method.

3. **`Creator` Abstract Class (`Creator.php`)**  
   - Declares the abstract `factoryMethod()` that must be implemented by subclasses.
   - Defines `someOperation()`, which calls the `factoryMethod()` and uses the created product.

4. **`ConcreteCreator` (`ConcreteCreator.php`)**  
   - Implements `factoryMethod()` to return an instance of `ConcreteProduct`.

5. **`Client` (`Client.php`)**  
   - Instantiates `ConcreteCreator` and calls `someOperation()`.

This follows the Factory Method pattern from the **Gang of Four** while ensuring no dependency errors.
