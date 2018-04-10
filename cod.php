<?php
	include "dbconn.php";
	$sql = "UPDATE user_orders set status='unpaid' order by u_id desc limit 1 ";
	$result = mysqli_query($conn,$sql);
?>
