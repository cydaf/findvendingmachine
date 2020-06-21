<?php
  require 'db.php';

  $sql="select * from user where account='$account'";
  $sth = $conn->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll(PDO::FETCH_CLASS, 'user');


class user {

   
  private $account;
  private $name;
  private $gender;
  private $job;


  function __set($variable, $value){}
  
 
  function __get($variable){  
    return $this->$variable;
  }

  function __construct(){
 
    $arguments = func_get_args();
    if (sizeof(func_get_args())==4){
      $this->account = $arguments["account"];
      $this->name = $arguments["name"];
      $this->gender = $arguments["gender"];
      $this->job = $arguments["job"];
    }


  }
   
}


?>


