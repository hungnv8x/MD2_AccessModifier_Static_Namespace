<?php

class Application
{
    private static $instance;
    private function __construct()
    {
    }

    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo "Hello";
        }
        return self::$instance;
    }
}