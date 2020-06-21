

<?php
  require 'db.php';

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];


$statement = $conn->query("select * from user where account='$account'");

foreach($statement as $row){
    $realpassword=$row['password'];
}




if ($password1==$realpassword){
    $conn->exec("UPDATE `user` SET `password` = '$password2' WHERE `user`.`account` = '$account'");
    echo "<script>alert('密碼修改完畢！'); location.href = 'profile.php';</script>";
    
}
else{
    echo "<script>alert('原始密碼輸入錯誤！'); location.href = 'edit_password.php';</script>";

}


//讀出所有資訊->判斷密碼是否相同->沒有不同存入

?>

