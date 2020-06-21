<?php
require 'db.php';

$name= $_POST['name'];
$gender = $_POST['gender'];
$job = $_POST['job'];





$conn->exec("UPDATE `user` SET  `name` = '$name', `gender` = '$gender' , `job` = '$job' WHERE `user`.`account` = '$account';");

echo "<script>alert('檔案更改完畢！'); location.href = 'profile.php';</script>";




?>
