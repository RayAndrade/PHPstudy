[up](../README.md)

xxx

Let's explore the **Command Pattern** using **PHP 8.2**, with full alignment to the **GoF UML class names and participants** (GoF Book pp. 233–241, UML on page 234).

---

### ✅ GoF Participants

| Role                | Class Name (GoF)  | Responsibility                                    |
| ------------------- | ----------------- | ------------------------------------------------- |
| **Command**         | `Command`         | Declares interface for executing operations       |
| **ConcreteCommand** | `ConcreteCommand` | Implements Command, binds a Receiver to an action |
| **Receiver**        | `Receiver`        | Knows how to perform operations                   |
| **Invoker**         | `Invoker`         | Asks Command to carry out request                 |
| **Client**          | `Client`          | Creates and configures Commands                   |

---

## 🗂️ File: `Command.php`

**Purpose**:
Declares the command interface.

```php
<?php
// Command.php

// Command interface defines the execute method
interface Command
{
    public function execute(): void;
}
```

---

## 🗂️ File: `Receiver.php`

**Purpose**:
Knows how to perform the actual work requested by the command.

```php
<?php
// Receiver.php

// Receiver knows how to perform an action
class Receiver
{
    public function action(): void
    {
        echo "Receiver: Executing the requested action.\n";
    }
}
```

---

## 🗂️ File: `ConcreteCommand.php`

**Purpose**:
Implements the Command interface and delegates the request to the receiver.

```php
<?php
// ConcreteCommand.php

require_once 'Command.php';
require_once 'Receiver.php';

// ConcreteCommand binds a Receiver to an action
class ConcreteCommand implements Command
{
    public function __construct(
        private Receiver $receiver // use PHP 8.2 property promotion
    ) {}

    public function execute(): void
    {
        // Delegate work to the receiver
        echo "ConcreteCommand: Delegating call to Receiver...\n";
        $this->receiver->action();
    }
}
```

---

## 🗂️ File: `Invoker.php`

**Purpose**:
Stores a command and triggers it later.

```php
<?php
// Invoker.php

require_once 'Command.php';

// Invoker holds and calls the command
class Invoker
{
    private ?Command $command = null;

    // Set the command
    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    // Execute the stored command
    public function executeCommand(): void
    {
        if ($this->command) {
            echo "Invoker: Triggering command...\n";
            $this->command->execute();
        } else {
            echo "Invoker: No command set.\n";
        }
    }
}
```

---

## 🚀 File: `index.php` (Client)

**Purpose**:
Sets up the command, receiver, and invoker — then runs the command.

```php
<?php
// index.php

require_once 'Invoker.php';
require_once 'ConcreteCommand.php';
require_once 'Receiver.php';

// Create the receiver object (knows how to perform the work)
$receiver = new Receiver();

// Create the command and bind it to the receiver
$command = new ConcreteCommand($receiver);

// Create the invoker and give it the command
$invoker = new Invoker();
$invoker->setCommand($command);

// Execute the command via the invoker
$invoker->executeCommand();
```

---

## ✅ Expected Output

```bash
Invoker: Triggering command...
ConcreteCommand: Delegating call to Receiver...
Receiver: Executing the requested action.
```

---

## 📚 GoF Reference Summary

* Pattern: **Command**
* Book: *Design Patterns: Elements of Reusable Object-Oriented Software*
* UML: page 234
* Participants:

  * `Command`
  * `ConcreteCommand`
  * `Receiver`
  * `Invoker`
  * `Client`

---

## 🧠 Teaching Notes

* This pattern encapsulates requests as objects.
* Enables **undo/redo**, **queueing**, **logging**, and **macros**.
* Encourage students to try stacking multiple commands for batch execution.



Find Ray on:

[facebook](https://www.facebook.com/TheRayCode/)

[youtube](https://www.youtube.com/TheRayCode/)

[The Ray Code](https://www.TheRayCode.com)

[Ray Andrade](https://www.RayAndrade.org)
