[home](./page01.md) | [next](./page12.md) | [back](./page10.md)

create a
```
Client
```
class

at the top
```
require_once 'AbstractFactory.php';
```

for code
```
private AbstractProductA $productA;
private AbstractProductB $productB;
```
and then

```
public function __construct(AbstractFactory $factory) {
    $this->productA = $factory->createProductA();
    $this->productB = $factory->createProductB();
}
```
and
```
public function run(): void {
    echo $this->productB->usefulFunctionB() . "<br/>\n";
    echo $this->productB->anotherUsefulFunctionB($this->productA) . "<br/>\n";
}
```


[next](./page12.md) 
