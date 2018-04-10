<?php
include "dbconn.php";
session_start();

if(!empty($_SESSION["adminname"])) 
{
	$_SESSION["adminname"] = "";
	session_destroy();
	header('Location: adminlogin.html');
}
	
?>