<?php

include "dbconn.php";
session_start();

$user = $_SESSION['uname'];
$id = $_POST['id'];
$query = "UPDATE user_orders SET accept_flag = 'Rejected' WHERE u_id='$id'";
$result = mysqli_query( $conn, $query);
if(!$result)
{
 echo "error";
}
else
{
 echo "success";
}

$query1 = "SELECT * FROM users WHERE emailId = '$user'";
$result1 = mysqli_query($conn,$query1);
$row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
$var = $row['u_id'];
$Firstname=$row['firstname'];

$query2 = "UPDATE user_orders SET confirm_flag=1 WHERE user_id=$var";
$result2 = mysqli_query($conn,$query2);
$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);


$query3="SELECT * FROM user_orders where user_id=$var order by u_id desc limit 1 ";
$result3=mysqli_query($conn,$query3);
$row= mysqli_fetch_array($result3,MYSQLI_ASSOC);
$order_id= $row['u_id'];
$orderitems= $row['ordered_items'];
$total= $row['total'];

$query4 = "SELECT * FROM users WHERE emailId = '$eid'";
$result4 = mysqli_query($conn,$query4);
$row = mysqli_fetch_array($result4,MYSQLI_ASSOC);
  //$buyer_email = $loggedin_user_email;
$subject = 'Greenchili Order Cancellation';
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$email_message = '<html><body>';
$email_message .= "Dear \r\n".$user."\r\n";
$email_message .= "Sorry your Order has been cancelled. \r\n";
$email_message .= '<h1> Greenchili Order Cancelled Details</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$Firstname. "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" .$user . "</td></tr>";
$email_message .= "<tr><td><strong>Order Items:</strong> </td><td>" .$orderitems. "</td></tr>";
$email_message .= "<tr><td><strong>Amount:</strong> </td><td>" .$total. "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";

$retval=mail($user, $subject,$email_message,$headers);
if($retval==false)
{
  echo "failed";
}
else
{
  echo "success";
}
?>