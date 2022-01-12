<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
include_once "Data.php";
if(isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    $data = new Data();
    $data->deleteEmployee($id);
    header("location:index.php");
}
