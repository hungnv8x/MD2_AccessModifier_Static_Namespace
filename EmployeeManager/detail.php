<?php
include_once "EmployeeManager.php";
include_once "Employee.php";
include_once "Data.php";
$data = new Data();
$employees = $data->loadData();

if (isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    $employee = $employees[$id];
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
<a href="index.php">Quay Lai</a>
<br>
<?php
echo "Họ và tên : ".$employee->getFirstName()." ".$employee ->getLastName();
echo "<br>";
echo "Ngày Sinh : ".$employee->getDateOfBirth();
echo "<br>";
echo "Địa chỉ : ".$employee->getAddress();
echo "<br>";
echo " Vị trí công việc : ".$employee->getJobPosition();
?>
</body>
</html>
