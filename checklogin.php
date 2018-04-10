<?php
	include "dbconn.php";
    session_start();
    if(empty($_SESSION["uname"]))
	{
	    header('Location: login.html');
	}
	else
	{
		header('Location: orderonline.php');
	}
?>
