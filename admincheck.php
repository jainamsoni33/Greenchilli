<?php
 // error_reporting(0);
  
 include ("dbconn.php");
  $name = isset($_POST['Username']) ? $_POST['Username'] : '';
  //echo $name;
  $pass = isset($_POST['Password']) ? $_POST['Password'] : '';  
  //echo $pass;
  $sql = "SELECT * FROM adminlogin WHERE Username = '$name' and Password = '$pass'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  //echo $count;
  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) 
  {
    session_start();
    $_SESSION["adminname"] = $name;
    echo "<script>";
    echo "window.location = 'adminview.php';";
    echo "</script>";
  }
  else
  {
  echo"hi";
  echo "<script>";
  echo "alert('Please enter correct credentials');";
  echo "window.location = 'adminlogin.html';";
  echo "</script>";

  } 
  ?>