<?php
    include "dbconn.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Greenchili Restaurant</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
<![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
<![endif]-->
    <style>
        hr{
            margin:0px;
        }
        label
        {
            font-family: raleway;
            color:white;
            font-size: 15px;
        }
        h3
        {
            font-family: raleway;
            color:#fed136;
            padding-top: 15px;
        }
        input
        {
            border-width: 0px 0px 1px 0px;
            background-color: transparent;
            width:75%;
            color:white;
            font-family: Helvetica;

        }
        
        
        
    </style>
</head>
    <body id="page-top" class="index" style="padding-top:120px;background-image:url(img/textured-background.jpg);background-repeat:no-repeat;background-size:cover;">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img style="max-width:190px;margin-top: -30px;height:80px" src="img\Green-Chilli-Logo-cut (2).png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.php" style='color:black'>Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#about" style='color:black'>About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#gallery" style='color:black'>Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#contact" style='color:black'>Contact us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="menucard.php" style='color:black'>Menu Card</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="checklogin.php" style='color:black'>Order Online</a>
                    </li>
                    <li>
                    <?php
                    if(!empty($_SESSION["uname"]))
                    {
                        echo "<a class='page-scroll' style='color:black'> Hello " .$_SESSION['uname']."</a>
                         <li>
                   
                        <a class='page-scroll' href='logout.php' style='color:black'>Logout</a>
                    </li>";
                    }
                    ?>
                    <?php
                    if(empty($_SESSION["uname"]))
                        echo "<a class='page-scroll' href='login.html' style='color:black'>Log In</a>";
                    ?>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-lg-4 " style="background-color:rgba(0,0,0,0.8);color:white">
                <h3 class="text-center">Customer Details</h3>
                <hr style="background-color:yellow;height:1px">
                <?php
                $eid = $_SESSION["uname"];
                $query = "SELECT * FROM users WHERE emailId = '$eid'";
                $result = mysqli_query($conn,$query);
                //$row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
                //$id = $row1["u_id"];
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

                    echo "<br><form method='post' ><label>First Name:</label><br>
                    <input type='text' id='firstname' value='".$row["firstname"]."' readonly><br><br>
                    
                    <label>Last Name:</label><br>
                    <input type='text' id='lastname' value='".$row["lastname"]."' readonly ><br><br>
                    
                    <label>Email :</label><br>
                    <input type='email' id='emailId' value='".$row["emailId"]."' readonly ><br><br>
                    
                    <label>MOBILE:</label><br>
                    <input type='phone' id='contact' value='".$row["contact"]."' readonly ><br><br>";
                    $sql = "SELECT user_address FROM user_orders WHERE user_id = '".$row["u_id"]."' and confirm_flag = 0 ";
                    $result1 = mysqli_query($conn,$sql);
                    if($result1){
                    $row2 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
                    $addr = explode(",",$row2["user_address"]);
                    $length = count($addr);
                    //echo $length;
                    $address1='';
                    $last = $length-1;
                    for($i=0;$i<$length-1;$i++)
                    {
                        $address1.=$addr[$i];
                        $address1.=',';
                    }
                    }
                    
                    if(strcmp($address1,'')==0){
                        //echo("out");
                    echo "<label>ADRESS LINE 1:</label><br>
                    <input type='textarea' id='address' name='address' style='width:100%' required><br><br>
                    <select id='locations' name='locations'  style='width:100%;background-color:transparent;color:white'>
                    <option value='Bandra-West' style='width:100% ;color:black'>Bandra-West</option>
                    <option value='Khar-West' style='width:100% ;color:black'>Khar-West</option>
                    </select>
                    ";}
                    else if(strcmp($addr[$last],'Bandra-West')==0)
                    {
                       // echo ('in bandra');
                        echo "<label>ADRESS LINE 1:</label><br>
                    <input type='textarea' id='address' name='address' value='$address1' style='width:100%'><br><br>
                    <select id='locations' name='locations'  style='width:100% ;background-color:transparent;color:white'>
                    <option value='Bandra-West' selected style='width:100%; color:black'>Bandra-West</option>
                    <option value='Khar-West' style='width:100%; color:black'>Khar-West</option>
                    </select>
                    ";
                    }
                    else
                        {
                           // echo ('In khar');
                            echo "
                        <label>ADRESS LINE 1:</label><br>
                    <input type='textarea' id='address' name='address' value='$address1' style='width:100%'><br><br>
                    <select id='locations' name='locations'  style='width:100% ;background-color:transparent;color:white'>
                    <option value='Bandra-West' style='width:100%;color:black'>Bandra-West</option>
                    <option value='Khar-West' selected style='width:100% ;color:black'>Khar-West</option>
                    </select>
                    ";
                    }

                    echo "
                    <hr style='background-color:yellow;height:1px'><br>
                    <input type='submit' id='confirm' name='confirm_details' value='Confirm Details' readonly style='color:black;width:30%;background-color:#fed136;height:40px;font-size:15px;white-space:normal'><br><br>
                    </form>";
                }
                 if(isset($_POST['confirm_details']))
                {
                    $address = isset($_POST['address']) ? $_POST['address'] : '';
                    $locality = isset($_POST['locations']) ? $_POST['locations'] : '';
                    //echo $locality;
                    $address.=",";
                    $address.= $locality;
                    //echo $address;
                    $username = $_SESSION["uname"];
                    $sql = "SELECT u_id FROM users WHERE emailId = '$username'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $r = $row['u_id'];                    
                    $query = "UPDATE user_orders SET user_address = '$address' WHERE user_id = '$r' AND confirm_flag=0";
                    //$query="UPDATE users SET temp_address = '$address' WHERE emailId = '$username'";
                    if(!$result = mysqli_query($conn, $query))
                    echo "Not working\n";
                    else
                    {
                        //echo "working";
                        $query1="UPDATE users SET address = '$address' WHERE emailId = '$username'";
                        if($result = mysqli_query($conn, $query1))
                        {
                        //echo "Address details are confirmed\n";
                        echo "<script>location.replace('checkout.php'); </script>";
                        }
                      }    
                    }
                ?>
                </div>
            <div class="col-md-4 col-lg-4" style="background-color:rgba(0,0,0,0.7);color:white">
                <h3 class="text-center">MODE OF PAYMENT</h3>
                <hr style="background-color:yellow;height:1px">
                <br>
                <input type="radio" name="payment" id="online_pymnt" style="width:20%"><label style="margin-left:15px;font-size: 18px">Online Payment</label>
                <br>
                <br>
                <input type="radio" name="payment" id="cod" style="width:20%" ><label style="margin-left:15px;font-size: 18px">Cash on Delivery</label>
                <br>
                <br>
                <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                <img src="img/SecureCheckout.png"></div>
                </div>
                <br>
                <br>
                </div>
            <div class="col-md-4 col-lg-4"  style="background-color:rgba(0,0,0,0.8);color:white">
                      
                    <h3>ORDER DETAILS</h3>
                    <hr style="background-color:yellow;height:1px">
                <?php
                $eid = $_SESSION["uname"];
                $query = "SELECT u_id FROM users WHERE emailId = '$eid'";
                $result = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);
                $id = $row["u_id"];
                $sql = "SELECT * FROM user_orders WHERE user_id = '$id' and confirm_flag = 0 ";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                {

                    echo "<form method='post'><br><div class='row'>
                    <div class='col-md-5 col-lg-5 col-xs-5 col-sm-5'  >
                    <label style='padding-left:30px;font-size:18px;'>SubTotal</label>
                    </div>
                    <div class='col-md-5 col-lg-5 col-xs-5 col-sm-5'>
                    <input class='text-center' type='text'  id='subTotal' value='".$row["sub-total"]."' size='3' style='font-size:17px;margin:5px;' readonly>
                    </div>
                    </div>
                    <br>
                    <hr>
                    <br>


                    <div class='row'>
                    <div class='col-md-5 col-lg-5 col-xs-5 col-sm-5'>
                    <label style='padding-left:30px;font-size:18px;'>SavingTotal</label>
                    </div>
                    <div class='col-md-5 col-lg-5 col-xs-5 col-sm-5'>
                    <input  class='text-center' type='textbox'  id='savingTotal' size='3' style='font-size:17px;margin:5px;' readonly>
                    </div>
                    </div>
                    <br>
                    <hr>
                    <br>

                    <div class='row'>
                    <div class='col-md-5 col-lg-5 col-xs-6 col-sm-6'>
                    <label style='padding-left:30px;font-size:18px;'>Packeting Charge</label>
                    </div>
                    <div class='col-md-5 col-lg-5 col-xs-5 col-sm-5'>
                    <label style='font-size:19px'> Rs 20 </label>
                    </div>
                    </div>
                    <br>
                    <hr>
                    <br>

                    <div class='row'>
                    <div class='col-md-5 col-lg-5 col-xs-5 col-sm-5'>
                    <label style='padding-left:30px;font-size:19px;color:green'>Order Total</label>
                    </div>
                    <div class='col-md-5 col-lg-5 col-xs-5 col-sm-5'>
                    <input class='text-center' type='textbox'  id='orderTotal' size='3' value='".$row["total"]."' style='font-size:17px;margin:5px;' readonly>
                    </div>
                    </div>
                    <br>
                    <hr></form>";
                    }
                    ?>
                    <hr style="background-color:yellow;height:1px">
                    <br>
                    <div class="row">
                          <div class="col-md-7 col-lg-7">
                            <input class="form-control" id="couponCode" name="couponCode" value="" style="font-size:14px;margin:5px;" placeholder="Add Coupon Code here" />
                          </div>
                          <div class="col-md-5 col-lg-5">
                           <input type = "button" class="btn btn-sm" style="font-size:15px;margin:5px;color:black;background-color:#fed136" id="couponBtn" onclick="addCouponCode()" disabled value="Add Coupon"/>
                          </div>
                          <div id="coupon_message" style="color:red;">
                          </div>
                      </div>
                       <hr style="background-color:yellow;height:1px">
                    <br>
                    <center> <button class="btn btn-primary btn-lg"  id='confirm_order'  name='confirm_order' value='Confirm order' style='font-size:17px;margin:5px;color:black;'>Confirm Order</button></center>
                    <div class="col-md-3 col-lg-3" >
                 
                 </div>
                 </div>
                 <div class="modal fade" id="confirmorder" role="dialog" >
    <div class="modal-dialog" >

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" style="color:black">NOTE</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <br>
          <hr style="background-color:#fed136; height: 2px; ">
          <br>
          <div class="row text-center">
              <label style="font-family: Raleway;color:black">"Order once confirmed cannot be deleted. "</label>
          </div>
          <br>
          <hr style="background-color:#fed136; height: 2px; ">
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="payment()" style="background-color: #fed136">Confirm</button>
      </div>
  </div>

</div>
</div>
                    <script>
                      var a = document.getElementById('cod');
                      var b = document.getElementById('online_pymnt');
                     var x=document.getElementById("orderTotal").value;
                     var fix_x=document.getElementById("orderTotal").value;
                     var y=document.getElementById("subTotal").value;
                     var orderTotal;
                      var count=0;

                            $(document).ready(function(){
                        $(confirm_order).click(function()
                        {
                             $('#confirmorder').modal('show');
                        }
                      );


                        $(a).click(function()
                       {
                      x=fix_x;
                    document.getElementById("couponBtn").disabled = true;
                     document.getElementById("couponCode").value = "CODE105";
                     document.getElementById('coupon_message').innerHTML = "";
                     document.getElementById("orderTotal").value=fix_x;
                         document.getElementById("savingTotal").value =0;
                 }
                 );
                 $(b).click(function()
                       {
                       x=fix_x;
                       if(y>=450 && count==0 || y>=450 && fix_x==x)
                        {
                    document.getElementById("couponBtn").disabled = false;
                     document.getElementById("couponCode").value = "CODE105";
                     count++;
                 }
                   else if(y>=450 && count>0 || y>=450 && fix_x!=x)
                   { 
                     
                     document.getElementById("orderTotal").value=fix_x;
                     document.getElementById("couponBtn").disabled = false;
                     document.getElementById("couponCode").value = "CODE105";
                         
                   }


                    else
                    {
                    document.getElementById("couponBtn").disabled = true;
                     document.getElementById("couponCode").value = "CODE105";
                      document.getElementById("savingTotal").value =0;
                    }

                 }
                 );
             });
                 function addCouponCode()
    {
        document.getElementById('coupon_message').innerHTML = "The coupon has been applied";
                           if(y>=1000)
                         {
                          x=x-0.15*x;
                         document.getElementById("orderTotal").value=x;
                         document.getElementById("savingTotal").value =y-x;
                         }
                         else if(y>=450)
                         {
                          x=x-0.10*x;
                         document.getElementById("orderTotal").value=x;
                         document.getElementById("savingTotal").value =y-x;
                         }
                         else{}
                         
                            document.getElementById("couponBtn").disabled = true;

    }
                       function payment()
                        {
                           
                            var c = document.getElementById('cod');
                            var d = document.getElementById('online_pymnt');
                            var x=document.getElementById("orderTotal").value;
                            var id='';
                            var total1="hey";
                            if($(c).prop("checked")==true)
                            {
	                            var xhttp = new XMLHttpRequest();
	                            xhttp.onreadystatechange = function() 
	                            {
	                            	if (xhttp.readyState == 4 && xhttp.status == 200) 
	                            	{
	                     	    	}
	                    	    };
	                    	    xhttp.open("POST", "cod.php", true);
	                            xhttp.send();

                            	    if(document.getElementById("address").value=='')
                                    {
                                 	alert("Please enter your address ");
                                	return;
                            	    }
                                    window.location.href = "mail.php";                            
                             }
                             else if($(d).prop("checked")==true)
                             {
	                     	$.ajax({  
	                          url: 'op.php', //This is the current doc
	                          type: "POST",
	                          dataType:'json', // add json datatype to get json
	                          data: {total1 :x},	             
	                          success: function(data)
	                          {
	                             console.log(data);
	                          }
	                          }); 

                                 if(document.getElementById("address").value=='')
                            	 {
	                                alert("Please enter your address ");
	                                $("#address").focus();
	                                return;
                            	 }
                                window.location.href = "pay.php";    
                            }
                            else
                            {

                                alert("Please select a mode of payment.");
                            } 
                        }
                       
                            //document.getElementById("savingTotal").value =document.getElementById("subTotal").value - document.getElementById("orderTotal").value; 
                        
                    </script>
                    </div>  
                    </div>
                    </div>
                    <!-- jQuery -->
 <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    </body>
</html>