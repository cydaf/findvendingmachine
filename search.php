<?php 


if(isset($_POST["searching_keyword"])){
    
    $keyword=$_POST["searching_keyword"];
    $statement = $conn->query("SELECT distinct sort.pro_name ,picture.pro_pic  FROM `sort`,`picture` ,`information`
    WHERE (sort.pro_name LIKE'%$keyword%' or sort.sort_name LIKE'%$keyword%')
    and sort.pro_name= information.pro_name AND
    sort.pro_name=picture.pro_name");
    
    $sql = "SELECT distinct sort.pro_name ,picture.pro_pic  FROM `sort`,`picture` ,`information`
    WHERE (sort.pro_name LIKE'%$keyword%' or sort.sort_name LIKE'%$keyword%')
    and sort.pro_name= information.pro_name AND
    sort.pro_name=picture.pro_name";
    $result = $conn->query($sql);
$row = $result->fetch();

if (!$row) {
   
     echo "<script> location.href = 'nosearch.php';</script>";
    exit();
}



}

    



?>
