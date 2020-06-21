<?php
require 'db.php';

$ven_num = $_POST["ven_num"];
//echo $ven_num;

$sql = "SELECT * FROM `picture` ,`information` WHERE picture.pro_name = information.pro_name and information.ven_num ='$ven_num'";
$sth = $conn->prepare($sql);
$sth->execute();
$rows = $sth->fetchAll(PDO::FETCH_CLASS, 'product');

class product
{

  private $pro_pic;
  private $pro_name;
  private $price;
  private $amount;


  function __set($variable, $value)
  {
  }

  function __get($variable)
  {
    return $this->$variable;
  }

  function __construct()
  {

    $arguments = func_get_args();
    if (sizeof(func_get_args()) == 4) {
      $this->pro_pic = $arguments["pro_pic"];
      $this->pro_name = $arguments["pro_name"];
      $this->price = $arguments["price"];
      $this->amount = $arguments["amount"];
    }
  }
}
