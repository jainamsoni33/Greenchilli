<?php
	include "dbconn.php";
	if(isset($_POST['submit_order']))
  {
    $subtotal=isset($_POST['subTotal']) ? $_POST['subTotal'] : '';
    $total = isset($_POST['total']) ? $_POST['total'] +20 : '';
    $ordered_items = isset($_POST['ordered_items']) ? $_POST['ordered_items'] : '';
    $code = isset($_POST['couponCode']) ? $_POST['couponCode'] : '';
    session_start();
    if(!empty($_SESSION["uname"]))
    {
      $username = $_SESSION["uname"];
      echo "'<script>console.log(\"$ordered_items\")</script>'";
      $sql = "SELECT u_id FROM users WHERE emailId = '$username'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $r = $row['u_id'];
      echo "'<script>console.log(\"$r\")</script>'";
    	$query = "INSERT INTO `user_orders`(`user_id`,`ordered_items`,`sub-total`,`total`) VALUES('".$r."','".$ordered_items."','".$subtotal."','".$total."')";
    	$result = mysqli_query($conn,$query);
      if(!$result)
      {
        echo "Not working";
        
      }
      else
      {
        $sql ="SELECT u_id from user_orders where user_id=(Select u_id from users where emailId='$username') order by u_id desc limit 1";
         $result = mysqli_query($conn,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $r = $row['u_id'];
        session_start();
        $_SESSION['oid'] = $r; 
        header('Location: checkout.php');
        
      }
    }
  else
  {
    header('Location: login.html');
  }
  }
?>