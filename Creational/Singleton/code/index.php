<?php
require_once 'Singleton.php';
require_once 'PlainClass.php';

$singleton1 = Singleton::getInstance();
$singleton1->showMessage();

$singleton2 = Singleton::getInstance();

if ($singleton1 === $singleton2) {
    echo "<br>Both Singleton instances are the SAME object.\n";
} else {
    echo "<br>ERROR: Singleton instances are different! (This should not happen)\n";
}

$plain1 = new PlainClass();
$plain2 = new PlainClass();

if ($plain1 === $plain2) {
    echo "<br>ERROR: PlainClass instances are the same! (This should not happen)\n";
} else {
    echo "<br>PlainClass instances are DIFFERENT objects.\n";
}