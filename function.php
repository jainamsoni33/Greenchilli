<?php

	include "dbconn.php";
	echo "in function";
	$query = "SELECT * FROM users WHERE emailId = data";
	$result = mysqli_query($conn,$query);
	$rows = mysqli_fetch_array($result);
	$count = mysqli_num_rows($rows);
	if($count>=1)
	{
		return $count;
	}
	function logout() 
	{
    	unset($_SESSION['user_id']);
    	setcookie("user_id", "", time() - 3600);
    	header("Location: http://".$_SERVER['HTTP_HOST']);
    	exit;
	}
?>