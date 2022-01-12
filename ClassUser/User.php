<?php

class User
{
    protected $name;
    protected $email;
    public $role;

    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setRole($role): void
    {
        $this->role = $role;
    }

    public function getInfo(){
        return "Name : ".$this->name.", Email : ".$this->email;
    }
    public function isAdmin(){
        switch ($this->role){
            case 1:
                return "là admin";
            case 2:
                return "là người dùng bình thường";
        }
    }
}