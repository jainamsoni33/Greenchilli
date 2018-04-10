<?php include "dbconn.php";?>
<!DOCTYPE html>
<html lang="en-US"  data-menu="classicmenu">
<head>
   <title>Restaurant Contact Parallax &#8211; Grand Restaurant | Restaurant Theme</title>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

</head>
<body class="page-template-default page page-id-3379">
      <!-- Begin template wrapper -->
         <div id="wrapper" class="hasbg">

            <div class="ppb_wrapper hasbg withtopbar">

               <div class="one withsmallpadding ppb_text" style="padding:50px 0 50px 0;">
                  <div class="standard_wrapper">
                     <div class="page_content_wrapper">
                        <div class="inner">
                           <div style="margin:auto;width:100%">

                              <div class="two_third " style="">
                                 <div class="one  parallax_scroll" style="background:#fff;padding:30px;" data-stellar-ratio="1.3">
                                    <h2 class="ppb_title" >Sign Up</h2>
                                    <div class="page_header_sep left" ></div>
                                    Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem<br />
                                    <strong>Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem</strong>
                                    <div id="registration_response_msg"></div>
                                    <form method="POST" id="registration_form"  data-validate="parsley"  class="contact_form_wrapper" action="register.php">
                                       <label for="firstname">First Name *</label>
                                       <input id="firstname" name="firstname" type="text" placeholder="First Name" data-required="true"/>


                                       <label for="lastname">Last Name *</label>
                                       <input id="lastname" name="lastname" type="text"  placeholder="Last Name" data-required="true"/>


                                       <label for="emailId">Email *</label>
                                       <input id="emailId" name="emailId" type="email"  placeholder="Email" data-type="email" data-required="true"/>


                                       <label for="contact">Mobile No *</label>
                                       <input type="text" name="contact" id="contact" class="form-control" placeholder="Mobile No"  data-rangelength="[10,10]"   data-parsley-type="integer" data-required="true"/>


                                       <label for="setpassword">Set Password *</label>
                                       <input id="setpassword" name="setpassword" type="password"  placeholder="Password" data-required="true" data-minlength="6"/>

                                       <label for="confirm_password">Confirm Password *</label>
                                       <input id="confirm_password" name="confirm_password" type="password" class="" placeholder="Confirm Password" data-required="true" data-minlength="6" onchange="checkpassword()" />

                                       
                                       <br/><br/>
                                       <div class="contact_submit_wrapper">
                                          <input type="submit" class="solidbg" name="register_btn" value="Submit"/>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="one_third last" style="">
                                 <div class="one parallax_scroll" style="background:#fff;padding:30px;transform: translate3d(0px, 8.48906px, 0px);" data-stellar-ratio="1.3">
                                    <h2 class="ppb_title" >Login</h2>
                                    <div class="page_header_sep left" ></div>
                                    Lorem ipsum lorem ipsum lorem ipsum<br />
                                    <strong>Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem</strong>
                                    <div id="login_response_msg"></div>
                                    <form  class="contact_form_wrapper input_full_width" method="POST" id="login_form" name="login_form" action="login.php" data-validate="parsley" >

                                       <label for="emailId">Email: *</label>
                                       <input id="emailId" name="emailId" type="text" class="emailId" placeholder="Email"  data-type="email" data-required="true"/>
                                       <br>
                                       <label for="setpassword">Password: *</label>
                                       <input id="setpassword" name="setpassword" type="password" placeholder="Password" data-required="true" data-minlength="6"/>

                                       <br/><br/>
                                       <div class="contact_submit_wrapper">
                                          <input id="contact_submit_btn14959755521245324148" name="login" type="submit" class="solidbg" value="Log In"/>
                                       </div>
                                       <div><a href="reset_password.php">Forgot password?</a></div>
                                    </form>
                                 </div>
                              </div>
                              <p><br class="clear"></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="divider one">&nbsp;</div>
            </div>
            
         </div>

         <div id="overlay_background"></div>
         <!-- </div> -->
         <?php include "common/footer-js.php";?>
         <script type="text/javascript">
            function checkpassword()
            {
               var p1 = document.getElementById("setpassword").value;
               var p2 = document.getElementById("confirm_password").value;
               if(p1 != p2)
               {
                  alert("Password should match");
               }
            }
         </script>
      </body>
      </html>
