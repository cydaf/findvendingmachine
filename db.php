<?php
  $host = "localhost";
  $dbname = "sa";
  $username = "SA";
  $password = "";
  
  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query('SET NAMES "utf8"');  
  
  }
  catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
  }
session_start();
$account="0430shinyu@gmail.com";
if(isset($_SESSION["account"])){
$account=$_SESSION["account"];
}
else{
    header("location:login.php");
}
?>
