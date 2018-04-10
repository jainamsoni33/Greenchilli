<?php
include "dbconn.php";

if(isset($_POST['esubmit']))
{
	$eid = isset($_POST['emailId']) ? $_POST['emailId'] : '';
	$pass = isset($_POST['password']) ? $_POST['password'] : '';
	$sql = "UPDATE users SET setpassword = '$pass' WHERE emailId = '$eid'";
	$result = mysqli_query($conn,$sql);
	if(!$result)
	{
		echo "try again";
	}
	else
	{
		echo "password changed successfully";
		header('Location: index.php');
	}

}

?>