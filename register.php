<?php
include "dbconn.php";

if(isset($_POST['register-submit']))
{ 
      $fname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
      $lname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
      $eid = isset($_POST['emailId']) ? $_POST['emailId'] : '';
      $mobile = isset($_POST['contact']) ? $_POST['contact'] : '';
      $password = isset($_POST['setpassword']) ? $_POST['setpassword'] : '';
      $address = isset($_POST['address']) ? $_POST['address'] : '';      
      $sql = "INSERT INTO `users`(`firstname`,`lastname`,`emailId`,`contact`,`setpassword`, `address`)
      VALUES('".$fname."','".$lname."','".$eid."','".$mobile."','".$password."', '".$address."')";
      $result = mysqli_query($conn,$sql);
      
      if(!$result)
      {
      	echo "<script>";
      	echo "alert('You are already registered, please Login');";
      	echo "window.location = 'login.html';";
      	echo "</script>";
      }
      else
      {
      	    echo "<script>";
      	    echo "alert('You are now registered, please Login');";
      	    echo "window.location = 'login.html';";
      	    echo "</script>";
      }

      
      
}
?>