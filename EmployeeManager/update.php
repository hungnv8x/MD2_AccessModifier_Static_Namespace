<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
include_once "Data.php";
if (isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    $data = new Data();
    $emps = $data->loadData();
    $emp = $emps[$id];
}
?>
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
    <input name="firstName" value="<?php echo $emp->getFirstName()?>"><br>
    <input name="lastName" value="<?php echo $emp->getLastName()?>" ><br>
    <input type="date" name="dateOfBirth" value="<?php echo $emp->getDateOfBirth() ?>" ><br>
    <input name="address" value="<?php echo $emp->getAddress() ?>"> <br>
    <input name="jobPosition" value="<?php echo $emp->getJobPosition() ?>" ><br>
    <button>Update</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_REQUEST["id"];
    $employee = new Employee($_REQUEST["firstName"], $_REQUEST["lastName"],
        $_REQUEST["dateOfBirth"], $_REQUEST["address"], $_REQUEST["jobPosition"]);
    $data = new Data();
    $employees = $data->loadData();
    $employees[$id] = $employee;
    $data->saveData($employees);
    header("location:index.php");
}
?>