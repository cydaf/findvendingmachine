
<?php
class get_contact	{
  private $error_num;
  private $account;
  private $ven_num;
  private $error_words;
  private $error_pic;
  private $error_date;
  
  private $conn;
  private $tableName = "errror";
  
      

  function seterror_num($error_num) { $this->error_num = $error_num; }
  function geterror_num() { return $this->error_num; }
      
  function setaccount($account) { $this->account = $account; }
  function getaccount() { return $this->account; }
      
  function setven_num($ven_num) { $this->ven_num = $ven_num; }
  function getven_num() { return $this->ven_num; }
      
  function seterror_words($error_words) { $this->error_words = $error_words; }
  function geterror_words() { return $this->error_words; }
      
  function seterror_pic($error_pic) { $this->error_pic = $error_pic; }
  function geterror_pic() { return $this->error_pic; }

  function seterror_date($error_date) { $this->error_date = $error_date; }
  function geterror_date() { return $this->error_date; }

  public function __construct() {
    require_once('dbm.php');
    $conn = new DbConnect;
    $this->conn = $conn->connect();
  }

  
  public function AddError() {//加入故障回報進資料庫
    $sql = "INSERT INTO `error` (`account`, `ven_num`, `error_words`, `error_pic`, `error_date`,`finish`) values (:account, :ven_num, :error_words, :error_pic, now(),'0')";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':account', $this->account);
    $stmt->bindParam(':ven_num', $this->ven_num);
    $stmt->bindParam(':error_words', $this->error_words);
    $stmt->bindParam(':error_pic', $this->error_pic);

    if($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
  public function updateError(){//資料庫`machine` error+1(滿三次顯示錯誤)
    $sql = "UPDATE `machine` set `error_num` = error_num + 1 where ven_num = :ven_num";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':ven_num', $this->ven_num);
    if($stmt->execute()){
      return true;
    }
    else{
      return false;
    }
  }
  
}
?>


