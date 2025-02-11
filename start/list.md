### **Creational Patterns in PHP**  
Creational patterns in PHP focus on flexible and efficient object creation while reducing coupling and ensuring maintainability.

1. **Singleton**  
Ensures a class has only one instance, using private constructors, static methods, and lazy initialization for global access.

2. **Factory Method**  
Defines a method for creating objects, letting subclasses decide which concrete class to instantiate.

3. **Abstract Factory**  
Provides an interface for creating families of related or dependent objects without specifying their concrete classes.

4. **Builder**  
Separates object construction from its representation, enabling fluent chaining for creating complex objects.

5. **Prototype**  
Creates new objects by cloning existing ones, leveraging PHP’s `clone` keyword for shallow or deep copying.

---

### **Structural Patterns in PHP**  
Structural patterns in PHP focus on class and object composition to create scalable and maintainable architectures.

6. **Adapter**  
Converts one interface to another, using composition or inheritance to integrate incompatible components.

7. **Bridge**  
Decouples abstraction from implementation by combining interfaces with separate concrete implementations for flexibility.

8. **Composite**  
Composes objects into tree-like structures to represent part-whole hierarchies, leveraging recursion and interfaces in PHP.

9. **Decorator**  
Dynamically adds behavior to objects without altering their structure, typically implemented using wrapping and interfaces.

10. **Facade**  
Simplifies access to a complex subsystem by providing a unified interface for easier client interaction.

11. **Flyweight**  
Minimizes memory usage by sharing data among similar objects, often using shared state or object pools.

12. **Proxy**  
Provides a placeholder for another object to control access, enabling features like lazy initialization or logging.

---

### **Behavioral Patterns in PHP**  
Behavioral patterns in PHP manage communication and workflows between objects, promoting dynamic interaction and loose coupling.

13. **Chain of Responsibility**  
Passes a request through a chain of handlers, where each handler can process or pass it forward.

14. **Command**  
Encapsulates requests as objects, enabling flexible execution, queuing, and undo functionality in PHP applications.

15. **Interpreter**  
Defines a grammar and interprets expressions, useful for DSLs or evaluating templates and configuration data.

16. **Iterator**  
Provides a standard way to traverse collections using PHP’s `Iterator` interface or `foreach` loops.

17. **Mediator**  
Centralizes communication between objects, reducing dependencies by using event-based systems or mediator classes.

18. **Memento**  
Captures and restores an object’s state without exposing its internal details, useful for undo operations.

19. **Observer**  
Implements a one-to-many relationship where changes in one object notify its dependents, leveraging PHP’s `SplObserver` and `SplSubject`.

20. **State**  
Allows objects to change their behavior dynamically based on internal state, implemented using state classes or closures.

21. **Strategy**  
Encapsulates interchangeable algorithms into separate classes, enabling flexible behavior switching for tasks like validation.

22. **Template Method**  
Defines the skeleton of an algorithm in a base class, allowing subclasses to implement specific steps.

23. **Visitor**  
Encapsulates operations performed on object structures, enabling new functionality without modifying the objects themselves.

---

This comprehensive list provides concise, PHP-specific explanations of all 23 design patterns, grouped into Creational, Structural, and Behavioral categories, making it easy to understand their purpose and implementation.
