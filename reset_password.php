<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
	        <div style="position: absolute;top:40%;left:30%;font-size:25px;font-weight:20px">
		<label>Enter e-mail:</label>
		<input type="text" name="emailId" id="emailId">
		<input type="submit" name="forgot-password" id="forgot-password">
		</div>

	</form>

	<?php
	include "dbconn.php";
	if(isset($_POST['forgot-password']))
	{
		$eid = isset($_POST['emailId']) ? $_POST['emailId'] : '';
		$query = "SELECT * FROM users WHERE emailId = '$eid'";
		$result = mysqli_query($conn,$query);
		$rows = mysqli_fetch_array($result);
		$count = mysqli_num_rows($result);
		if($count>=1)
		{
			 
                  $subject = "Greenchili Password Details ";
	          $to = $eid; 
	          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	          $email_message = '<html><body>';
                  $email_message .= '<h1> Greenchili Password Details</h1>';
                  $email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                  $email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$rows['firstname']. "</td></tr>";
                  $email_message .= "<tr><td><strong>Email:</strong> </td><td>" .$rows['emailId']. "</td></tr>";
                  $email_message .= "<tr><td><strong>Phone number:</strong> </td><td>" .$rows['contact']. "</td></tr>";
                  $email_message .= "<tr><td><strong>Old Password:</strong> </td><td>".$rows['setpassword']." </td></tr>";
                  $email_message .= "</table>";
                  $email_message .= "</body></html>";
                  $retval=mail($to, $subject,$email_message,$headers);
if($retval==false)
{
echo "<script>";
 echo "alert('Error');";
 echo "window.location = 'login.html';";
 echo "</script>";
}
else
{
echo "<script>";
 echo "alert('Passowrd has been sent via mail.');";
 echo "window.location = 'login.html';";
 echo "</script>";
}
}
}

		?>