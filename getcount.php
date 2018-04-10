<?php
          include "dbconn.php";
          //echo "'<script>console.log('dgyGDHJBj')</script>'";
          //$id = $_POST['id'];
          //echo "'<script>console.log(\"$id\")</script>'";          
          $query = "SELECT user_orders.u_id,user_orders.user_id, user_orders.ordered_items, user_orders.total, users.emailId FROM user_orders INNER JOIN users ON user_orders.user_id=users.u_id WHERE user_orders.confirm_flag=1 and user_orders.accept_flag='Accepted'";
          $result = mysqli_query( $conn, $query);
          $num_rows = mysqli_num_rows($result);
          if(!$result)
          {
            echo "error";
          }
          else
          {
            echo $num_rows;
          }
      ?>