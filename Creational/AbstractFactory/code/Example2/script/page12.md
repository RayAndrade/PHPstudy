[home](./page01.md) | [next](./page13.md) | [back](./page11.md)

So we go to the **index.php**

At the top
```
require_once 'ConcreteFactory1.php';
require_once 'ConcreteFactory2.php';
require_once 'Client.php';
```
in **main()**
```
echo "Testing with ConcreteFactory1:<br/>\n";
```
we test
```
$factory1 = new ConcreteFactory1();
$client1 = new Client($factory1);
$client1->run();
```
and
```
echo "\nTesting with ConcreteFactory2:<br/>\n";
$factory2 = new ConcreteFactory2();
$client2 = new Client($factory2);
$client2->run();
```

[next](./page13.md) 
