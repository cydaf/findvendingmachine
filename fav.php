<?php 
$ven_num=$_GET["ven_num"];
include 'db.php';
$sqlfind="select * from favorite where account='$account' and ven_num=$ven_num";
$result = $conn->query($sqlfind);
$row = $result->fetch();

//用getnev判別是從哪個網頁來的(上一頁)
$before=getenv("HTTP_REFERER");

if (!$row) {//可以收藏
    $sql="insert into favorite (account,ven_num) values ('$account',$ven_num)";
    $result = $conn->query($sql);
    echo "<script>alert('收藏販賣機成功！'); location.href = '$before';</script>";

}else{//取消收藏
    $sql2="DELETE FROM favorite WHERE account='$account' and ven_num=$ven_num;";
    $result2 = $conn->query($sql2);
    echo "<script>alert('已取消收藏！'); location.href = '$before';</script>";
}




//echo "<script>alert('收藏號販賣機成功！'); location.href = 'index.php';</script>";
//header("location:index.php");
?>

