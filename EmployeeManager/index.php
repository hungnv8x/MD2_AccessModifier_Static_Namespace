<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
include_once "Data.php";
$data = new Data();
$employees = $data->loadData();
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
<form method="get">
    <a href="create.php">Add</a>
    <table border="1px" style="border-collapse: collapse; width: 800px">
        <thead>
        <tr>
            <th>STT</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of birth</th>
            <th>Address</th>
            <th>Job Position</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($employees as $key => $employee): ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $employee->getFirstName(); ?></td>
                <td><?php echo $employee->getLastName(); ?></td>
                <td><?php echo $employee->getDateOfBirth(); ?></td>
                <td><?php echo $employee->getAddress(); ?></td>
                <td><?php echo $employee->getJobPosition(); ?></td>
                <td><a href="update.php?id=<?php echo $key ;?>">Edit</a></td>
                <td><a href="detail.php?id=<?php echo $key ;?>">Detail</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $key; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</form>
</body>
</html>
