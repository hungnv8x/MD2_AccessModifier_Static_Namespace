<?php
include_once "Employee.php";
include_once "EmployeeManager.php";

class Data
{
    private $path;

    public function __construct()
    {
        $this->path = "data.json";
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->path, $dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->path);
        return $this->convertToEmployee($dataJson);
    }

    public function convertToEmployee($arr)
    {
        $data = json_decode($arr);
        $employees = [];
        foreach ($data as $item) {
            $employee = new Employee($item->firstName, $item->lastName, $item->dateOfBirth, $item->address, $item->jobPosition);
            $employees[] = $employee;
        }
        return $employees;
    }
    public function addNewEmployee($employee){
        $data = [
            "firstName" => $employee -> getFirstName(),
            "lastName" => $employee -> getLastName(),
            "dateOfBirth" => $employee -> getDateOfBirth(),
            "address" => $employee -> getAddress(),
            "jobPosition" => $employee -> getJobPosition(),
        ];

        $employees = $this->loadData();
        $employees[]=$data;
        $this->saveData($employees);
    }
    public function deleteEmployee($id){
        $employees = $this->loadData();
        array_splice($employees,$id,1);
        $this->saveData($employees);
    }
    public function updateEmployee($id,$employee){
        $data = [
            "firstName" => $employee -> getFirstName(),
            "lastName" => $employee -> getLastName(),
            "dateOfBirth" => $employee -> getDateOfBirth(),
            "address" => $employee -> getAddress(),
            "jobPosition" => $employee -> getJobPosition(),
        ];
        $employees = $this->loadData();
        $employees[$id]=$data;
        $this->saveData($employees);
    }
}