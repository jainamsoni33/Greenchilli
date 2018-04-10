<?php
          include "dbconn.php";
          //echo "'<script>console.log('dgyGDHJBj')</script>'";
        //$id = $_POST['id'];
          //echo"'<script>console.log($id)</script>'";
          //echo "'<script>console.log(\"$id\")</script>'";          
          $query = "SELECT uo.u_id,uo.user_id,uo.ordered_items,uo.total,u.emailId FROM user_orders uo, users u WHERE uo.confirm_flag = 1 AND uo.accept_flag ='abc'  and uo.user_id = u.u_id and date(orderdate) = date(now())";
          $result = mysqli_query( $conn, $query);
          $num_rows = mysqli_num_rows($result);
          //echo "'<script>console.log(\"$num_rows\")</script>'";  
          if(!$result)
          {
            echo "error";
          }
          else
          {
            if($num_rows>0)
            {
                echo "1";

            }
            else
            {
              echo "0";
            }
          }
      ?>