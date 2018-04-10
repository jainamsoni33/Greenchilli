<?php
include "dbconn.php";
session_start();
$total = $_POST['total1'];
$id = $_SESSION['oid'];   
        echo $total;
//$query = "UPDATE user_orders SET total='$total',confirm_flag=1,status='paid' where user_id='$id' order by orderdate DESC limit 1";
if (!mysqli_query($conn,"UPDATE user_orders SET total='$total' where u_id='$id' order by orderdate DESC limit 1"))
{
echo("Error description: " . mysqli_error($conn));
}
else
{
echo("Error description: " . mysqli_error($conn));
echo "successful";
}
?>