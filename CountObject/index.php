<?php
include_once "Student.php";
$student1 = new Student("Hung","hungnv@gmail.com",30);
echo "So luong objet da tao la : ".Student::$count."<br>";
$student2 = new Student("Nhung","nhung@gmail.com",20);
echo "So luong objet da tao la : ".Student::$count."<br>";
$student3 = new Student("Duc","duc@gmail.com",25);
echo "So luong objet da tao la : ".Student::$count."<br>";
echo "<pre>";
print_r($student1);
print_r($student2);
print_r($student3);