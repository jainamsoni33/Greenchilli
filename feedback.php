<?php
include "dbconn.php";

//echo "alert('Your response is registered.');";
$name = isset($_POST['fname']) ? $_POST['fname'] : '';
$email= isset($_POST['emailid']) ? $_POST['emailid'] : '';
$pnumber = isset($_POST['cphone']) ? $_POST['cphone'] : '';
$mess = isset($_POST['message']) ? $_POST['message'] : '';	
//var_dump($_POST);

$sql = "INSERT INTO `feedback`(`fname`,`emailid`,`pnumber`,`msg`)
VALUES('".$name."','".$email."','".$pnumber."','".$mess."')";
$result = mysqli_query($conn,$sql);
if(!$result)
{
	echo "<script>";
	echo "alert('Your response isn't recorded. Try again later.');";
	echo "window.location = 'login.html';";
	echo "</script>";
}
else
{
    	echo "<script>";
    	echo "alert('Your response is registered.');";
    	echo "window.location = 'index.php';";
    	echo "</script>";
}
/* start of send mail to admin */
	
	$admin_name = 'Admin';
	$admin_email = 'jainamsoni33@gmail.com'; 
        $subject = "Greenchili Feedback Details ";
	$to = $admin_email; 
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$email_message = '<html><body>';
$email_message .= '<h1> Greenchili Feedback Details</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$name. "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" .$email . "</td></tr>";
$email_message .= "<tr><td><strong>Phone number:</strong> </td><td>" .$pnumber. "</td></tr>";
$email_message .= "<tr><td><strong>Mesage:</strong> </td><td>" .$mess. "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";
mail($to, $subject,$email_message,$headers);
	/* end of send mail to admin */
?>