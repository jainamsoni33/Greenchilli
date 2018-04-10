<?php
include "dbconn.php";
session_start();

if(!empty($_SESSION["uname"])) 
{
	$_SESSION["uname"] = "";
	session_destroy();
	header('Location: index.php');
}

?>