Sure! Here’s the **PHP implementation** of the **Singleton Design Pattern**, along with a **PlainClass** to demonstrate the difference in object creation.

---

## 📁 **File Structure**
```
/project-folder
│── Singleton.php
│── PlainClass.php
│── index.php (Main file)
```

---

## **1. `Singleton.php` (Singleton Class)**
```php
<?php
class Singleton {
    // Private static instance
    private static ?Singleton $instance = null;

    // Private constructor to prevent direct instantiation
    private function __construct() {
        echo "Singleton instance created.\n";
    }

    // Public static method to get the single instance
    public static function getInstance(): Singleton {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    // Example method to demonstrate functionality
    public function showMessage() {
        echo "Hello from Singleton!\n";
    }

    // Prevent cloning
    private function __clone() {}

    // Prevent unserialization
    public function __wakeup() {
        throw new \Exception("Cannot unserialize Singleton");
    }
}
?>
```

---

## **2. `PlainClass.php` (Regular Class)**
```php
<?php
class PlainClass {
    // Constructor
    public function __construct() {
        echo "PlainClass instance created.\n";
    }

    // Example method
    public function showMessage() {
        echo "Hello from PlainClass!\n";
    }
}
?>
```

---

## **3. `index.php` (Main Program)**
```php
<?php
require_once 'Singleton.php';
require_once 'PlainClass.php';

// Get the first instance of Singleton
$singleton1 = Singleton::getInstance();
$singleton1->showMessage();

// Get another instance of Singleton
$singleton2 = Singleton::getInstance();

// Verify that both Singleton instances are the same
if ($singleton1 === $singleton2) {
    echo "Both Singleton instances are the SAME object.\n";
} else {
    echo "ERROR: Singleton instances are different! (This should not happen)\n";
}

echo "\n--- Creating PlainClass instances ---\n";

// Create two separate instances of PlainClass
$plain1 = new PlainClass();
$plain2 = new PlainClass();

// Verify that they are different objects
if ($plain1 === $plain2) {
    echo "ERROR: PlainClass instances are the same! (This should not happen)\n";
} else {
    echo "PlainClass instances are DIFFERENT objects.\n";
}
?>
```

---

## **🛠 How It Works**
1. **Singleton Class (`Singleton.php`)**:
   - Uses **lazy initialization**.
   - The **constructor is private** to prevent direct instantiation.
   - Implements **`getInstance()`** to ensure only one instance exists.
   - **Prevents cloning (`__clone`) and unserialization (`__wakeup`)** to enforce single instance.

2. **PlainClass (`PlainClass.php`)**:
   - A normal class where each `new PlainClass()` creates **a new object**.

3. **Main Program (`index.php`)**:
   - Calls `Singleton::getInstance()` twice, verifying the **same instance is used**.
   - Creates **two different PlainClass objects** and verifies they are **distinct**.

---

## **🎯 Expected Output**
```
Singleton instance created.
Hello from Singleton!
Both Singleton instances are the SAME object.

--- Creating PlainClass instances ---
PlainClass instance created.
PlainClass instance created.
PlainClass instances are DIFFERENT objects.
```

---

## **🔧 How to Run in PHP**
1. Navigate to your project folder.
2. Run the script using:
   ```sh
   php index.php
   ```

---

## **🎯 Key Takeaways**
✅ **Singleton enforces a single instance** using **lazy initialization**.  
✅ **Prevents cloning and unserialization** for additional security.  
✅ **PlainClass allows multiple instances** using `new`.  
✅ **Proper file separation for better organization**.  

This PHP version follows **best practices** for **performance and instance control**. 🚀  
Let me know if you need any modifications! 😊
