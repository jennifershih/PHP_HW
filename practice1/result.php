<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

	$input1=$_GET["input1"];
	$input2=$_GET["input2"];
	$gender=$_GET["gender"];

	echo "Input 1 is:".$input1."<br/>";
	echo "Input 2 is:".$input2."<br/>";
	if(is_numeric($input1)&&is_numeric($input2)){ 
		echo $input1*$input2."<br/>";
	}else{ 
		echo "請輸入數字，請回到上一頁重新輸入<br/>";
		echo "<a href='index.html'>Back</a><br/>";
	}

	echo "Your gender is:".$gender."<br/>";
	if($gender=="male") { 
		echo "Your gender is 男性<br/>";
		echo "<body bgcolor='gray'>";
	}else{ 
		echo "Your gender is 女性<br/>";
		echo "<body bgcolor='pink'>";
	} 

	echo "你的興趣:";
	$interest=$_GET["interest"];
	foreach ($interest as $data) {
		echo " ".$data;
	}
	echo "<br/>";

	for($i=0;$i<count($interest);$i++) { 
		echo $interest[$i];
	}
?>

</body>
</html>