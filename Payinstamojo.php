<?php 
//$product_name = $_POST["product_name"];
include "dbconn.php";
//$price = $_POST["total"];
//$name = $_POST["name"];
//$phone = $_POST["phone"];
//$email = $_POST["email"];

include 'src/Instamojo.php';
$api = new Instamojo\Instamojo('5ab8dc6538947002cbc00d4f7e9a1f56', '88ae3ea056d3209c1eba67ec32ed74b5','https://www.instamojo.com/api/1.1/');
session_start();
$eid = $_SESSION["uname"]; 
//echo $eid;	
$query = "SELECT u_id FROM users WHERE emailId = '$eid'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
$id = $row["u_id"];
//echo $id;
$sql = "SELECT * FROM user_orders WHERE user_id = '$id' and confirm_flag = 0";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
//echo $row["total"];
	try 
	{
		$response = $api->paymentRequestCreate(array(
		"purpose" => "GreenChiliOrder",
		"amount" => $row["total"],
		"buyer_name" => $eid,
		"send_email" => true,
		"send_sms" => false,
		"email" => $eid,
		"allow_repeated_payments" => false,
		"redirect_url" => "http://www.greenchili.co.in/Testing/Thankyou.php",
		"webhook" => "http://www.greenchili.co.in/Testing/Webhook.php"
		));
		$pay_ulr = $response['longurl'];
		echo $response['longurl'];    
		//Redirect($response['longurl'],302); //Go to Payment page
		header("Location: $pay_ulr");
		exit();
	}
	catch (Exception $e) 
	{
		print('Error: ' . $e->getMessage());
	} 
}    
?>