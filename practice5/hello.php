<?php

$link=@mysqli_connect(
	'localhost', //MYSQL主機名稱
	'root',      //使用者名稱
	'qasw52791', //密碼
	'php2017');   //預設使用的資料庫名稱
	

if($link){
	echo "DB connected";
}else{
	echo "DB connection failed";
}

$uname=$_POST["uname"];
$city=$_POST["city"];

$sql2="INSERT INTO phpim(name,city)VALUES('$uname','city')";
$result=mysqli_query($link,$sql2);

$result=mysqli_query($link,"SELECT * FROM phpim");

echo "<table border=1>";
while ($row=mysqli_fetch_assoc($result)) {
echo "<tr>";
	echo "<td>";
	echo $row["no"];
	echo "</td>";

	echo "<td>";
	echo $row["name"];
	echo "</td>";

	echo "<td>";
	echo $row["city"];
	echo "</td>";
}
echo "<table>";

mysqli_close($link);
?>