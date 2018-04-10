<?php
include ('dbconn.php');
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Greenchili Restaurant</title>
  
  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/agency.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
  <style type="text/css">
  
   table {border-collapse:collapse; table-layout:fixed; width:310px;}
   table td {border:solid 1px black; width:100px; word-wrap:break-word;}
   
    #wrapper 
    {
      padding-left: 250px;
      transition: all 0.4s ease 0s;
    }

    #sidebar-wrapper {
      margin-left: -250px;
      top: 51px;
      left: 250px;
      width: 250px;
      background: #000;
      position: fixed;
      height: 100%;
      overflow-y: auto;
      z-index: 1000;
      transition: all 0.4s ease 0s;
    }

    #wrapper.active {
      padding-left: 0;
    }

    #wrapper.active #sidebar-wrapper {
      left: 0;
    }

    #page-content-wrapper {
      width: 100%;
      padding-top: 70px;
      transition: all 0.4s ease 0s;
    }

    .sidebar-nav {
      position: absolute;
      top: 0;
      width: 250px;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .sidebar-nav li {
      line-height: 40px;
      text-indent: 20px;
    }

    .sidebar-nav li a {
      color: #999999;
      display: block;
      text-decoration: none;
      padding-left: 60px;
    }

    .sidebar-nav li a span:before {
      position: absolute;
      left: 0;
      color: #41484c;
      text-align: center;
      width: 20px;
      line-height: 18px;
    }

    .sidebar-nav li a:hover,
    .sidebar-nav li.active {
      color: #fff;
      background: rgba(255,255,255,0.2);
      text-decoration: none;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
      text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
      height: 65px;
      line-height: 60px;
      font-size: 18px;
    }

    .sidebar-nav > .sidebar-brand a {
      color: #999999;
    }

    .sidebar-nav > .sidebar-brand a:hover {
      color: #fff;
      background: none;
    }

    #menu-toggle {
      text-decoration: none;
      float: left;
      color: #fff;
      padding-right: 15px;
    }

    @media (max-width:767px) {

      #wrapper {
        padding-left: 0;
      }

      #sidebar-wrapper {
        left: 0;
      }

      #wrapper.active {
        position: relative;
        left: 250px;
      }

      #wrapper.active #sidebar-wrapper {
        left: 250px;
        width: 250px;
        transition: all 0.4s ease 0s;
      }

      #menu-toggle {
        display: inline-block;
      }

    }

    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      padding: 15px;
      text-align: left;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    table, th, td {
      border: 1px solid black;
    }

    #popup {
      position:fixed;
      bottom: 10px;
      left:10px; 
      background-color: rgba(0,0,0,0.9); 
      height:80px;
      width: 300px;
      color:#fed136;

    }
    input[type=textbox] {
      width: 100%;
      padding: 5px;
      margin:0px;
      background-color: transparent;
      color:white;
      font-weight:15px;
      font-size: 20px;
      border:none;
    }
    input[type=textarea] {
      width:100%;

      padding: 0px;
      margin: 8px 0;
      background-color: transparent; 
      color:#fed136;
      border:none;   
      font-size:12px;
    }
    #button1{
width: 300px;
height: 40px;

}
#button2{
width: 300px;
height: 40px;
}
  </style>
</head>
<body>

  <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large" onclick="w3_close()" style='padding-left: 30px'>Close &times;</button><br/>
    <div id="home" class="w3-bar-item w3-button" style='padding-left: 30px'>Home</div><br/>
    <div id="showHistory" class="w3-bar-item w3-button" style='padding-left: 30px'>History</div><br/>
    <div id="showFeedBack" class="w3-bar-item w3-button" style='padding-left: 30px'>Feedback</div><br/>
    <div id="showSystemStatus" class="w3-bar-item w3-button" style='padding-left: 30px'>Change System Settings</div><br/>
    <?php
    
    if(!empty($_SESSION["adminname"]))
    {
      echo "<script>console.log('dfisj');</script>";
      echo "                        

      <a class='page-scroll w3-bar-item w3-button' href='logoutadmin.php' style='padding-left: 30px' >Logout</a><br>";
    }
    ?>
  </div>

  <div zclass="w3-main" id="main">

    <div class="w3-teal">
      <button class="w3-button w3-teal " onclick="w3_open()">&#9776;</button>
      <h1>Greenchili</h1>
    </div>    
    <div id="maindiv">
	<?php
	echo "<div id='confirm_orders'><br />";
	echo "<h3>&nbspOrders Placed :</h3><br>";
	echo "<br />";
	$query = "SELECT uo.u_id,uo.ordered_items,uo.total,uo.user_address,uo.orderdate,u.contact,uo.status,uo.accept_flag,u.firstname,u.lastname FROM user_orders uo,users u 
	WHERE uo.confirm_flag = 1 AND uo.accept_flag!='abc' AND DATE(uo.orderdate) = DATE(NOW()) and u.u_id = uo.user_id";
	$result = mysqli_query($conn,$query);
	echo"<form action='' method='post'>";
	while($row = mysqli_fetch_array($result))
	{
	echo "
	<div class='row' style='background-color:rgba(0,150,136,0.8);margin:auto;'>
	    <div class='row' style='padding-top:20px;padding-left:30px'>
		<div class='col-md-5 col-lg-5' style='border:3px solid white;'>
			<input type='textbox' name='' value='".$row['firstname']."  ".$row['lastname']."' readonly style='color:black;padding-left:10px'>
			<input type='textbox' name='' value='".$row['contact']."' readonly style='color:white;font-weight:15px;font-size:19px;padding-left:10px'>
			<input type='textarea' name='' value='".$row['user_address']."' readonly style='color:black;padding-left:10px'>  
		</div>
		<div class='col-md-3 col-lg-3'>
			<label style='color:black'>ORDER ID :</label> 
			<input type='textbox' name='' value='".$row['u_id']."' readonly style='color:white'><br>
			<label style='color:black'>ORDER CREATED AT : </label>
			<input type='textbox' name='' value='".$row['orderdate']."' readonly style='font-weight:15px;font-size:15px;width:100%;color:#ff0707'>
		</div>
		<div class='col-md-2 col-lg-2'>
		
				<label style='color:black'>TOTAL:</label>
				<input type='textbox' name='' value='".$row['total']."' readonly style='color:white;font-weight:15px;font-size:15px'>
			        <br><br>
				<input type='button' value='".$row['status']."' style='color:#ff0707;'>
				<br>
			        
		</div>
		<div class='col-md-2 col-lg-2'>
		 <br>
		
		 <input type='button' value='".$row['accept_flag']."' style='color:black;margin-top:10px;width: 8em;  height: 4em;font-size:15px;background-color:white;'>
		 
		 <br>
		</div>
		</div>
		<div class='row'>
		<div class='col-md-12 col-lg-12 '>
			
			
				<input type='textarea' style='color:black;padding-top:5px;visibility:hidden;font-size:15px;margin-left:20px' id='ordereditems' value='".$row['ordered_items']."' readonly >
				<input type='button' value='See Order'  onclick='orderss(this)'
				style='background-color:black;color:white;margin-top:8px;visibility:visible;margin-bottom:20px;margin-left:20px;height:40px;width:120px;'>   
		</div>
	     </div>
	</div>
	<br>
	";
	}
	echo"</form></div>";
	?>

	<div class="text-center" id="popup" onclick="hideMsg();" style="visibility: hidden;">
		<br>
		<label style="padding-top: 1px">You have recieved a new order.</label>
	</div>
	<div class="modal fade" id="neworderModal" role="dialog" data-backdrop="static" >
		<div class="modal-dialog" style="width:70%">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<div id='item' class='row'>
						<div class='col-md-4 col-lg-4'>
							<div class='row'>
								<label>ORDER ID</label>   
								<input type='textbox' id='orderid' readonly style='color:#009688'>
							</div>
						</div>
						<div class='col-md-6 col-lg-6'>
							<label><strong><h1>Greenchili,Bandra</h1><strong><label>
						</div>
						<div class='col-md-2 col-lg-2'>
							<input type='button' id='cstatus' style='color:green;'>
						</div>
					</div>
				</div>
				<div class='modal-body jumbotron'>
					<div class='row' style='height:20px;margin-left:5px;'>
						<input type='textbox' id='fname' readonly style='color:black;float:'left;'>
					</div><hr/>
					<div class='row'>
						<div class='col-md-2 col-lg-2'>
							<label>Address:</label>
						</div>
						<div class='col-md-10 col-lg-10'>
							<input type='textarea' id='fadd' readonly style='color:black;'>
						</div>
					</div>
					<hr style='background-color:black;height:1px;'/>
					<div>
						<div id='ordereditems' >
						  <input type='textarea' style='color:black;padding-top:5px;' id='orderdishes' value='' readonly >
						</div>
						<div class='row' style='margin-left:20px;background-color:white;margin-right:20px;font-size:18px'>
							<div class='col-md-7 col-lg-7'>
								<label>Total</label>
							</div>
							<div class='col-md-4 col-lg-4' >
								<div style='color:red'>
									<input type="text" id="totalval" readonly/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='modal-footer' id="modfooter">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="systemstatus" >
<button type="button home-button" id="button1" onclick='changeSystemToOn()' style='margin-left: 490px;margin-top:200px;width:150px;height:75px'>System On</button>&nbsp
 <button type="button contact-button" id="button2" onclick='changeSystemToOff()' style='margin-left: 0px;margin-top:200px;width:150px;height:75px'>System Off</button> 
</div>
        <div id="history" >
        <br>
          <div class="row" style="float:right;padding-right: 20px">
            <input type="button" id="today" onclick='displaytoday()' value="TODAY" style='color:white;background-color: #009688;;width:100px;height:40px'>&nbsp &nbsp
            <input type='button'  id='month' onclick='displaymonth()' value='MONTH' style='color:white;background-color: #009688;;width:100px;height:40px'>&nbsp &nbsp
            <input type='button'  id='year' onclick='displayyear()' value='YEAR' style='color:white;background-color: #009688;;width:100px;height:40px'>&nbsp &nbsp
          </div>
          <br><br>

        <div id="todayorders">
          <?php
          $query = "SELECT uo.u_id,uo.ordered_items,uo.total,uo.status,uo.accept_flag,u.firstname,u.lastname FROM user_orders uo, users u WHERE uo.confirm_flag = 1 AND DATE(uo.orderdate) = DATE(NOW()) and uo.user_id = u.u_id";
          $result = mysqli_query($conn,$query);
          echo "<br><table class='' id=''>
          <thead>
            <tr>
              <th>Order Id</th>
              <th>Username</th>
              <th>Items ordered</th>
              <th>Total</th>
              <th>Payment Status</th>
              <th>Delivery Status</th>
            </tr>
          </thead><tbody id=''>";
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
          {
            echo "<form action='' method='post'><tr>
            <td scope='row'>".$row['u_id']."</td>
            <td>".$row['firstname']."  ".$row['lastname']."</td>
            <td>".$row['ordered_items']."</td>
            <td>".$row['total']."</td>
            <td>".$row['status']."</td>
            <td>".$row['accept_flag']."</td>
          </tr></form>";
        }
        echo "</tbody>
      </table>";

      ?>
    </div>
    <div id="monthorders">
      <?php
      $query = "SELECT uo.u_id,uo.ordered_items,uo.total,uo.status,uo.accept_flag,u.firstname,u.lastname FROM user_orders uo, users u WHERE uo.confirm_flag = 1 AND MONTH(DATE(uo.orderdate)) = MONTH(NOW()) and uo.user_id = u.u_id";
      $result = mysqli_query($conn,$query);
      echo "<br><table class='' id=''>
      <thead>
        <tr>
          <th>Order Id</th>
          <th>Username</th>
          <th>Items ordered</th>
          <th>Total</th>
          <th>Payment Status</th>
          <th>Delievery Status</th>
        </tr>
      </thead><tbody id=''>";
      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
        echo "<form action='' method='post'><tr>
        <td scope='row'>".$row['u_id']."</td>
        <td>".$row['firstname']."  ".$row['lastname']."</td>
        <td>".$row['ordered_items']."</td>
        <td>".$row['total']."</td>
        <td>".$row['status']."</td>
        <td>".$row['accept_flag']."</td>
      </tr></form>";
    }
    echo "</tbody>
  </table>";

  ?>
</div>
<div id="yearorders">
  <?php
  $query = "SELECT uo.u_id,uo.ordered_items,uo.total,uo.status,uo.accept_flag,u.firstname,u.lastname FROM user_orders uo, users u WHERE uo.confirm_flag = 1 AND YEAR(DATE(uo.orderdate)) = YEAR(NOW()) and uo.user_id = u.u_id";
  $result = mysqli_query($conn,$query);
  echo "<br><table class='' id=''>
  <thead>
    <tr>
      <th>Order Id</th>
      <th>Username</th>
      <th>Items ordered</th>
      <th>Total</th>
      <th>Payment Status</th>
      <th>Delievery Status</th>
    </tr>
  </thead><tbody id=''>";
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
    echo "<form action='' method='post'><tr>
    <td scope='row'>".$row['u_id']."</td>
    <td>".$row['firstname']."  ".$row['lastname']."</td>
    <td>".$row['ordered_items']."</td>
    <td>".$row['total']."</td>
    <td>".$row['status']."</td>
    <td>".$row['accept_flag']."</td>

  </tr></form>";
}
echo "</tbody>
</table>";

?>
</div>
</div>
<div id="feedback">
          <?php
          $query = "SELECT * FROM feedback";
          $result = mysqli_query($conn,$query);
          echo "<br><table class='' id=''>
          <thead>
            <tr>
              <th>Name</th>
              <th>Contact</th>
              <th>Feedback Message</th>
              <th>Date</th>
            </tr>
          </thead><tbody id=''>";
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
          {
            echo "<form action='' method='post'><tr>
            
            <td>".$row['fname']."</td>
            <td>".$row['pnumber']."</td>
            <td >".$row['msg']."</td>
            <td>".$row['dtime']."</td>
          </tr></form>";
        }
        echo "</tbody>
      </table>";

      ?>
    </div>
</div>
<script>
var status=0;
var flagsystem=0;
$(document).ready(function()
{
  setInterval(function()
  { 
        $.ajax({
          type:'POST',
          url:"adminstatus.php",
          success:function(data)
          {
          console.log(data);
                if(data == 0)
                {
                //$('input[type="submit"], button').disable(true);
                   //$('submit_order').prop('disabled', true);
                   
                    document.getElementById("button2").disabled = true;
                   
                }  
                else
                {
                  document.getElementById("button1").disabled = true;
                   
                }
          }
        });
  }, 1000);
});
function displaytoday()
  {
    $("#monthorders,#yearorders").hide();
    $("#todayorders").show(200);
  }
  
  function displaymonth()
  {
    $("#todayorders,#yearorders").hide();
    $("#monthorders").show(200);
  }
  
  function displayyear()
  {
    $("#todayorders,#monthorders").hide();
    $("#yearorders").show(200);
  }
  
  function order(key,value)
  {
    this.key = key;
    this.value = value;
  }
  function getKey(Order)
  {
    return Order.key;
  }
  function getValue(Order)
  {
    return Order.value;
  }
  function orderss(btn)
  {
    var result,ss,aa;
    var str =$(btn).closest('div').find('input#ordereditems').val();
    str = str.replace(/\s*,\s*/g, ",");
    result = str.replace(/,\s*$/, "");
    ss = stringCount(result,',');
    aa = JSON.stringify(ss);
    aa= aa.replace(/[{}]/g, "");
    $(btn).closest('div').find('input#ordereditems').css("visibility","visible");
    $(btn).closest('div').find('input#ordereditems').val(aa);
    $(btn).css("visibility","hidden");
  }   
 
  
  /*function disphist()
  {
    //alert("Hiii");
    var x = document.getElementById('history');
    if (x.style.display === 'none') 
    {
        x.style.display = 'block';
    }

    var x = document.getElementById('maindiv');
    if (x.style.display === 'block') 
    {
        x.style.display = 'none';
    } 

    //$("#history").show();
    //$("#maindiv").show();
  }*/
  
  $(document).ready(function()
  {
    $("#maindiv").show();
    $("#history,#feedback,#systemstatus").hide();
    //$("#monthorders,#yearorders").hide();
    

    var count=0;
    var val2= "success";
   /* $.ajax({
      url: "getcount.php",
      type: 'GET',
      success: function(data)
      {
        count = data;
        //alert(count);
      },
      error: function(data)
      {
        alert("Error!");
      }
    });*/
    
    setInterval(function()
    {
      $.ajax({
        url: "checknewentry.php",
        type: 'POST',
        success: function(data)
        {
          
          console.log("data from checknewentry is: ");
          console.log(data);
          if(data == 1)
          {
            if(status==0)
           {
           setTimeout('window.location = "calladmin.php"',20000);
           }
            beep();
            document.getElementById("popup").style.visibility = "visible";
          }
          else
          {
            //console.log("heys");
            document.getElementById("popup").style.visibility = "hidden";
          } 
        },
        error: function(data)
        {
          alert("Error!");
        }
      });
    },5000);
    });
    function hideMsg()
    {
      status = 1;
      document.getElementById("popup").style.visibility = "hidden";
      
    }

    function deleteorder(value)
    {
        var cf=confirm("do you want to delete the order Y/N");
         if(cf)
        {
        $.ajax({
        url: "delete.php",
        type: 'POST',
        data: {id: value},
        success: function(data)
        {
          
          document.location.reload();  
        },
        error: function(data)
        {
          alert("Error!");
        }
      });
      }
    }

    function acceptorder(value)
    {
     status=1;
      $.ajax({
        url: "accept.php",
        type: 'POST',
        data: {id: value},
        success: function(data)
        {
          document.location.reload();
        },    
        error: function(data)
        {
          console.log(data);
        }
      });
    }

    function deliveredorder(value)
    {
      $.ajax({
        url: "delivered.php",
        type: 'POST',
        data: {id: value},
        success: function(data)
        {
          console.log(data);
          var c = document.getElementById(value);
          $(c).closest('tr').find('td').fadeOut('fast', 
            function(c)
            { 
              $(c).parents('tr:first').remove();                    
            });    
        },
        error: function(data)
        {
          alert('Order delivered');
        }
      });
    }
    
    function beep() 
    {
      if(!($('#neworderModal').hasClass('in')))
      {
        console.log("into beep function");
        var audio = new Audio('ALARM.wav');
        audio.play();
      }

    }
    function changeSystemToOn()
    {
     var cf=confirm("Do you want to activate the System? Y/N");
         if(cf)
        {
    flagsystem=1;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() 
    {
    	if (xhttp.readyState == 4 && xhttp.status == 200) 
    	{
    	}
    };
    xhttp.open("POST", "systemon.php", true);
    xhttp.send();
    }
    }
    function changeSystemToOff()
    {
	var cf=confirm("Do you want to deactivate the System? Note: No user will be able to place an order  Y/N");
	if(cf)
	{
   flagsystem=2;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
	}
	};
	xhttp.open("POST", "systemoff.php", true);
	xhttp.send();
	}
	}
    function w3_open() 
    {
      document.getElementById("main").style.marginLeft = "18%";
      document.getElementById("mySidebar").style.width = "18%";
      document.getElementById("mySidebar").style.display = "block";
    }
    
    function w3_close() 
    {
      document.getElementById("main").style.marginLeft = "0%";
      document.getElementById("mySidebar").style.display = "none";
    }
    $(document).ready(function(){
    $("#home").click(function()
    {
      $("#maindiv").show();
      $("#history,#feedback,#systemstatus").hide();
    });

    $("#showHistory").click(function()
    {
      $("#maindiv,#feedback,#systemstatus").hide();
      $("#history").show();
     // $("#maindiv").hide();
     
    });
    $("#showFeedBack").click(function()
    {
      $("#maindiv,#history,#systemstatus").hide();
      $("#feedback").show();
     // $("#maindiv").hide();
     
    });
    $("#showSystemStatus").click(function()
    {
      $("#maindiv,#feedback,#history").hide();
      $("#systemstatus").show();
     // $("#maindiv").hide();
     
    });
    
    $("#popup").click(function()
    {
     var value =0;
     var jsonval,result,ss,aa;
     var buttonnode;
     var footdiv;
     $.ajax({
        url: "neworder.php",
        type: 'POST',
        dataType: 'json',
        data: {id: value},
        success: function(data)
        {
           //console.log(data);
           
           $('#neworderModal').modal('show');
           console.log(data.u_id);
           console.log(data.status);
           console.log(data.firstname);
           console.log(data.lastname);
           console.log(data.user_address);
           console.log(data.ordered_items);
           console.log(data.total);
           document.getElementById("orderid").value = data.u_id;
           document.getElementById("cstatus").value = data.status;
           document.getElementById("fname").value = data.firstname + " "+ data.lastname;
           document.getElementById("fadd").value = data.user_address;
           document.getElementById("totalval").value = data.total;
           jsonval = data.ordered_items;
           result = jsonval.replace(/\s*,\s*/g, ",");
           result = result.replace(/,\s*$/, "");
           ss = stringCount(result,',');
           aa = JSON.stringify(ss);
           aa= aa.replace(/[{}]/g, "");
           document.getElementById("orderdishes").value = aa;
           $("#modfooter").append($("<button id="+ data.u_id +" onclick='acceptorder(this.id)' name="+ data.u_id +" style='margin: 10px;'>Accept</button>&nbsp &nbsp"));
           $("#modfooter").append($("<button id="+ data.u_id +" onclick='deleteorder(this.id)' name="+ data.u_id +">Delete</button>"));
        },
        error: function(data)
        {
          //console.log(data);
        }
      });

    });
  });
  
  
  function stringCount(haystack, needle) {
    if (!needle || !haystack) {
        return false;
    }
    else {
        var words = haystack.split(needle),
            count = {};
        for (var i = 0, len = words.length; i < len; i++) {
            if (count.hasOwnProperty(words[i])) {
                count[words[i]] = parseInt(count[words[i]], 10) + 1;
            }
            else {
                count[words[i]] = 1;
            }
        }
        return count;
    }
}
    
  </script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.min.js">
  </script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <script src="js/agency.min.js"></script>
</body>
</html>