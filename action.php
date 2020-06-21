<?php 
	session_start();
	# 檢查檔案是否上傳成功
	if ($_FILES['my_file']['error'] === UPLOAD_ERR_OK){
	echo '檔案名稱: ' . $_FILES['my_file']['name'] . '<br/>';
	echo '檔案類型: ' . $_FILES['my_file']['type'] . '<br/>';
	echo '檔案大小: ' . ($_FILES['my_file']['size'] / 1024) . ' KB<br/>';
	echo '暫存名稱: ' . $_FILES['my_file']['tmp_name'] . '<br/>';

	# 檢查檔案是否已經存在
	if (file_exists('upload/'.$_FILES['my_file']['name'])){
		echo '檔案已存在。<br/>';
	} else {
		$file = $_FILES['my_file']['tmp_name'];
		$dest = 'upload/' .$_FILES['my_file']['name'];

		# 將檔案移至指定位置
		move_uploaded_file($file, $dest);
	}
	} 

	require 'contact-upload.php';
	$cond = new get_contact;
	$ven_num = $_POST['ven_num'];
	$error_words = $_POST['error_words'];
	$error_pic = $_FILES['my_file']['name'];
	if(isset($_SESSION["account"])){
		$account=$_SESSION["account"];
		}
	
	$cond->setaccount($account);
	
	$cond->setven_num($ven_num);
	$cond->seterror_words($error_words);
	$cond->seterror_pic($error_pic);
	
    $adderror = $cond->AddError();
	$adderror = json_encode($adderror, true);
	// echo '<div id="adderror">' . $adderror . '</div>';
	// echo gettype($_FILES['my_file']['name']);
	// echo "<br>";
	
    
	if($adderror == true) {
		$updateError = $cond->updateError();
		$updateError = json_encode($ven_num);
		$before=getenv("HTTP_REFERER");
		echo "<script>alert('故障回報成功！'); location.href = '$before';</script>";
	} else {
		
    echo "<script>alert('故障回報失敗，請聯繫客服！！'); location.href = '$before';</script>";
	}
?>