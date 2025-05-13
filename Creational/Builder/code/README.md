Here's a complete `README.md` document with **detailed explanations for each line of the PHP Builder pattern project**, as defined by the **Gang of Four**. The demo is run in `index.php`. Each class is explained line by line using PHP 8.1 standards.

---

# 🧱 Builder Design Pattern in PHP 8.1 (Gang of Four)

This project demonstrates the **Builder** creational design pattern, based on the original **GoF (Gang of Four)** structure. The pattern separates the construction of a complex object from its representation, allowing the same construction process to create different representations.

---

## 🧩 File Structure

```
/builder-pattern-php
├── Product.php
├── Builder.php
├── ConcreteBuilder.php
├── Director.php
└── index.php
```

---

## 📦 Product.php

```php
<?php
// The complex object being built

class Product {
    private array $parts = []; // Holds the built parts

    public function add(string $part): void {
        // Adds a single part to the product
        $this->parts[] = $part;
    }

    public function show(): void {
        // Displays the final built product
        echo "Product Parts:\n";
        foreach ($this->parts as $part) {
            echo "- $part\n";
        }
    }
}
```

### 💡 Explanation

* The `Product` class represents the **final object** being constructed.
* It holds parts in an array.
* `add()` method allows builders to add parts.
* `show()` displays the constructed parts — used in the demo.

---

## 🛠️ Builder.php

```php
<?php
// Abstract Builder Interface

interface Builder {
    public function buildPartA(): void;     // Step to build part A
    public function buildPartB(): void;     // Step to build part B
    public function getResult(): Product;   // Retrieve the final product
}
```

### 💡 Explanation

* This is the **Builder interface** — it defines the **construction steps**.
* Each `ConcreteBuilder` must implement these methods.
* This is key to **separating the algorithm (Director)** from the **steps (ConcreteBuilder)**.

---

## 🧰 ConcreteBuilder.php

```php
<?php
require_once 'Builder.php';   // Load the Builder interface
require_once 'Product.php';   // Load the Product class

// Implements the steps defined in Builder
class ConcreteBuilder implements Builder {
    private Product $product; // Stores the current Product being built

    public function __construct() {
        $this->product = new Product(); // Initialize Product object
    }

    public function buildPartA(): void {
        $this->product->add("PartA");   // Simulates building "PartA"
    }

    public function buildPartB(): void {
        $this->product->add("PartB");   // Simulates building "PartB"
    }

    public function getResult(): Product {
        return $this->product;          // Return the completed Product
    }
}
```

### 💡 Explanation

* This is the **concrete implementation** of the `Builder`.
* It builds the product step-by-step.
* `$product` must be **initialized in the constructor** to avoid PHP 8.1 fatal errors due to uninitialized typed properties.

---

## 🎬 Director.php

```php
<?php
require_once 'Builder.php';   // Load the Builder interface

// Directs the building process using a given Builder
class Director {
    private Builder $builder; // Holds reference to a Builder object

    public function __construct(Builder $builder) {
        $this->builder = $builder;     // Accept a builder from the client
    }

    public function construct(): void {
        // Defines the specific steps/order for building
        $this->builder->buildPartA();
        $this->builder->buildPartB();
    }
}
```

### 💡 Explanation

* The **Director** defines the **sequence of steps** needed to build the product.
* It depends on the **Builder interface**, not a specific builder.
* This allows for easy swapping of different builders.

---

## 🚀 index.php (Demo)

```php
<?php
require_once 'ConcreteBuilder.php';  // Load the concrete builder
require_once 'Director.php';         // Load the director

$builder = new ConcreteBuilder();    // Create builder instance
$director = new Director($builder);  // Pass builder to director
$director->construct();              // Director builds using the builder
$product = $builder->getResult();    // Get the finished product
$product->show();                    // Display the built product
```

### 💡 Explanation

* The client code (`index.php`) **orchestrates the entire pattern**.
* It creates the `ConcreteBuilder`, wraps it in a `Director`, and starts construction.
* Finally, it gets the result and displays the parts of the product.

---

## ✅ Output

```
Product Parts:
- PartA
- PartB
```

---

## 🔁 Benefits of the Builder Pattern

* Isolates **construction logic** from the final object representation.
* Helps manage **step-by-step** building of complex objects.
* Facilitates **reuse** of building logic across different products.
* Avoids the complexity of constructors with **many optional parameters**.

---

## 📚 Reference

* **Design Patterns: Elements of Reusable Object-Oriented Software** by Gamma, Helm, Johnson, and Vlissides (GoF)
* Pattern: **Builder**
* Category: **Creational**

---

Would you like a more advanced version with more parts or multiple builders (e.g., different variants of a product)?

