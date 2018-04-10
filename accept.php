<?php
  include "dbconn.php";
  //echo "'<script>console.log('dgyGDHJBj')</script>'";
  $id = $_POST['id'];
  echo "$id";
  //echo "'<script>console.log(\"$id\")</script>'";          
  $query = "UPDATE user_orders SET accept_flag = 'Accepted' WHERE u_id='$id'";
  $result = mysqli_query( $conn, $query);
  if(!$result)
  {
    echo "error";
  }
  else
  {
    echo "success";
  }
?>