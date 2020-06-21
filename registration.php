<?php

require 'db.php';

//register new User 
if (!empty($_POST)) {	
    $uAccount = $_POST["account"] ?? "";
    $uPassword = $_POST["password"] ?? "";
    $uName = $_POST["name"] ?? "";
    $uGender = $_POST["gender"] ?? "";
    $uJob = $_POST["job"] ?? "";
   
function createUser($conn, $data = [])
{
	$sql="insert into user (account,password,name,gender,job) values (:account, :password, :name, :gender,:job)";
    $stmt = $conn->prepare($sql);
    
    $addUserData = [
        'account' => $data['account'],
        'password'=> $data['password'],
        'name'    => $data['name'],
        'gender'  => $data['gender'],
        'job'     => $data['job'],
    ];
    
    return $stmt->execute($addUserData);
}

    
//確認使用者是否存在
    	function findUserByAccount($conn, $account)
{
	$sql="select * from user where account = :account";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':account', $account);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

    
    $user = findUserByAccount($conn, $uAccount);

    if ($user) {           
       echo '<script language="JavaScript">;alert("使用者已存在!");location.href="registration.html";</script>;';
    }

//新增使用者

    $addResult = createUser($conn, [
        'account' => $uAccount,
        'password'=> $uPassword,
        'name' => $uName,
        'gender' => $uGender,
        'job' => $uJob,
    ]);

    // 跳轉並將結果帶回註冊頁面。
       echo '<script language="JavaScript">;alert("註冊成功! 請看使用說明");location.href="doc.html";</script>;';
}
?>