[home](./page01.md) | [next](./page11.md) | [back](./page09.md)

crate class
```
ConcreteFactory2
```
we need to
```
require_once 'AbstractFactory.php';
require_once 'ProductA2.php';
require_once 'ProductB2.php';
```
have it
```
 implements AbstractFactory
```
auto generate methods

for **createProductA**
```
return new ProductA2();
```
and for **createProductB**
we return
```
return new ProductB2();
```


[next](./page12.md) 
