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

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Theme CSS -->
        <link href="css/agency.css" rel="stylesheet">
        <link href="css/agency.min.css" rel="stylesheet">
        <style>
            img
            {

                max-width:100%;
            }

        </style>
    </head>
    
    <body id="page-top" style="background-image:url(img/wooden.jpg);background-repeat:no-repeat;background-size:cover;padding-top: 100px;" >

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
                            <a class="page-scroll" href="index.php" style="color:black">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="index.php#about" style="color:black">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="index.php#gallery" style="color:black">Gallery</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="index.php#contact" style="color:black">Contact us</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="" style="color:#fed136">Menu Card</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="checklogin.php" style="color:black">Order Online</a>
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

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <img src="img/menucard-1.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <img src="img/menucard-2.jpg">
                </div>
            </div>
        </div>
        <footer>
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
                    <span class="copyright">Copyright &copy; VPS TecHub Pvt.Ltd.</span></div>
                    <div class="col-md-4">
                        <br />
                        <ul class="list-inline social-buttons">
                            <li class="facebook"><a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p style="color:#fed136"><strong>Lunch Timing</strong>: 12.00pm - 4.00pm</p><br />
                        <p style="color:#fed136"><strong>Dinner Timing</strong>: 7.00pm - 12.00am</p>
                    </div>
                </div>
            </div>
        </footer>
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
