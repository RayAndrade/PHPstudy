<?php
require_once 'ConcreteBuilder.php';
require_once 'Director.php';

$builder = new ConcreteBuilder();
$director = new Director($builder);

$director->construct();

$product = $builder->getResult();

$product->show();