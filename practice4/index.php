<?php
	if(isset($_COOKIE["id"])){
		echo $_COOKIE["id"]."Welcome back";
	}else
		echo "no cookies";
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="login.php" method="post">

	請輸入帳號:<input type="text" name="id"><br>
	請輸入密碼:<input type="password" name="pwd"><br>

	<input type="submit" name="送出資料">
	<input type="reset" name="重設資料">
</form>
</body>
</html>
