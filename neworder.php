<?php
  include "dbconn.php";         
  $query = "SELECT uo.u_id,uo.user_id,uo.ordered_items,uo.total,uo.user_address,uo.status,u.firstname,u.lastname FROM user_orders 
uo, users u WHERE uo.user_id = u.u_id AND uo.confirm_flag = 1 AND uo.accept_flag ='abc' and date(uo.orderdate) = date(now()) limit 1";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  if($row >0)
  {
   //var_dump($row);
   echo json_encode($row);  
  }
  else
  {
    echo "No New Order found.";
  }
?>