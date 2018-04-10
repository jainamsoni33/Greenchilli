<?php
include "dbconn.php";
if(isset($_POST['login-submit']))
{     
      // username and password sent from form 
      $uname = isset($_POST['emailId']) ? $_POST['emailId'] : '';
      $password = isset($_POST['setpassword']) ? $_POST['setpassword'] : '';
      //echo "user " .$uname. "pass " .$password;

      $sql = "SELECT * FROM users WHERE emailId = '$uname' AND setpassword = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      error_log($row);
      if(mysqli_num_rows($result)==1)
      {
            //echo "You are now logged in.";
            session_start();
            $_SESSION['uname'] = $uname; 
           
            echo "<script>";
      	    echo "window.location = 'orderonline.php';";
      	    echo "</script>";
      }
      else
      {
      	echo "<script>";
      	echo "alert('Please input right credentials');";
      	echo "window.location = 'login.html';";
      	echo "</script>";
      }
}
?>
