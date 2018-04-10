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
    <link href="css/orderonline.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
</head>
<body id="page-top" class="index" style="background-color:#add8e6">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
               <a class="navbar-brand page-scroll" href="#page-top"><img style="max-width:201px;margin-top: -30px;height:100px" src="C:\Users\Admin\Desktop\gcbootstrap\startbootstrap-agency-gh-pages\img\greenchili-logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.html#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#contact">Contact us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="menucard.html">Menu Card</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Order Online</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="login.html">Log In</a>
                    </li>
                    <li><a href="#"><img src="C:\Users\Admin\Desktop\gcbootstrap\startbootstrap-agency-gh-pages\img\shopping-cart-xxl.png" style="margin-top:-5px ;width:30px"></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section>
        <div class="container-fluid">
        <div id="menuContainer">
            <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="row">
            <div id="tableWrapper" class="col-md-4 col-lg-4" >
            <ul id="type" style="list-style-type:none;">
                <li><div class="category" id="showSoups">Soups</div></li>
                <li><div class="category" id="showVegStart">Vegetarian Starters</div></li>
                <li><div class="category" id="showNonVegStart">Non-Vegeterian Starters</div></li>
                <li><div class="category" id="showVegMain">Vegeterian Main Course</div></li>
                <li><div class="category" id="showNonVegMain">Non-Vegeterian Main Course</div></li>
                <li><div class="category" id="showRice">Rice</div></li>
                <li><div class="category" id="showNoodles">Noodles</div></li>
                <li><div class="category" id="showThai">Thai</div></li>
                <li><div class="category" id="showWok">Make your own Wok!</div></li><br>
                <br>
                </ul>
                </div>
                 <div id="descriptionTable" class="col-md-8 col-lg-8">
                     <div id="soups">
                        <div class="row" style="border: 1px groove black">
                            <div class="col-md-6 col-lg-6">
                                <p ><strong >Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Veg Price</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>NonVeg Price</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>SeaFood Price</strong></p>
                            </div>
                        </div>
                     <div id="item" class="row">
                     <?php
                         include "dbconn.php";
                         $query = "SELECT * FROM product WHERE categoryid=1";
                         $result = mysqli_query($conn,$query);
                         while($row = mysqli_fetch_array($result))
                         {
                            echo "
                         <form action='/action_page.php'>
                         <div class='col-md-6 col-lg-6'>
                             
                         <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly>
                         <div><input type='textarea' name='itemDescription' value='itemDescription' readonly>
                                 </div>
                         </div>
                         
                         <div id='vegPrice' class='col-md-2 col-lg-2'>
                             <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='3'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",this)' style='color:white'>
                         </div>
                         <div id='nonvegPrice' class='col-md-2 col-lg-2'>
                             
                             <input type='text' name='' id='nvprice' size='3' value='".$row['chicken']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",this)' style='color:white'>
                         </div>
                         <div id='prawnPrice' class='col-md-2 col-lg-2'>
                        
                             <input type='text' name='' id='pprice' size='3' value='".$row['seafood']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['seafood'].",this)' style='color:white'>
                         </div>                      
                         
                        </form>";
                        }
                        ?>
                     </div>
                     </div>
                    <div id="vegStart">
                        <div class="row" style="border: 1px groove black">
                            <div class="col-md-6 col-lg-6">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Price</strong></p>
                            </div>
                        </div> 
                     <div id="item" class="row">
                     <?php
                         include "dbconn.php";
                         $query = "SELECT * FROM product WHERE categoryid=2";
                         $result = mysqli_query($conn,$query);
                         while($row = mysqli_fetch_array($result))
                         {
                            echo "
                         <form action='/action_page.php'>
                         <div class='col-md-6 col-lg-6'>
                             
                             <div ><input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly></div>
                         <div><input type='textarea' name='itemDescription' value='itemDescription'  readonly>
                                 </div>
                         </div>
                         <div id='vegPrice' class='col-md-2 col-lg-2'>
                             <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='3' ><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",this)' style='color:white'>
                         </div>
                        </form>";
                        }
                        ?>
                     </div>
                    </div>    
                    <div id="nonvegStart">
                     <div class="row" style="border: 1px groove black">
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
                     <div id="item" class="row">
                     <?php
                         include "dbconn.php";
                         $query = "SELECT * FROM product WHERE categoryid=4";
                         $result = mysqli_query($conn,$query);
                         while($row = mysqli_fetch_array($result))
                         {
                            echo "
                         <form action='/action_page.php'>
                         <div class='col-md-4 col-lg-4'>
                             
                         <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly>
                         <div><input type='textarea' name='itemDescription' value='itemDescription' readonly>
                                 </div>
                         </div>
                         <div id='chickenPrice' class='col-md-2 col-lg-2'>
                             <input type='text' name='' value='".$row['chicken']."' id='cprice' readonly size='3'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",this)' style='color:white'>
                         </div>
                         <div id='fishPrice' class='col-md-2 col-lg-2'>
                             
                             <input type='text' name='' id='fprice' size='3'  value='".$row['fish']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['fish'].",this)' style='color:white'>
                         </div>
                         <div id='prawnPrice' class='col-md-2 col-lg-2'>
                        
                             <input type='text' name='' id='pprice' size='3'  value='".$row['prawns']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",this)' style='color:white'>
                         </div>
                        <div id='kingPrawnPrice' class='col-md-2 col-lg-2'>
                        
                             <input type='text' name='' id='kpprice' size='3'  value='".$row['kingprawns']."' readonly><input type='button' value='+' name='".$row['itemname']."' id='qty_plus' onclick='addToCart(".$row['kingprawns'].",this)' style='color:white'>
                         </div>
                        </form>";
                    }
                    ?>
                     </div>
                     </div>
                    <div id="vegMainCourse">
                            <div class="row" style="border: 1px groove black">
                            <div class="col-md-6 col-lg-6">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Price</strong></p>
                            </div>
                        </div>
                        <div id="item" class="row">
                        <?php
                         include "dbconn.php";
                         $query = "SELECT * FROM product WHERE categoryid=5";
                         $result = mysqli_query($conn,$query);
                         while($row = mysqli_fetch_array($result))
                         {
                         echo "
                         <form action='/action_page.php'>
                         <div class='col-md-6 col-lg-6'>
                             
                         <input type='textbox' name='itemName' value='itemName' readonly>
                         <div><input type='textarea' name='itemDescription' value='".$row['itemname']."' id='item_name' readonly>
                                 </div>
                         </div>
                         <div id='vegPrice' class='col-md-2 col-lg-2'>
                             <input type='text' name='' id='vprice' size='3' value='".$row['Veg']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",this)' style='color:white'>
                         </div>
                        </form>";
                    }
                    ?>
                     </div>
                     </div>
                    <div id="nonvegMainCourse">
                            <div class="row" style="border: 1px groove black">
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
                            <div id="item" class="row">
                            <?php
                         include "dbconn.php";
                         $query = "SELECT * FROM product WHERE categoryid=6";
                         $result = mysqli_query($conn,$query);
                         while($row = mysqli_fetch_array($result))
                         {
                         echo "
                         <form action='/action_page.php'>
                         <div class='col-md-4 col-lg-4'>
                             
                         <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly>
                         <div><input type='textarea' name='itemDescription' value='itemDescription' readonly>
                                 </div>
                         </div>
                         <div id='chickenPrice' class='col-md-2 col-lg-2'>
                             <input type='text' name='' id='cprice' value='".$row['chicken']."' readonly size='3'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",this)' style='color:white'>
                         </div>
                         <div id='fishPrice' class='col-md-2 col-lg-2'>
                             
                             <input type='text' name='' id='fprice' value='".$row['fish']."' size='3' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['fish'].",this)' style='color:white'>
                         </div>
                         <div id='prawnPrice' class='col-md-2 col-lg-2'>
                        
                             <input type='text' name='' id='pprice' value='".$row['prawns']."' size='3' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",this)' style='color:white'>
                         </div>
                        <div id='kingPrawnPrice' class='col-md-2 col-lg-2'>
                        
                             <input type='text' name='' id='kpprice' value='".$row['kingprawns']."' size='3' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['kingprawns'].",this)' style='color:white'>
                         </div>
                        </form>";
                    }
                    ?>
                     </div>
                     </div>
                    <div id="rice">
                                 <div class="row" style="border: 1px groove black">
                            <div class="col-md-6 col-lg-6">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Veg Price</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>NonVeg Price</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Prawns Price</strong></p>
                            </div>
                        </div>
                        <div id="item" class="row">
                         <?php
                         include "dbconn.php";
                         $query = "SELECT * FROM product WHERE categoryid=7";
                         $result = mysqli_query($conn,$query);
                         while($row = mysqli_fetch_array($result))
                         {
                         echo "
                         <form action='/action_page.php'>
                         <div class='col-md-6 col-lg-6'>
                             
                         <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly>
                         <div><input type='textarea' name='itemDescription' value='itemDescription' readonly>
                                 </div>
                         </div>
                         <div id='vegPrice' class='col-md-2 col-lg-2'>
                             <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='3'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",this)' style='color:white'>
                         </div>
                         <div id='nonvegPrice' class='col-md-2 col-lg-2'>
                             
                             <input type='text' name='' id='nvprice' size='3' value='".$row['chicken']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",this)'  style='color:white'>
                         </div>
                         <div id='prawnPrice' class='col-md-2 col-lg-2'>
                        
                             <input type='text' name='' id='pprice' size='3' value='".$row['prawns']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",this)' style='color:white'>
                         </div>
                        </form>";
                    }
                    ?>
                     </div>
                     </div>
                    <div id="noodles">
                                 <div class="row" style="border: 1px groove black">
                            <div class="col-md-6 col-lg-6">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Veg Price</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>NonVeg Price</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Prawns Price</strong></p>
                            </div>
                        </div>
                         <div id="item" class="row">
                         <?php
                         include "dbconn.php";
                         $query = "SELECT * FROM product WHERE categoryid=8";
                         $result = mysqli_query($conn,$query);
                         while($row = mysqli_fetch_array($result))
                         {
                         echo "
                         <form action='/action_page.php'>
                         <div class='col-md-6 col-lg-6'>
                             
                         <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly>
                         <div><input type='textarea' name='itemDescription' value='itemDescription' readonly>
                                 </div>
                         </div>
                         <div id='vegPrice' class='col-md-2 col-lg-2'>
                             <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='3'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",this)' style='color:white'>
                         </div>
                         <div id='nonvegPrice' class='col-md-2 col-lg-2'>
                             
                             <input type='text' name='' id='nvprice' size='3' value='".$row['chicken']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",this)'  style='color:white'>
                         </div>
                         <div id='prawnPrice' class='col-md-2 col-lg-2'>
                        
                             <input type='text' name='' id='pprice' size='3' value='".$row['prawns']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",this)' style='color:white'>
                         </div>
                        </form>";
                    }
                    ?>
                     </div>
                     </div>
                    <div id="thai">
                                 <div class="row" style="border: 1px groove black">
                            <div class="col-md-6 col-lg-6">
                                <p><strong>Item Name and Description</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Veg Price</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>NonVeg Price</strong></p>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <p><strong>Prawns Price</strong></p>
                            </div>
                        </div>
                         <div id="item" class="row">
                          <?php
                         include "dbconn.php";
                         $query = "SELECT * FROM product WHERE categoryid=9";
                         $result = mysqli_query($conn,$query);
                         while($row = mysqli_fetch_array($result))
                         {
                         echo "
                         <form action='/action_page.php'>
                         <div class='col-md-6 col-lg-6'>
                             
                         <input type='textbox' name='itemName' value='".$row['itemname']."' id='item_name' readonly>
                         <div><input type='textarea' name='itemDescription' value='itemDescription' readonly>
                                 </div>
                         </div>
                         <div id='vegPrice' class='col-md-2 col-lg-2'>
                             <input type='text' name='' id='vprice' value='".$row['Veg']."' readonly size='3'><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['Veg'].",this)' style='color:white'>
                         </div>
                         <div id='nonvegPrice' class='col-md-2 col-lg-2'>
                             
                             <input type='text' name='' id='nvprice' size='3' value='".$row['chicken']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['chicken'].",this)'  style='color:white'>
                         </div>
                         <div id='prawnPrice' class='col-md-2 col-lg-2'>
                        
                             <input type='text' name='' id='pprice' size='3' value='".$row['prawns']."' readonly><input type='button' value='+' id='qty_plus' name='".$row['itemname']."' onclick='addToCart(".$row['prawns'].",this)' style='color:white'>
                         </div>
                        </form>";
                    }
                    ?>
                          </div>
                         </div>         
                    <div id="wok">
                        <div class="container-fluid" id="myWizard" style="padding-top:20px">
  <div class="progress">
     <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 25%;">
       Step 1 of 4
     </div>
   </div>
  
   <div class="navbar">
      <div class="navbar-inner">
            <ul class="nav nav-pills">
               <li class="active"><a href="#step1" data-toggle="tab" data-step="1">Step 1</a></li>
               <li><a href="#step2" data-toggle="tab" data-step="2">Step 2</a></li>
               <li><a href="#step3" data-toggle="tab" data-step="3">Step 3</a></li>
               <li><a href="#step4" data-toggle="tab" data-step="4">Step 4</a></li>
            </ul>
      </div>
   </div>
   <div class="tab-content">
      <div class="tab-pane fade in active" id="step1">
         
        <div class="well"> 
          
            <label>Choose Your WOK</label><hr>
            <br>
            <div class="row">
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Veg</label>
                    <label class="panel panel-default">210Rs</label>
                    <input type="checkbox" name="" value="">
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Paneer</label>
                    <label class="panel panel-default">240Rs</label>
                    <input type="checkbox" name="" value="">
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
            </div>
              <div class="row">
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Chicken</label>
                    <label class="panel panel-default">240Rs</label>
                    <input type="checkbox" name="" value="">
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Fish</label>
                    <label class="panel panel-default">250Rs</label>
                    <input type="checkbox" name="" value="">
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-lg-2">
                </div>
                <div class="col-md-4 col-lg-4">
                    <label>Prawns</label>
                    <label class="panel panel-default">280Rs</label>
                    <input type="checkbox" name="" value="">
                </div>
                <div class="col-md-2 col-lg-2">
                </div>
            </div>
            
            <br>
            </div>

         <a class="btn btn-default btn-lg next" href="#step2">Continue</a>
      </div>
      <div class="tab-pane fade " id="step2">
         <div class="well"> 
          
            <label>Select Your Protein <span style="color:red">(Any One)</span></label>
            <select class="form-control  input-lg">
              <option value="What was the name of your first pet?">What was the name of your first pet?</option>
              <option selected="" value="Where did you first attend school?">Where did you first attend school?</option>
              <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
              <option value="What is your favorite car model?">What is your favorite car model?</option>
            </select>
            <br>
            </div>
         <a class="btn btn-default next" href="#">Continue</a>
      </div>
       
      <div class="tab-pane fade" id="step3">
        <div class="well"> 
            <label>Select Your Sauce<span style="color:red">(Any One)</span></label></div>
         <a class="btn btn-default next" href="#step4">Continue</a>
      </div>
      <div class="tab-pane fade" id="step4">
        <div class="well"> <label>Extras</label></div>
         <a class="btn btn-default next" href="#">Continue</a>
      </div>
    </div>
  </div>
</div>
</div> 
                </div>
                </div>
                <div class="col-md-3">
                    <div class="woocommerce" id="cart_page_main_div"><div class="reservation_form_wrapper">
                        <div id="empty_cart">
      <h2 class="ppb_title text-center" style="font-size: 20px;letter-spacing: 3px;font-weight: bold"><span class="ppb_title_first">Your<br/></span>Cart Is Empty..!</h2>
                            <center><img src="C:\xampp\htdocs\gcbootstrap\startbootstrap-agency-gh-pages\img\empty-cart.jpg"></center></div>
      </div>
                 <form action="/action_page.php">       
                <div id="cart" style="background-color:lavender;">
                    <div id="list" class="row">
                    <div class="col-md-5 col-lg-5" style="align-content:left">
                        <input type="textbox"  id="itemName" style="width:120px;font-size:10px;margin:0px;" readonly>
                    </div>
                    <div  class="col-md-4 col-lg-4">
                        <div class="row">
                        <input type="button" value="-" id="qty_minus" style="color:white">
                        <input type="text"  id="itemQuantity" size="2"  readonly>
                        <input type="button" value="+" id="qty_plus" style="color:white">
                        </div>
                    </div>
                    <div  class="col-md-3 col-lg-3">
                        <input type="textbox"  id="itemTotal" size="5" style="width:50px;font-size:10px;float:left;margin:0px" readonly>
                    </div>
                    </div>
                    <hr style="border:1px solid black">
                    <div class="row">
                    <div class="col-md-8 col-lg-8 text-center" style="margin-top:15px;" >
                        <span style="font-size:14pt" >Sub-Total</span>
                    </div>
                    <div class="col-md-4 col-lg-4">
                    <input type="textbox"  id="subTotal" size="5" style="width:70px;font-size:10px;margin:5px;" readonly>
                    </div>
                    </div>
                    <hr style="border:1px solid black">
                      <div class="row">
                          <div class="col-md-7 col-lg-7">
                            <input class="form-control" id="couponCode"  style="width:200px;font-size:15px;margin:5px;"placeholder="Add Coupon Code here" />
                          </div>
                          <div class="col-md-5 col-lg-5">
                           <button class="btn btn-sm" style="width:100px;font-size:15px;margin:5px;float:left"onclick="addCouponCode()">Add Coupon</button>
                          </div>
                      </div>
                    <hr style="border:1px solid black">
                    <div class="row">
                    <div class="col-md-8 col-lg-8 text-center" style="margin-top:20px;">
                    <span style="font-size:14pt;text-align:center;">Total</span>
                    </div>
                    <div class="col-md-4 col-lg-4">
                    <input type="textbox"  id="total" size="5" style="width:70px;font-size:10px;margin:15px 0px 20px 0px;" readonly>
                    </div>
                    </div>
                </div>  
                </form>
                </div>
                </div>
        </div>
        </div>
        </div>
        </section>
        <footer >
        <div class="container-fluid" id="footer" >
            <div class="row">
                <div class="col-md-4">
                    <br />
                    <i class="fa fa-phone marginright"></i><a href="">(+91) 9987773702 / 9987773704 /<br /> 9987773705 / 022-26408662</a></div>
            <br />
                        <div class="col-md-4">
                            <p style="color:#fed136"><strong>Follow us on</strong></p>
                        </div>
                       <div class="col-md-4">
                            <p style="color:#fed136">Restaurant Timings</p>
                        </div>
                    </div>
            <div class="row">
                <div class="col-md-4">
                    <br />
                    <span class="copyright">Copyright &copy; Greenchili</span></div>
                <div class="col-md-4">
                    <br />
                    <ul class="list-inline social-buttons">
                        <li class="facebook"><a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="twitter"><a target="_blank" title="Twitter" href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                              <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                              <li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                              <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p style="color:#fed136"><strong>Lunch Timing</strong>: 12.00pm - 4.00pm</p><br />
                     <p style="color:#fed136"><strong>Dinner Timing</strong>: 7.00pm - 12.00am</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
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
    function addToCart(item_price,item){
        var item_price = item_price;
        //var name = $(item).closest('input').find("#item_name").val();
        alert(item_price);
        alert(item.name);
        
        
    }
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
</html>      