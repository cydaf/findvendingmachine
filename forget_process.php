<?php
  require 'db.php';

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$account = $_POST['account'];

$statement = $conn->query("select * from user where account='$account'");

foreach($statement as $row){
    $realpassword=$row['password'];
}

$sql = "select * from user where account='$account'";
$result = $conn->query($sql);
$row = $result->fetch();

if (!$row) {
     echo "<script>alert('沒有這個帳號喔，請重新確認');location.href = 'forget.php'</script>";
    exit();
}
if ($password1==$password2){
    $conn->exec("UPDATE `user` SET `password` = '.$password2.' WHERE `user`.`account` = '$account'");
    echo "<script>alert('密碼更改成功，請重新登入！'); location.href = 'login.php';</script>";
   
}
else{
 echo "<script>alert('密碼更改失敗，請重新輸入！'); location.href = 'forget.php';</script>";
}


//讀出所有資訊->判斷密碼是否相同->沒有不同存入

?>
