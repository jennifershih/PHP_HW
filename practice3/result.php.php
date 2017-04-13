<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	
	include ("include.inc");
	require ("include.inc");

	echo time()."<br/>";

	$now=mktime();
	$nowdate=getdate($now);
	echo "今天是".$nowdate["year"]."年".$nowdate["month"]."月".$nowdate["date"]."日";
	echo date ("F月j日星期lH點i分s秒");
	$changed=strtotime("next month");
	echo date("F月j日星期lH點i分s秒",$changed);

	$n=$_GET["input1"];
	$m=$_GET["input2"];

	echo "Input 1 is:".$n."<br/>";
	echo "Input 2 is:".$m."<br/>";

	echo "<table border ='1'>";

	echo "<tr>";
		echo "<td>*";
		echo "</td>";

	for ($j=1 ; $j<=$n ; $j++) { 
		echo "<td>";
		echo $j;
		echo "</td>";
	}

	echo "</tr>";

	for($i=1 ; $i<=$n ; $i++){ 
		echo "<tr>";
		echo $i;
		echo "</tr>";
	}

	for($j=1 ; $j<=$m ; $j++){
		echo "<td>";
			echo $i."*".$j."=".$i*$j."\t";
				echo "</td>";
	}

	echo "</tr>";
	
	echo "</table>";
?>

</body>
</html>