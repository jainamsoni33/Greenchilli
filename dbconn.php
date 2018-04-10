<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "greenchili2415";

// Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if ($conn->connect_error) 
   {
         die("Connection failed: " . $conn->connect_error);
   }
   else
   {
   	//error_log("Connected to Database");
   } 
?>   
