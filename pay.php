<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	</style>
</head>
<body style="background-image:url(img/textured-background.jpg);background-repeat:no-repeat;background-size:cover;margin-top: 240px;"">
<?php
	include "dbconn.php";
        session_start();

	$user = $_SESSION['uname'];
	$id = $_SESSION['oid'];   
	
	
?>
	<center>
	<h1>Payment Options</h1>
	<div>
	<a href="Payinstamojo.php"  rel="im-checkout" data-behaviour="link" data-style="flat" data-text="Pay With Instamojo"></a>
	<script src="https://js.instamojo.com/v1/button.js">
	</script>
	
	</div>
	</center>
</body>
</html>