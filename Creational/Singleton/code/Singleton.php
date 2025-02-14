<?php

class Singleton
{
    private static ?Singleton $instance = null;
    private function __construct() {
        echo "<br>Singleton instance created.\n";
    }
    public static function getInstance(): Singleton {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    public function showMessage() {
        echo "<br>Hello from Singleton!\n";
    }
    private function __clone() {}
    public function __wakeup() {
        throw new \Exception("Cannot unserialize Singleton");
    }
}