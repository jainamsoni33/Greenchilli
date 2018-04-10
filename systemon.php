<?php
	include "dbconn.php";
	$sql = "UPDATE adminlogin set astatus='1' ";
	$result = mysqli_query($conn,$sql);
?>
