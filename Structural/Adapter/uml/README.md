
* **Exactly 3 lines per Participant**
* **Each line ≤ 15 words**
* **Junior-college level**
* **Preserve original GoF class names**

---

# 🌟 Adapter — Participants (for C# Students)

## **Target**

* Defines the interface the Client expects to use.
* Represents the standard behavior used by the system.
* Used directly by the Client.

## **Client**

* Works with objects through the Target interface.
* Does not know Adaptee’s incompatible interface.
* Relies on Adapter to communicate correctly.

## **Adaptee**

* Has an existing interface incompatible with Target.
* Contains useful functionality already implemented.
* Cannot be easily modified.

## **Adapter**

* Implements the Target interface.
* Converts Client requests into Adaptee method calls.
* Allows incompatible interfaces to work together.

---

Next up? **Bridge (C#)**, **Composite (C#)**, or keep going pattern-by-pattern 👍

