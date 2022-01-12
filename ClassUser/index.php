<?php
include_once "User.php";
$user1 = new User("Hung","hungnv@gmail.com",1);
$user2 = new User("Nhung","nhung@gmail.com",2);

echo $user1->getInfo();
echo "<br>";
echo $user1->isAdmin();
echo "<br>";
echo $user2->getInfo();
echo "<br>";
echo $user2->isAdmin();