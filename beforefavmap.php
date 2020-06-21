<!-- 判斷販賣機是否收藏 -->
<?php
require 'db.php';
$account=$_SESSION["account"];

$sql="select * from favorite where account='$account'";
$result = $conn->query($sql);
$row = $result->fetch();

if ( ! $row) {
   
     echo "<script>alert('你還沒有收藏販賣機喔，快去首頁看看吧！'); location.href = 'index.php';</script>";
    exit();
}
else{
      echo "<script>location.href = 'favmap.php';</script>";
}

?>

