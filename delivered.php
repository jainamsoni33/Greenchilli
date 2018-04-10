<?php
include "dbconn.php";
          
$id = $_POST['id'];      
$query = "DELETE FROM user_orders WHERE u_id='$id'";
$result = mysqli_query( $conn, $query);
if(!$result)
{
  echo "error";
}
else
{
  echo "success"  ;
}
?>