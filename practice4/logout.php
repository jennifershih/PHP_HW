<?php
	session_start();
	session_unset("$_SESSION[success]");
	header("Location:index.html");

?>