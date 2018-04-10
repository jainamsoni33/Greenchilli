<?php
include "dbconn.php";
$query = "select astatus from adminlogin";
$result = mysqli_query( $conn, $query);
$row = mysqli_fetch_array($result);
echo $row['astatus'];
?>