<?php
	$id=$_POST["id"];
	$pwd=$_POST["pwd"];

	$oid="test";
	$opwd="123456";
	$date=strtotime("+7 days",time());


	if ($id==$oid && $pwd==$opwd) {
		echo "登入成功";
		$_SESSION["success"]="yes";
		setcookie("id",$id,$date);
		//setcookie("pwd",$pwd,$time()-10);
		header("Location:success.php");
	}else{
		echo session_id();
		echo "登入失敗，3秒後回首頁重新登入";
		header("Refresh:3;url=index.html");
	}
?>