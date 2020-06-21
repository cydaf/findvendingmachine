<?php
session_start();

require 'db.php';
$account = $_POST["account"];
$password = $_POST["password"];

//判斷變數是否存在
if( !isset($_POST['account']) || !isset($_POST['password']) || $_POST['account']=="" || $_POST['password']=="" ){
	$msg = "請輸入完整";
	header("location:login.php?msg=請輸入完整");
	}
else{
$sql = "SELECT * FROM `user` WHERE( `account` = ? AND `password` = ? )";
$sth = $conn->prepare($sql);
$sth->execute(array($account, $password));
$result = $sth->fetch(PDO::FETCH_OBJ);
	
	
	
if( $result ) {
	$_SESSION['LoginSuccess'] = true;
    $_SESSION['account'] = $account;
header("location:index.php"); 
}
else {
	header("Location: login.php?msg=帳密有誤");
}

}
?>

