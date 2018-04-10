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

    <title>Order Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/orderonline.css" rel="stylesheet">
</head>
<body id="page-top" class="index" style="background-image:url(img/wooden.jpg); background-repeat:no-repeat;background-size:cover;padding-top: 150px;">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img style="max-width:190px;margin-top: -30px;height:80px" src="img/Green-Chilli-Logo-cut (2).png"></a>
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
                        <a class="page-scroll" href="checklogin.php" style='color:#fed136'>Order Online</a>
                    </li>

                    <li>
                        <?php
                        
                        if(!empty($_SESSION["uname"]))
                        {
                            echo "<a class='page-scroll'style='color:black'> Hello " .$_SESSION['uname']."</a>
                            <li>

                                <a class='page-scroll' href='logout.php' style='color:black'>Logout</a>
                            </li>";
                        }
                        ?>
                        <?php
                        if(empty($_SESSION["uname"]))
                            echo "<a class='page-scroll' href='login.html' style='color:black'>Log In</a>";
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="col-md-12 col-lg-12 text-center" id='systemstatus' style='visibility:hidden;margin-top: -20px'>
    <div class="text-left well well-sm container-fluid">
            <strong style="color:red;font-size:17px;">Currently the system is Down. You cannot order. Sorry for the inconvenience </strong>
        </div></div><br><br>
    <div class="container-fluid">
        <div id="menuContainer">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="row">
                        <div id="tableWrapper" class="col-md-3 col-lg-3" >
                            <ul id="type" style="list-style-type:none;">
                                <li><div class="category" id="showSoups" >Soups</div></li>
                                <li><div class="category" id="showVegStart">Veg Starters</div></li>
                                <li><div class="category" id="showNonVegStart">Non-Veg Starters</div></li>
                                <li><div class="category" id="showVegMain">Veg Main Course</div></li>
                                <li><div class="category" id="showNonVegMain" >Non-Veg Main Course</div></li>
                                <li><div class="category" id="showRice">Rice</div></li>
                                <li><div class="category" id="showNoodles">Noodles</div></li>
                                <li><div class="category" id="showThai">Thai</div></li>
                                <li><div class="category" id="showWok">Make your own Wok!</div></li>
                            </ul>
                        </div>
                        <div id="snackbar">Item has been added to cart.</div>
                        <div id="descriptionTable" class="col-md-9 col-lg-9">

                         <div id="soups">
                            <div class="row" style="border: 2px groove white">
                                <div class="col-md-6 col-lg-6">
                                    <p ><strong >Item Name and Description</strong></p>
                                </div>
                                <div class="col-md-2 col-lg-2">
                                    <p><strong>Veg</strong></p>
                                </div>
                                <div class="col-md-2 col-lg-2">
                                    <p><strong>NonVeg</strong></p>
                                </div>
                                <div class="col-md-2 col-lg-2">
                                    <p><strong>SeaFood</strong></p>
                                </div>
                            </div>
                            <h3 style="color:green;font-family:raleway">Soups :</h3>
                            <?php
                            include "dbconn.php";
                            $query = "SELECT * FROM product WHERE categoryid=1";
                            $result = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "
                                <div id='item' class='row'>
                                    <form action='/action_page.php'>
                                        <div class='col-md-6 col-lg-6'>
                                            <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly />
                                            
                                        </div>
                                        <div id='vegPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='2'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",name,\"Veg\")' style='color:white'>
                                        </div>
                                        <div id='nonvegPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='nvprice' size='2' value='".$row['chicken']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",name,\"NonVeg\")' style='color:white'>
                                        </div>
                                        <div id='prawnPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='pprice' size='2' value='".$row['seafood']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['seafood'].",name,\"Prawns\")' style='color:white'>
                                        </div>
                                        </div>
                                        <div class='row'>
                                                <input type='textarea' name='itemDescription' value='".$row['Description']."' readonly>
                                            </div>                      
                                    </form>
                                ";
                            }
                         ?>
                    </div>
                    <div id="vegStart">
                        <div class="row" style="border:  2px groove white">
                            <div class="col-md-6 col-lg-6">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Price</strong></p>
                            </div>
                        </div> 
                        <h3 style="color:green;font-family:raleway">Vegetarian Starters :</h3>
                        <?php
                            include "dbconn.php";
                            $query = "SELECT * FROM product WHERE categoryid=2";
                            $result = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "
                                <div id='item' class='row'>
                                    <form action='/action_page.php'>
                                        <div class='col-md-6 col-lg-6'>
                                            <div>
                                                <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly>
                                            </div>
                                            
                                        </div>
                                        <div id='vegPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='2' ><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",name,\"Veg\")' style='color:white'>
                                        </div>
                                        </div>
                                        <div class='row'>
                                                <input type='textarea' name='itemDescription' value='".$row['Description']."'  readonly>
                                            </div>
                                    </form>
                                ";
                            }
                        ?>
                    </div>  
                    <div id="nonvegStart">
                        <div class="row" style="border:  2px groove white">
                            <div class="col-md-4 col-lg-4">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Chicken</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Fish</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Prawns</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>King Prawns</strong></p>
                            </div>
                        </div>
                        <h3 style="color:green;font-family:raleway">
                            Non-Vegeterian Starters :
                        </h3>
                        <?php
                            include "dbconn.php";
                            $query = "SELECT * FROM product WHERE categoryid=4";
                            $result = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result))
                            {
                            echo "
                                <div id='item' class='row'>
                                    <form action='/action_page.php'>
                                        <div class='col-md-4 col-lg-4'>
                                            <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly />
                                            
                                        </div>
                                        <div id='chickenPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' value='".$row['chicken']."' id='cprice' readonly size='2'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",name,\"Chicken\")' style='color:white' />
                                        </div>
                                        <div id='fishPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='fprice' size='2'  value='".$row['fish']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['fish'].",name,\"Fish\")' style='color:white' />
                                        </div>
                                        <div id='prawnPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='pprice' size='2'  value='".$row['prawns']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",name,\"Prawns\")' style='color:white' />
                                        </div>
                                        <div id='kingPrawnPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='kpprice' size='2'  value='".$row['kingprawns']."' readonly><input type='button' value='+' name='".$row['itemname']."' id='qty_plus' onclick='addToCart(".$row['kingprawns'].",name,\"KingPrawns\")' style='color:white' />
                                        </div>
                                        </div>
                                        <div class='row'>
                                                <input type='textarea' name='itemDescription' value='".$row['Description']."' readonly />
                                            </div> <br>
                                    </form>
                                ";
                            }
                        ?>
                    </div>
                    <div id="vegMainCourse">
                        <div class="row" style="border:  2px groove white">
                            <div class="col-md-6 col-lg-6">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Price</strong></p>
                            </div>
                        </div>
                        <h3 style="color:green;font-family:raleway">
                            Vegeterian Main Course :
                        </h3>
                        <?php
                            include "dbconn.php";
                            $query = "SELECT * FROM product WHERE categoryid=5";
                            $result = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result))
                            {
                             echo "
                                <div id='item' class='row'>
                                    <form action='/action_page.php'>
                                        <div class='col-md-6 col-lg-6'>
                                            <input type='textbox' name='itemName' value='".$row['itemname']."' readonly>
                                            
                                        </div>
                                        <div id='vegPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='vprice' size='2' value='".$row['Veg']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",name,\"Veg\")' style='color:white'>
                                        </div>
                                        </div>
                                        <div class='row'>
                                                <input type='textarea' name='itemDescription' value='".$row['Description']."' id='item_name' readonly>
                                            </div><br>
                                    </form>
                                ";
                            }
                        ?>
                    </div>
                    <div id="nonvegMainCourse">
                        <div class="row" style="border: 2px groove white">
                            <div class="col-md-4 col-lg-4">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Chicken</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Fish</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Prawns</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>King Prawns</strong></p>
                            </div>
                        </div>
                        <h3 style="color:green;font-family:raleway">Non-Vegeterian Main Course :</h3>
                        <?php
                            include "dbconn.php";
                            $query = "SELECT * FROM product WHERE categoryid=6";
                            $result = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result))
                            {
                            echo "
                                <div id='item' class='row'>
                                    <form action='/action_page.php'>
                                        <div class='col-md-4 col-lg-4'>
                                            <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly />
                                            
                                        </div>
                                        <div id='chickenPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='cprice' value='".$row['chicken']."' readonly size='2'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",name,\"Chicken\")' style='color:white'>
                                        </div>
                                        <div id='fishPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='fprice' value='".$row['fish']."' size='2' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['fish'].",name,\"Fish\")' style='color:white'>
                                        </div>
                                        <div id='prawnPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='pprice' value='".$row['prawns']."' size='2' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",name,\"Prawns\")' style='color:white'>
                                        </div>
                                        <div id='kingPrawnPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='kpprice' value='".$row['kingprawns']."' size='2' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['kingprawns'].",name,\"KingPrawns\")' style='color:white'>

                                        </div>
                                        </div>
                                        <div class='row'>
                                                <input type='textarea' name='itemDescription' value='".$row['Description']."' readonly>
                                            </div><br>
                                    </form>
                                ";
                            }
                        ?>
                    </div>
                    <div id="rice">
                        <div class="row" style="border: 2px groove white">
                            <div class="col-md-6 col-lg-6">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Veg</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>NonVeg</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Prawns</strong></p>
                            </div>
                        </div>
                        <h3 style="color:green;font-family:raleway">Rice :</h3>
                        <?php
                            include "dbconn.php";
                            $query = "SELECT * FROM product WHERE categoryid=7";
                            $result = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result))
                            {
                            echo "
                                <div id='item' class='row'>
                                    <form action='/action_page.php'>
                                        <div class='col-md-6 col-lg-6'>
                                            <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly />
                                            
                                        </div>
                                        <div id='vegPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='2'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",name,\"Veg\")' style='color:white'>
                                        </div>
                                        <div id='nonvegPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='nvprice' size='2' value='".$row['chicken']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",name,\"NonVeg\")'  style='color:white'>
                                        </div>
                                        <div id='prawnPrice' class='col-md-2 col-lg-2'>
                                            <input type='text' name='' id='pprice' size='2' value='".$row['prawns']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",name,\"Prawns\")' style='color:white'>
                                        </div>
                                        </div>
                                        <div class='row'>
                                                <input type='textarea' name='itemDescription' value='".$row['Description']."' readonly>
                                            </div><br>
                                    </form>
                                ";
                            }
                        ?>
                    </div>
                    <div id="noodles">
                        <div class="row" style="border: 2px groove white">
                            <div class="col-md-6 col-lg-6">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Veg </strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>NonVeg</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Prawns</strong></p>
                            </div>
                        </div>
                        <h3 style="color:green;font-family:raleway">
                            Noodles :
                        </h3>
                        <?php
                            include "dbconn.php";
                            $query = "SELECT * FROM product WHERE categoryid=8";
                            $result = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "
                                    <div id='item' class='row'>
                                        <form action='/action_page.php'>
                                            <div class='col-md-6 col-lg-6'>
                                                <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly />
                                               
                                            </div>
                                            <div id='vegPrice' class='col-md-2 col-lg-2'>
                                                <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='2'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",name,\"Veg\")' style='color:white'>
                                            </div>
                                            <div id='nonvegPrice' class='col-md-2 col-lg-2'>
                                                <input type='text' name='' id='nvprice' size='2' value='".$row['chicken']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",name,\"NonVeg\")'  style='color:white'>
                                            </div>
                                            <div id='prawnPrice' class='col-md-2 col-lg-2'>
                                                <input type='text' name='' id='pprice' size='2' value='".$row['prawns']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",name,\"Prawns\")' style='color:white'>
                                            </div>
                                            </div>
                                            <div class='row'>
                                                <input type='textarea' name='itemDescription' value='".$row['Description']."' readonly>
                                            </div><br>
                                        </form>
                                    ";
                            }
                        ?>
                    </div>
                    <div id="thai">
                    <div class="row" style="border: 2px groove white">
                        <div class="col-md-6 col-lg-6">
                            <p><strong>Item Name and Description</strong></p>
                        </div>
                        <div class="col-md-2 col-lg-2">
                            <p><strong>Veg</strong></p>
                        </div>
                        <div class="col-md-2 col-lg-2">
                            <p><strong>NonVeg</strong></p>
                        </div>
                        <div class="col-md-2 col-lg-2">
                            <p><strong>Prawns</strong></p>
                        </div>
                    </div>
                    <h3 style="color:green;font-family:raleway">
                        Thai :
                    </h3>
                    <?php
                        include "dbconn.php";
                        $query = "SELECT * FROM product WHERE categoryid=9";
                        $result = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "
                            <div id='item' class='row'>
                                <form action='/action_page.php'>
                                    <div class='col-md-6 col-lg-6'>
                                        <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly />
                                        
                                    </div>
                                    <div id='vegPrice' class='col-md-2 col-lg-2'>
                                        <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='2'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",name,\"Veg\")' style='color:white'>
                                    </div>
                                    <div id='nonvegPrice' class='col-md-2 col-lg-2'>
                                        <input type='text' name='' id='nvprice' size='2' value='".$row['chicken']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",name,\"NonVeg\")'  style='color:white'>
                                    </div>
                                    <div id='prawnPrice' class='col-md-2 col-lg-2'>
                                        <input type='text' name='' id='pprice' size='2' value='".$row['prawns']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",name,\"Prawns\")' style='color:white'>
                                    </div>
                                    </div>
                                    <div class='row'>
                                                <input type='textarea' name='itemDescription' value='".$row['Description']."' readonly>
                                            </div><br>
                                </form>
                            ";
                        }
                    ?>
                </div>         
                <div id="wok">
                <div class="container-fluid" id="myWizard" style="padding-top:20px">
                    <h3 style="color:green;font-family:raleway">
                        Make Your Own Wok !
                    </h3>
                    <div class="navbar">
                        <div class="navbar-inner">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#step1" data-toggle="tab" data-step="1">Step 1</a></li>
                                <li><a href="#step2" data-toggle="tab" data-step="2">Step 2</a></li>
                                <li><a href="#step3" data-toggle="tab" data-step="3">Step 3</a></li>
                                <li><a href="#step4" data-toggle="tab" data-step="4">Step 4</a></li>
                                <li><a href="#step5" data-toggle="tab" data-step="5" id="finish_btn">Finish</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
      <div class="tab-pane fade-in active" id="step1">
        <div class="well"> 
            <label>Choose Your WOK<span style="color:red">(Any One)</span></label><hr>
            <br>
            <div class="row">
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Veg</label>
                    <!--Rs. <input type="button" name="vegprice" value="210" onclick="addWok(id,id,210)">-->
                    <label class="panel panel-default">Rs.210</label>
                    <input type="checkbox" name="w" value="Veg" id="WokVeg" onclick="addWok(id,210)" >
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Paneer</label>
                    <label class="panel panel-default">Rs.240</label>
                    <input type="checkbox" name="w" id="WokPaneer" onclick="addWok(id,240)" value="Paneer">
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Chicken</label>
                    <label class="panel panel-default">Rs.240</label>
                    <input type="checkbox" name="w" id="WokChicken" onclick="addWok(id,240)" value="Chicken">
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Fish</label>
                    <label class="panel panel-default">Rs.250</label>
                    <input type="checkbox" name="w" id="WokFish" onclick="addWok(id,250)" value="Fish">
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Prawns</label>
                    <label class="panel panel-default">Rs.280</label>
                    <input type="checkbox" name="w" id="WokPrawns" onclick="addWok(id,280)" value="Prawns">
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="tab-pane fade " id="step2">
     <div class="well"> 

        <label>Select Your Protein <span style="color:red">(Any One)</span></label>
        <br>
        <div class="row">
            <div class="col-md-2 col-lg-2">
            </div>
            <div class="col-md-4 col-lg-4">
                <label>Fried Rice</label>
                <input type="radio" name="p" value="Fried Rice" checked>
            </div>
            <div class="col-md-2 col-lg-2">
            </div>
            <div class="col-md-4 col-lg-4">
                <label>Hakka Noodles</label>
                <input type="radio" name="p" value="Hakka Noodles">
            </div>
            <div class="col-md-2 col-lg-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2">
            </div>
            <div class="col-md-4 col-lg-4">
                <label>Flat Noodles</label>
                <input type="radio" name="p" value="Flat Noodles">
            </div>
            <div class="col-md-2 col-lg-2">
            </div>
            <div class="col-md-4 col-lg-4">
                <label>Aromatic Rice</label>
                <input type="radio" name="p" value="Aromatic Rice">
            </div>
            <div class="col-md-2 col-lg-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2">
            </div>
            <div class="col-md-6 col-lg-6">
                <label>Healthy Flat Wheat Noodles</label>
                <input type="radio" name="p" value="Healthy Flat Noodles">
            </div>
            <div class="col-md-2 col-lg-2">
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="step3">
    <div class="well"> 
        <label>Select Your Sauce<span style="color:red">(Any One)</span></label>
        <br>
        <div class="row">
            <div class="col-md-4 col-lg-4 text-center">
                <label>Hunan</label>
                <input type="radio" name="s" value="Hunan" checked>
            </div>
            <div class="col-md-4 col-lg-4 text-center">
                <label>Hakka</label>
                <input type="radio" name="s" value="Hakka" >
            </div>
            <div class="col-md-4 col-lg-4 text-center">
                <label>Chilli Basil</label>
                <input type="radio" name="s" value="Chilli Basil">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 text-center">
                <label>Black Bean</label>
                <input type="radio" name="s" value="Black Bean">
            </div>
            <div class="col-md-4 col-lg-4 text-center">
                <label>Black Pepper</label>
                <input type="radio" name="s" value="Black Pepper" >
            </div>
            <div class="col-md-4 col-lg-4 text-center">
                <label>Hoisin</label>
                <input type="radio" name="s" value="Hoisin">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 text-center">
                <label>Kung Pao</label>
                <input type="radio" name="s" value="Kung Pao" >
            </div>
            <div class="col-md-4 col-lg-4 text-center">
                <label>Hot Garlic</label>
                <input type="radio" name="s" value="Hot Garlic" >
            </div>
            <div class="col-md-4 col-lg-4 text-center">
                <label>Sweet Chilli</label>
                <input type="radio" name="s" value="Sweet Chilli">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 text-center">
                <label>Teriyaki</label>
                <input type="radio" name="s" value="Teriyaki">
            </div>
            <div class="col-md-4 col-lg-4 text-center">
                <label>Chilli Oyster</label>
                <input type="radio" name="s" value="Chilli Oyster" >
            </div>
            <div class="col-md-4 col-lg-4 text-center">
                <label>Schezwan</label>
                <input type="radio" name="s" value="Schezwan">
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="step4">
    <div class="well">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <label>Extras<span style="color:red">(Any One)</span></label>
            </div>
            <div class="col-md-4 col-lg-4">
                <label>Price</label>
            </div>
        </div>

        <div class="row">
          <div class="col-md-8 col-lg-8">
            <label>Extra Paneer</label>
            <input type="checkbox" name="e" id="WokExtraPaneer" onclick="addWok(id,60)" value="Extra Paneer" >
            <br>
            <label>Extra Chicken</label>
            <input type="checkbox" name="e" id="WokExtraChicken" onclick="addWok(id,60)" value="Extra Chicken" >
        </div>
        <div class="col-md-4 col-lg-4">
          <br>
          <label>Rs.60</label>
      </div>
  </div>
  <hr style="background-color:#fed136; height: 0.5px; ">
  <div class="row">
      <div class="col-md-8 col-lg-8">
        <label>Extra Prawns</label>
        <input type="checkbox" name="e" id="WokExtraPrawns" onclick="addWok(id,90)" value="Extra Prawns" >
        <br>
        <label>Extra Lamb</label>
        <input type="checkbox" name="e" id="WokExtraLamb" onclick="addWok(id,90)" value="Extra Lamb" >
    </div>
    <div class="col-md-4 col-lg-4">
      <br>
      <label>Rs.90</label>
  </div>
</div>
<hr style="background-color:#fed136; height: 5px; ">
<div class="row">
  <div class="col-md-8 col-lg-8">
      <br>
      <label>BabyCorn </label>
      <input type="checkbox" name="c" id="WokBabycorn" onclick="addWok(id,30)" value="BabyCorn" >
      <label>Spinach</label>
      <input type="checkbox" name="c" id="WokSpinach" onclick="addWok(id,30)" value="Spinach" >
      <label>Sprouts</label>
      <input type="checkbox" name="c" id="WokSprouts" onclick="addWok(id,30)" value="Sprouts" >
      <label>Onions</label>
      <input type="checkbox" name="c" id="WokOnions" onclick="addWok(id,30)" value="Onions" >
  </div>
  <div class="col-md-4 col-lg-4">
      <br>
      <label>Rs.30 each</label>
  </div>
</div>
<hr style="background-color:#fed136; height: 1px; ">
<div class="row">
  <div class="col-md-8 col-lg-8">
      <br>
      <label>Bokchoy</label>
      <input type="checkbox" name="d" id="WokBokchoy" onclick="addWok(id,40)" value="Bokchoy" >
      <label>Water Chestnut</label>
      <input type="checkbox" name="d" id="WokWaterChestnut" onclick="addWok(id,40)" value="Water Chestnut" >
      <label>Mushroom</label>
      <input type="checkbox" name="d" id="WokMushroom" onclick="addWok(id,40)" value="Mushroom" >
      <label>Broccoli</label>
      <input type="checkbox" name="d" id="WokBroccoli" onclick="addWok(id,40)" value="Broccoli" >
      <label>Bell pepper</label>
      <input type="checkbox" name="d" id="WokBellpepper" onclick="addWok(id,40)" value="Bell pepper" >
      <label>Zuccini</label>
      <input type="checkbox" name="d" id="WokZuccini" onclick="addWok(id,40)" value="Zuccini" >
  </div>
  <div class="col-md-4 col-lg-4">
      <br>
      <label>Rs.40 each</label>
  </div>
</div>
</div>
</div>
<div class="tab-pane fade" id="step5">
   <div >
       <h4 style="color:white">Things you have selected.</h4>
       <br>
       <hr style="background-color:#fed136; height: 1px; ">
       <br>
       <span id="displayitem" >
       </span>
       <br>
       <label style="color:white" >Total Price of Your Wok:</label><input type="textbox" id="wokt"  size="4" style="color:white" readonly>
       <br>
       <a class="btn btn-default btn-lg next" id="finish_wok" style="background-color:#fed136">Click To Checkout >></a>
   </div>
</div>
</div>
</div>
</div> 
</div>
</div>
</div>

<div class="col-md-3 col-lg-3" >
 <form action="enter_order.php" method="POST" class="cartorder">       
    <div id="cart" style="background-color:black; color:white;">
        <div class="row">
            <div class="col-md-6 col-lg-6" class="margin-left:5px;">
                <h4>&nbspItem Name</h4>
            </div>
            <div class="col-md-2 col-lg-2">
            </div>
            <div class="col-md-4 col-lg-4">
                <h4>Price</h4>
            </div>
        </div>
        <div id="list" class="row">
            <table id="cartTable">
                <tbody id="cartBody">
                    <?php
                    include "dbconn.php";
                    if(!empty($_SESSION["uname"]))
                    {
                     $username = $_SESSION["uname"];
                     $query = "SELECT u_id FROM users WHERE emailId='$username'";
                     $result = mysqli_query($conn,$query);
                     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                     $id = $row['u_id'];
                             //echo "'<script>console.log(\"$id\")</script>'";
                     $query = "SELECT * FROM user_orders WHERE user_id='$id' AND confirm_flag=0";
                     $result = mysqli_query($conn,$query);
                             //var_dump($result);
                             //die;
                     if($result)
                     {
                        while($row = mysqli_fetch_array($result))
                        {
                            $var = $row['ordered_items'];
                            $total = $row['total'];
                            echo "'<script>console.log(typeof \"$id\")</script>'";
                            echo "<script type='text/javascript'>
                            jsfunction('$var','$total');
                        </script>"
                        ;
                        $id1 = $row['u_id'];
                                        //echo "'<script>console.log(\"$id1\")</script>'";
                        $query1 = "DELETE FROM user_orders WHERE u_id='$id1'";
                        $result1 = mysqli_query($conn,$query1);
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div>
<hr style="border:1px solid black">
<div class="row">
    <div class="col-md-8 col-lg-8" style="margin-top:10px;padding-left:50px" >
        <span style="font-size:14pt" >Sub-Total</span>
    </div>
    <div class="col-md-4 col-lg-4">
        <input type="textbox"  name="subTotal" id="subTotal" size="5" style="font-size:15px;color:white;" readonly>
    </div>
</div>
<hr style="border:1px solid black">
<div id="coupon_message" style="color:red;">
</div>
<hr style="border:1px solid black">
<div class="row">
    <div class="col-md-8 col-lg-8" style="margin-top:10px;padding-left:70px">
        <span style="font-size:1pt;color:transparent;"><strong>Total </strong></span>
    </div>
    <div class="col-md-4 col-lg-4">
        <input type="textbox"  id="total" size="1" name="total" style="font-size:1px;color:transparent;" readonly>
    </div>
</div>
<div class="text-left well well-sm container-fluid">
    <div class="col-md-12 col-lg-12">
        <strong style="color:green">Minimum Sub-Total: Rs.150</strong></div><br>&nbsp;&nbsp;
        <div class="col-md-12 col-lg-12">
            <strong style="color:green">Coupon Code will be available on further Page.</strong>
        </div><br><br>
        <div class="col-md-12 col-lg-12" id='systemstatus' style='visibility:hidden'>
            <strong style="color:green">Currently the system is Down.You cannot order.Sorry for inconvenience </strong>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-3 col-lg-3"></div>
        <div class="col-md-6 col-lg-6">
           <input type="submit" name="submit_order" id="submit_order" class="btn btn-lg" style="width:100%;font-size:15px;margin:5px;background-color:#fed136" value="Place order" >
       </div>
       <div class="col-md-2 col-lg-2"></div>
   </div>
   <div class="row">
       <div class="col-md-10 col-lg-10">
        <input type="textbox"  id="allitems" size="1" name="ordered_items" style="font-size:1px;color:transparent" readonly>
    </div>
</div>
</div> 
</form>
</div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="timeModalEvening" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">NOTE</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <br>
          <hr style="background-color:#fed136; height: 2px; ">
          <br>
          <div class="row text-center">
              <label style="font-family: Raleway">"You can pre-order. Your order will be delivered after 7pm"</label>
          </div>

          <br>
          <hr style="background-color:#fed136; height: 2px; ">
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #fed136">Close</button>
      </div>
  </div>

</div>
</div>
<div class="modal fade" id="timeModalMorning" role="dialog" >
    <div class="modal-dialog" >

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">NOTE</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <br>
          <hr style="background-color:#fed136; height: 2px; ">
          <br>
          <div class="row text-center">
              <label style="font-family: Raleway">"You can pre-order. Your order will be delivered after 12pm"</label>
          </div>
          <br>

          <hr style="background-color:#fed136; height: 2px; ">
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #fed136">Close</button>
      </div>
  </div>

</div>
</div>
<div class="modal fade" id="locationModal" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Your Location</h4>
      </div>
      <div class="modal-body text-center">
        <!--<form action="/action_page.php">-->
        <h3>MUMBAI</h3>
        <br>
        <hr style="background-color:#fed136; height: 2px; ">
        <br>
        <input list="locations" name="locations" placeholder="Select Locality">
        <datalist id="locations">
            <option value="Bandra-West">
                <option value="Khar-West">
                </datalist>
                <!--</form>-->
                <br><br>
                <h5  style="color:green"> Get 10% off on order above Rs.450 on online payment</h5>
                <h5  style="color:green"> Get 15% off on order above Rs.1000 on online payment </h5>

            </div>
           
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #fed136">Done</button>
          </div>
      </div>
      
  </div>
</div>

<script>
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
          	        document.getElementById("systemstatus").style.visibility = "visible";

          	       document.getElementById("submit_order").disabled = true;

          	    }  
      		}
    		});
	}, 1000);
});
    
    
    $(window).on('load',function(){
        if (screen.width <= 790) 
        {
          window.location = "orderonlinemobileview.php";
        }
  });

    $(window).on('load',function(){
        $('#locationModal').modal('show');

    });
    $(window).on('load',function checkTime()
    {
        var d = new Date(); 
        var h = d.getHours(); 
        var m = d.getMinutes(); 
        var s = d.getSeconds(); 
        if(h<12)
        {
         $('#timeModalMorning').modal('show'); 

     }

 });
    $(window).on('load',function checkTime()
    {
        var d = new Date(); 
        var h = d.getHours(); 
        var m = d.getMinutes(); 
        var s = d.getSeconds(); 
        if(h<19 && h>16)
        {
         $('#timeModalEvening').modal('show'); 

     }
 });
    $("document").ready(function(){
        document.getElementById("total").value = total; 
        document.getElementById("subTotal").value = subTotal; 
        document.getElementById("allitems").value = allitems;
    });
    
    $("document").ready(function(){
      $("#showSoups").click(function(){
          $("#vegStart , #nonvegStart , #vegMainCourse , #nonvegMainCourse , #rice , #noodles , #thai , #wok").hide();
          $("#soups").show(200);
      }); 
      $("#showVegStart").click(function(){
          $("#soups , #nonvegStart , #vegMainCourse , #nonvegMainCourse , #rice , #noodles , #thai , #wok").hide();
          $("#vegStart").show(200);
      });  
      $("#showNonVegStart").click(function(){
          $("#soups, #vegStart , #vegMainCourse , #nonvegMainCourse , #rice , #noodles , #thai , #wok").hide();
          $("#nonvegStart").show(200);
      });
      $("#showVegMain").click(function(){
          $("#soups,#vegStart , #nonvegStart , #nonvegMainCourse , #rice , #noodles , #thai , #wok").hide();
          $("#vegMainCourse").show(200);
      });
      $("#showNonVegMain").click(function(){
          $("#soups, #vegStart , #nonvegStart , #vegMainCourse , #rice , #noodles , #thai , #wok").hide();
          $("#nonvegMainCourse").show(200);
      }); 
      $("#showRice").click(function(){
          $("#soups,#vegStart , #nonvegStart , #vegMainCourse , #nonvegMainCourse , #noodles , #thai , #wok").hide();
          $("#rice").show(200);
      });
      $("#showNoodles").click(function(){
          $("#soups , #vegStart , #nonvegStart , #vegMainCourse , #nonvegMainCourse , #rice , #thai , #wok").hide();
          $("#noodles").show(200);
      }); 
      $("#showThai").click(function(){
          $(" #soups, #vegStart , #nonvegStart , #vegMainCourse , #nonvegMainCourse , #rice , #noodles , #wok").hide();
          $("#thai").show(200);
      });  
      $("#showWok").click(function(){
          $(" #soups,#vegStart , #nonvegStart , #vegMainCourse , #nonvegMainCourse , #rice , #noodles , #thai").hide();
          $("#wok").show(200);

      });


  });
    //cart ka code
    function delete_item(btn,itemprice){


        var name = btn.id;
        a.pop('name');
        allitems = allitems.replace(name+",", "");
        total = total - itemprice;
        subTotal = subTotal - itemprice;
        var values =$(btn).closest('tr').find('#itemQuantity').val();
        values--;
        $(btn).closest('tr').find('#itemQuantity').val(values);

        document.getElementById("total").value = total; 
        document.getElementById("subTotal").value = subTotal; 
        //allitems = allitems + item + ", ";
        document.getElementById("allitems").value = allitems;

        if(values<=0)
        {
        //alert(allitems);
        var row = btn.parentNode.parentNode.parentNode;
        var name = btn.id;
        row.parentNode.removeChild(row);
    }
        //alert(i); 

    }
    function add_item(btn,itemprice){
        var name = btn.id;
        allitems = allitems.concat(name+',');
        total = total + itemprice;
        subTotal = subTotal + itemprice;
        var values =$(btn).closest('tr').find('#itemQuantity').val();
        values++;
        $(btn).closest('tr').find('#itemQuantity').val(values);
        document.getElementById("total").value = total; 
        document.getElementById("subTotal").value = subTotal; 
        document.getElementById("allitems").value = allitems;    
    }
    
    /*changes also added onclick function to radio buttons*/
    var subTotal=0;
    var total = 0;
    var allitems="";
    var flag=0;
    var woktotal = 0;
    var wokitems = "";
    var wokitem2 ="";
    var temp=0;
    var itemtype ="";
    var a = new Array();
    var i=0;
    function addToCart(item_price,item,itemtype){

      var itemprice = parseInt(item_price);
      if(itemprice==0)
      {
        return ;
    }
    item= itemtype + " " +item;

    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);

    if(a.indexOf(item) > -1)
    {
        allitems = allitems + item + ", ";
        var x=a.indexOf(item);
        var y=$("input#itemQuantity").eq(x).val();
        y++;
        $("input#itemQuantity").eq(x).val(y);
        subTotal = subTotal+itemprice;
        total = total+itemprice;
        document.getElementById("total").value = total;             
        document.getElementById("subTotal").value = subTotal;
        document.getElementById("allitems").value = allitems;
        return;
    }




    subTotal = subTotal+itemprice;
    total = total+itemprice;

    $('#cartBody').append("<tr><td><div class='col-md-7 col-lg-7' style='align-content:left'><div id='itemName' style='padding-left:10px;font-size:15px;word-wrap:break-word;width:120px'>"+item+"</div></div></td><div class='col-md-2 col-lg-2'><td><div class='col-md-4 col-lg-4'><input type='text'  id='itemQuantity' size='1' style='color:black;width:30px' value='1' readonly></div><div class='col-md-1 col-lg-1'><input type='button' value='x' id='"+item+"' onclick='delete_item(this,"+itemprice+")' style='background-color:black;color:white;border-radius:100%;margin-top:8px;'></div><div class='col-md-1 col-lg-1'><input type='button' value='+' id='"+item+"' onclick='add_item(this,"+itemprice+")' data-target="+itemprice+" style='background-color:black;color:white;border-radius:100%;margin-top:8px;'></div></td><td><div class='col-md-2 col-lg-2'><input type='textbox'  id='itemTotal' value='"+itemprice+"' size='5' name='item_price' style='width:50px;font-size:15px;margin:0px;color:white;' readonly></div></td></tr>");

    allitems = allitems + item + ", ";
    a.push(item);
    document.getElementById("total").value = total;             
    document.getElementById("subTotal").value = subTotal;
        //total= total+woktotal;
        //subTotal=subTotal+woktotal; 
        
        //alert(item);
        //console.log(allitems);
        document.getElementById("allitems").value = allitems;
        //alert(allitems);
    }

    function jsfunction($id,$total){
        addToCart($total,$id);
    }

    function addWok(id,price)
    {
        var c = document.getElementById(id);
        if($(c).prop("checked")==true)    
            woktotal = woktotal + price;
        else
            woktotal = woktotal - price;
    }
    $("#finish_btn").click(function() {
      var x=$('input[name=w]:checked').val();

      var y=$('input[name=p]:checked').val();

      var z=$('input[name=s]:checked').val();

      var w=$('input[name=e]:checked').val();
      if(!w)
      {
        w="";
    }
    if(!x)
    {
        x="";
    }
    if(!y)
    {
        y="";
    }
    if(!z)
    {
        z="";
    }
    var m = document.getElementsByName('c');
    var vals = "";
    for (var i=0, no=m.length;i<no;i++) 
    {
        if (m[i].checked) 
        {
            vals += " "+m[i].value;
        }
    }
    var n = document.getElementsByName('d');
    var vals1 = "";
    for (var i=0, no=n.length;i<no;i++) 
    {
        if (n[i].checked) 
        {
            vals1 += " "+n[i].value;
        }
    }

    var k=document.getElementById("displayitem");
    k.innerHTML= x + ' Wok'+ '<br>' +  y + '<br>' + z + '<br>' +w + '<br>' + vals + '<br>' + vals1;
    wokitems = x + ", " + y + ", " + z + ", " +w;
    wokitems2 = "WokItems are 1." + x + ", 2." + y + ", 3." + z + ", 4." +w;

    document.getElementById("wokt").value = woktotal; 
});

    $("#finish_wok").click(function()
    {
        //toast
        var x = document.getElementById("snackbar")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
        allitems = allitems + wokitems2 + ",";
        $('#cartBody').append("<tr><td><div class='col-md-7 col-lg-7' style='align-content:left'><div id='itemName' style='padding-left:10px;font-size:15px;word-wrap:break-word;width:120px' >"+wokitems+"</div></td><div class='col-md-2 col-lg-2'><td><div class='col-md-4 col-lg-4'><input type='text'  id='itemQuantity' size='1' style='color:black' value=1 readonly></div><div class='col-md-1 col-lg-1'><input type='button' value='x' id='"+item+"' onclick='delete_item(this,"+woktotal+")' style='background-color:black;color:white;border-radius:100%;margin-top:8px;'></div></div></td></div><td><div class='col-md-2 col-lg-2'><input type='textbox'  id='itemTotal' value='"+woktotal+"' size='5' name='item_price' style='width:50px;font-size:15px;margin:0px;color:black;' readonly></div></td></tr>"); 
        document.getElementById("total").value = total+woktotal;                        
        document.getElementById("subTotal").value =subTotal+ woktotal; 
        total= total+woktotal;
        subTotal=subTotal+woktotal;
        document.getElementById("allitems").value = allitems;
    });

    $('#submit_order').click(function()
    {
        if(subTotal<150)
        {
            alert("Minimum Sub-Total:150Rs")
            $('form.cartorder').removeAttr('action');
        }
    });

</script>
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
<footer >
    <div class="container-fluid" id="footer" >
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <br />
                <i class="fa fa-phone marginright"></i><a href="">(+91) 9987773702 / 9987773704 /<br /> 9987773705 / 022-26408662</a>
            </div>
            <br />
            <div class="col-md-4 col-lg-4">
                <p style="color:#fed136"><strong>Follow us on</strong></p>
            </div>
            <div class="col-md-4">
                <p style="color:#fed136"><strong>Restaurant Timings</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4">
            <br />
            <span class="copyright">Copyright &copy; VPS TecHub Pvt.Ltd.</span></div>
                <div class="col-md-4">
                    <br />
                    <ul class="list-inline social-buttons">
                        <li class="facebook"><a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <p style="color:#fed136"><strong>Lunch Timing: 12.00pm - 4.00pm</strong></p>
                    <p style="color:#fed136"><strong>Dinner Timing: 7.00pm - 12.00am</strong></p>
                </div>
            </div>
        </div>
    </footer>
</html>      