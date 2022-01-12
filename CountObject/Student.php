<?php

class Student
{
    private $name;
    private $email;
    private $age;
    public static $count;

    public function __construct($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        self::$count ++;
    }

}