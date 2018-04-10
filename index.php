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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
    <style>
    .thumbnail {
    border: 0 none;
    box-shadow: none;
}
    </style>
</head>

<body id="page-top" class="index" style="padding-top: 70px;">

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
                        <a class="page-scroll" href="#home" style="color:black">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about" style="color:black">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery" style="color:black">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact" style="color:black">Contact us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="menucard.php" style="color:black">Menu Card</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="checklogin.php" style="color:black">Order Online</a>
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

        
        <header id="home" style="background-image: url(img/wooden.jpg);">
            <div class="container-fluid" style="padding:0px;">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                  <div class="item active">
                    <img src="img/Welcome to.png" alt="" style="width:100%;">
                </div>

                <div class="item">
                    <img src="img/e188db178b697a394fc18e283fd5aaa2.jpeg" alt="" style="width:100%;">
                </div>
                
                <div class="item">
                    <img src="img/MAKE YOUR OWN WOK!.png" alt="" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
</header>

<!-- About Section -->
<div class="container-fluid" id="about" style="background-image:url('img/wooden.jpg'); background-repeat:no-repeat;background-size:cover;">
    <div class="row">
        <div class="col-md-12 col-lg-12 text-center"> 
            <h2 class="ppb_title text-center" style="text-align: center;"><span class="ppb_title_first">About us</span></h2>
        </div> 
        <div class="col-md-12 col-lg-12">
            <br>
        </div>
        <div class="col-md-1 col-lg-1">
        </div>  
        <div class="col-md-5 col-lg-5 " >
           <img src="img/chef.png" style="width:100% ;height:100%">
       </div>

       <div class="col-md-5 col-lg-5" style="color: white;background-color: rgba(0,0,0,0.7);">
        <div class="row" style="text-shadow: 3px 3px 20px orange">
            <div class="col-md-1 col-lg-1"></div>
            <div class="col-md-10 col-lg-10">
            <h1 ><strong>OUR STORY</strong></h1><br></div></div>
            <p style="word-spacing: 5px">The foundation of GREEN CHILI, The Chinese hub (take-away kitchen) has been based on the team’s motto to serve healthy, quality and delicious food to our esteemed clients.<br>
Our research of the market envisioned us with fact that very few outlets met up to the criteria. This vacuum in the industry motivated us to move in the preferred direction i.e. to serve food keeping these parameters in mind. <br>
Our endeavours resulted in using high quality refined sunflower oil, imported genuine sauces (most of the locally procured sauces are adulterated) , halal hygienic meat for healthy consumption and highly trained chefs who understand the clients taste buds and dish out delicious food for their pallet.<br>
Cheers guys, to serve you will our privilege. 
</p>
        </div>
        <div class="col-md-2 col-lg-2">
        </div> 
    </div>
    <div class="row">
    </br>
</div>  
</div>
<div class="container-fluid gallerycontainer" id="gallery" style="background-image:url('img/wooden.jpg'); background-repeat:no-repeat;background-size:cover;">


    <div class="row">

        <div class="col-lg-12">
            <h2 class="ppb_title text-center" ><span class="ppb_title_first">Image Gallery</span></h2><br>
        </div>
        <br>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
         <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="img\0ed995ce96278f34ba6b6b62ba9f96df.png" data-target="#image-gallery" >
            <img class="img-responsive" src="img\0ed995ce96278f34ba6b6b62ba9f96df.png" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="img/2a0c02fe5f5ecd8b72d2684e00f8212d.jpg" data-target="#image-gallery" > 
            <img src="img/2a0c02fe5f5ecd8b72d2684e00f8212d.jpg" alt="">
            
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="img/gallery5.png" data-target="#image-gallery">
            <img class="img-responsive" src="img/gallery5.png" alt="">
        </a> 
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="img/gallery6.png" data-target="#image-gallery">
            <img class="img-responsive" src="img/gallery6.png" alt="">
        </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
     <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="img/gallery3.png" data-target="#image-gallery">
        <img class="img-responsive" src="img/gallery3.png" alt="">
    </a>
</div> 
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="img/gallery4.png" data-target="#image-gallery">
        <img class="img-responsive" src="img/gallery4.png" alt="">
    </a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="img/gallery2.png" data-target="#image-gallery">
        <img class="img-responsive" src="img/gallery2.png" alt="">
    </a>
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
 <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-image="img/gallery1.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/gallery1.png" alt="">
</a>
</div>
</div>
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
             <center> <img id="image-gallery-image" class="img-responsive" src="" ></center>
         </div>
         <div class="modal-footer">
           <div class="row">
            <div class="col-md-2 col-lg-2">
                <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
            </div> 
            <div class="col-md-10 col-lg-10">
              
            </div>
            <div class="col-md-2 col-lg-2">
                <button type="button" id="show-next-image" class="btn btn-primary" style="float:right">Next</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


<div class="container-fluid" id="contact" style="background-image:url('img/wooden.jpg'); background-repeat:no-repeat;background-size:cover;">

    <div class="row">
        <div class="col-md-6" >
            <div class="well well-sm" >
                <form class="form-horizontal" action="feedback.php" method="post" role="form">
                    <fieldset>
                        <legend class="text-center headerc">Contact us</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="fname" type="text" placeholder="Full Name" class="form-control" required>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="emailid" name="emailid" type="email" placeholder="Email Address" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="cphone" name="cphone" type="text" pattern="[789][0-9]{9}" placeholder="Phone" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your message for us here. We will get back to you within 2 business days." rows="7" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button name="feedback-submit"  class="form-control btn btn-register" >Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
        <div class="well well-sm">
                <div class="text-center">
                    <!--<h4 style="color:#fed136">Address</h4>-->
                    <legend class="text-center headerc">Address</legend>
                    <div>
                        Shop No.7,Labbaik House
                        39,Chimbai Road<br />
                        off Hill Road, Bandra (West),
                        Mumbai-400 050.<br />
                    </div>
                    <hr />
                    <div  class="map">
                        <script>
                          function initMap() {
                            var uluru = {lat: -25.363, lng: 131.044};
                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 4,
                              center: uluru
                          });
                            var marker = new google.maps.Marker({
                              position: uluru,
                              map: map
                          });
                        }
                    </script>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.173363820051!2d72.82225881414612!3d19.056113857550983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c941cec27ce1%3A0x3f2860b284a5b61e!2sGreen+Chili+The+Chinese+Hub!5e0!3m2!1sen!2sin!4v1497956191523" width="100%" height=300px frameborder="0" style="border:0" ></iframe>
                </div>
               </div> 
            </div>
        </div>
    </div>
</div>
</div>
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
                    <span class="copyright">Copyright &copy; VPS TecHub Pvt.Ltd.</span></div>
                    <div class="col-md-4">
                        <br />
                        <ul class="list-inline social-buttons">
                            <li class="facebook"><a target="_blank" title="Facebook" href="https://www.facebook.com/greenchilidiner"><i class="fa fa-facebook"></i></a></li>
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
        <script>
        
           
           $(document).ready(function(){

            loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

     function loadGallery(setIDs, setClickAttr){
        var current_image,
        selector,
        counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
</script>

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