[home](./page01.md) | [next](./page10.md) | [back](./page08.md)

Let's now create **class**
```
ConcreteFactory1
```
at the top we
```
require_once 'AbstractFactory.php';
require_once 'ProductA1.php';
require_once 'ProductB1.php';
```
we
```
 implements AbstractFactory
```
and we add methods

For **createProductA**

we
```
return new ProductA1();
```
 and for **createProductB**
 ```
 return new ProductB1();
 ```
 
[next](./page10.md) 
