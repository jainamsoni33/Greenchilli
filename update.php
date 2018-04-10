<?php
	  $sql = "SELECT COUNT(u_id) FROM user_orders";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
?>