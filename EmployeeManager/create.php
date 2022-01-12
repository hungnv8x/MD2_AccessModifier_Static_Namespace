<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input name="firstName" placeholder="First Name"><br>
    <input name="lastName" placeholder="Last Name"><br>
    <input type="date" name="dateOfBirth" placeholder="Date of birth"><br>
    <input name="address" placeholder="Address"><br>
    <input name="jobPosition" placeholder="Job position"><br>
    <button>Create</button>
</form>
</body>
</html>
<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
include_once "Data.php";
$data = new Data();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee = new Employee($_REQUEST["firstName"], $_REQUEST["lastName"],
        $_REQUEST["dateOfBirth"], $_REQUEST["address"], $_REQUEST["jobPosition"]);
    $data->addNewEmployee($employee);
    header("location:index.php");
}
?>