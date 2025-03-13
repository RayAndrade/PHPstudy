<?php

// Step 1: Define the Product Interface (Product.php)
// This interface ensures all products have a common method `operation()`
interface Product {
    public function operation(): string;
}

// Implementation of the Concrete Product
// This class implements the Product interface and defines the `operation` method
class ConcreteProduct implements Product {
    public function operation(): string {
        return "ConcreteProduct: Operation executed.";
    }
}

// Step 2: Define the Creator Interface (Creator.php)
// The Creator class declares the factory method and provides a default operation
abstract class Creator {
    // Factory Method: Must be implemented by subclasses
    abstract public function factoryMethod(): Product;

    // A common operation that uses the product
    public function someOperation(): string {
        $product = $this->factoryMethod(); // Factory Method creates an object
        return "Creator: " . $product->operation();
    }
}

// Step 3: Implement the Concrete Creator (ConcreteCreator.php)
// This subclass implements the factory method to return ConcreteProduct instances
class ConcreteCreator extends Creator {
    public function factoryMethod(): Product {
        return new ConcreteProduct(); // Returns an instance of ConcreteProduct
    }
}

// Step 4: Implement the Client (Client.php)
// The client code uses the factory method to get an object and execute its logic
class Client {
    public static function main() {
        $creator = new ConcreteCreator(); // Instantiates the concrete factory
        echo $creator->someOperation(); // Uses the factory method
    }
}

// Step 5: Demo Execution in index.php
// Running the main function of the Client to demonstrate the Factory pattern
require_once 'Client.php';
Client::main();

?>
