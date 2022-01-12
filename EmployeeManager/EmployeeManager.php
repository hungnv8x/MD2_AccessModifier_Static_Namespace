<?php

class EmployeeManager
{
    private  array $employees;

    public function __construct()
    {
        $this->employees =[];
    }
    public function add($employee){
        $this->employees[]=$employee;
    }
    public function delete($id){
        array_splice($this->employees,$id);
    }
    public function getEmployees(){
       return $this->employees;
    }
}