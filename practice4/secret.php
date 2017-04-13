<?php
session_start();

if(isset($_SESSION["success"])){
	echo "secret <br>";
	echo "<a href='logout.php'>登出</a>";

}else{
	echo "非法進入";
}


?>