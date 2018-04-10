<?php
include "dbconn.php";
session_start();

	$user = $_SESSION['uname'];
	//echo $user;
	$query = "SELECT * FROM users WHERE emailId = '$user'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$var = $row['u_id'];
	//echo $var;
	$Firstname=$row['firstname'];
	
	$query = "UPDATE user_orders SET confirm_flag=1 WHERE user_id='$var'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$query1="SELECT * FROM user_orders where user_id=$var order by u_id desc limit 1 ";
	$result=mysqli_query($conn,$query1);
	$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
	$order_id= $row['u_id'];
	$orderitems= $row['ordered_items'];
	$total= $row['total'];
	//echo $orderitems;
	//echo $total;
        $query = "SELECT * FROM users WHERE emailId = '$eid'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//$buyer_email = $loggedin_user_email;
	$subject = 'Message';
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	//$email_message = "Dear".$user."\r\n";
	//$email_message .= "You have placed new order with order id: #".$order_id."\r\n Order Details:" .$orderitems. "\r\n and total amount is " .$total."\r\n";
	$email_message = '<html><body>';
$email_message .= '<h1> Greenchili Confirmed Order Details</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$Firstname. "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" .$user . "</td></tr>";
$email_message .= "<tr><td><strong>Order Items:</strong> </td><td>" .$orderitems. "</td></tr>";
$email_message .= "<tr><td><strong>Amount:</strong> </td><td>" .$total. "</td></tr>";
//$email_message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";

//$email_message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";
	
	$retval=mail($user, $subject,$email_message,$headers);
if($retval==false)
{
	//echo "failed";
}
else
{
	//echo "success";
}
	/* start of send mail to admin */
	
	$admin_name = 'Admin';
	$admin_email = 'vpstechub@gmail.com'; 

	//$email_message = '';;
	//$email_message = "Dear ".$admin_name."\r\n";
	//$email_message .= "You have received new order on". Order id: #".$order_id."\r\n Order Details" .$orderitems. "\r\n and total amount is " .$total."\r\n";

	$subject = "New Order Received";
	$to = $admin_email; 
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$email_message = '<html><body>';
$email_message .= '<h1> Greenchili Order Details</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$Firstname. "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" .$user . "</td></tr>";
$email_message .= "<tr><td><strong>Order Items:</strong> </td><td>" .$orderitems. "</td></tr>";
$email_message .= "<tr><td><strong>Amount:</strong> </td><td>" .$total. "</td></tr>";
//$email_message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";

//$email_message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";
	//echo $to;
	mail($to, $subject,$email_message,$headers);
	/* end of send mail to admin */
?>
<html>
<head></head>
<body style="background-image:url(img/wooden.jpg);background-repeat:no-repeat;background-size:cover;color:white">

<center><h1>Thank You for Ordering</h1>
<div>
    <a class="" href="index.php" style="color:white;font-size:35px;">Home</a>
</div></center>
</body>
</html>