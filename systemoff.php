<?php
	include "dbconn.php";
	$sql = "UPDATE adminlogin set astatus='0' ";
	$result = mysqli_query($conn,$sql);
?>