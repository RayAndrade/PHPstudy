<?php

include_once "AbstractLogger.php";
class ErrorLogger extends AbstractLogger
{

    protected function write($message)
    {
        //echo "Error Logger: " . $message . "<br>";
    }
}