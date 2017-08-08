<?php
include_once 'menu.php';
//include 'menu.php';
 ?>

 <div class="slider-section" id="home">
     <!-- START MAIN CONTAINER -->
     <div id="home-slider" class="owl-carousel" style=" display:block;">
         <div class="item">
             <div class="slider-items" style="background-image: url(images/slider/1.jpg)">
                 <div class="slide-item">
                      <div class="slider-item">
                         <h2>Welcome To <span>The Daily Kitchen</span></h2>
                         <span class="slider-divider"></span>
                         <p>We use only the best ingredients from all over <br>the world to carefully create an amazing dish for you</p>
                         <a class="vojon-btn" href="#reservation">BOOK A TABLE</a><!-- book table -->
                     </div><!-- end of /.slider acption -->
                 </div>
             </div>
         </div>
         <div class="item">
             <div class="slider-items" style="background-image: url(images/slider/2.jpg)">
                 <div class="slide-item">
                     <div class="slider-item">
                         <h2>Art of Cooking</h2>
                         <span class="slider-divider"></span>
                         <p>We use only the best ingredients from all over the world<br> to carefully create an amazing dish for you</p>
                         <a class="vojon-btn"  href="#">SEE OUR MENU</a><!-- book table -->
                     </div><!-- end of /.slider acption -->
                 </div>
             </div>
         </div>;
         <div class="item">
             <div class="slider-items" style="background-image: url(images/slider/3.jpg)">
                 <div class="slide-item">
                     <div class="slider-item">
                         <h2>Are You Hungry?</h2>
                         <span class="slider-divider"></span>
                         <p>We use only the best ingredients from all over the world<br> to carefully create an amazing dish for you</p>
                         <a class="vojon-btn" href="#">CALL FOR ORDER</a><!-- book table -->
                     </div><!-- end of /.slider acption -->
                 </div>
             </div>
         </div>
     </div>
     <div class="home-navigation">
         <a class="btn vojon-btn home-next"><i class="fa fa-angle-left"></i></a>
         <a class="btn vojon-btn home-prev"><i class="fa fa-angle-right"></i></a>
     </div><!-- END OF /. OWL CONTROLAR -->
 </div><!-- END OF /. MAIN CONTAINER -->

 <div class="section about-section" id="about">
     <div class="container">
         <div class="row">
             <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                 <h1>About Us</h1>
                 <span class="title-divider">
                     <i class="fa fa-cutlery" aria-hidden="true"></i>
                 </span>
                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
             </div><!-- end about caption -->
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="about-content">
                     <h3>WHO WE ARE</h3>
                     <p>Sed mauris massa, rutrum eget dignissim in, maximus non mauris. Maecenas vestibulum blandit mauris. Sed mauris massa, rutrum eget dignissim in. Maximus non mauris. Maecenas vestibulum blandit mauris, quis cursus ex aliquam vitae. Fusce iaculis, sem eu facilisis fermentum, quam ligula consectetur sem, et feugiat ligula eros a erat. Aliquam id bibendum nibh, quis pretium nulla. Maximus non mauris. Maecenas vestibulum blandit mauris, quis cursus ex aliquam vitae. Fusce iaculis, sem eu facilisis fermentum, quam ligula consectetur sem, et feugiat ligula eros a erat. Aliquam id bibendum nibh, quis pretium nulla et.</p>
                     <a href="#" class="vojon-btn">Resever Now </a>
                     <a href="#" class="vojon-btn">Learn More</a>
                 </div>
             </div>
			 
             <div class="col-sm-6">
                 <div class="about-thumb">
                     <img src="images/chef-2.png" class="img-responsive" width="360" height="427" alt="">
                 </div>
             </div>
         </div>
     </div><!-- end of /.container -->
 </div><!-- end of /.about section -->



<?php
include_once "main_menu.php";
include_once "staff.php";
?>
<div class="section testimonial-box"  id="review">
    <div class="container">
        <div class="row">
            <div class="section-title-box  col-md-6 col-md-offset-3">
                <h1>What others say</h1><!-- title -->
                <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
            </div><!-- end of /.section title box -->
        </div><!-- end of /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div id="carousel">
                    <!-- Wrapper for slides -->
                    <div id="testimonial-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="images/client1.png" width="130" height="130" alt=""><!-- Testimonial profile image -->

                            <div class="testimonial-caption">
                                <h4>Collis Ta'eed</h4><!-- staf name -->
                                <h5>CEO, Envato</h5><!-- staf title -->
                                <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.  Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p><!-- staf caption -->
                            </div><!-- end of /.staf caption box -->
                        </div><!-- end of /.staf item-->
                        <div class="item">
                            <img src="images/client2.png" width="130" height="130" alt=""><!-- Testimonial profile image -->
                            <div class="testimonial-caption">
                                <h4>Cyan Ta'eed</h4><!-- staf name -->
                                <h5>Director, Envato</h5><!-- staf title -->
                                <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.  Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p><!-- staf caption -->
                            </div><!-- end of /.staf caption box -->
                        </div><!-- end of /.staf item-->
                        <div class="item">
                            <img src="images/client3.png" width="130" height="130" alt=""><!-- Testimonial profile image -->
                            <div class="testimonial-caption">
                                <h4>Vahid Ta'eed</h4><!-- staf name -->
                                <h5>Business Intelligence & IT Director, Envato</h5><!-- Testimonial title -->
                                <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.  Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p><!-- staf caption -->
                            </div><!-- end of /.staf caption box -->
                        </div><!-- end of /.staf item-->
                    </div><!-- end of /.staf slider container -->
                </div><!-- end of /.staf slider -->
            </div>
        </div>
    </div>
</div>


            <div class="section contact-section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box col-md-6 col-md-offset-3">
                            <h1>Contact Us</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 address-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="contact-items">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Porgit Labora, Main Dal St, Rober. <br>Ahner 4706 N Leavitt St Chicago,</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="contact-items">
                                        <i class="fa fa-phone"></i>
                                <span>(123) 456-7890<br>(123) 456-7890</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="contact-items">
                                        <i class="fa fa-clock-o"></i>
                                        <span>Saturday - Tuesday 08:00 - 23:59</span>
                                        <span>Wednesday - Friday 10:00 - 22:00</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of /.address box -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 contact-box">
                            <form class="row" id="contact-form" action="inc/contact.php" name="contactform" method="post" >
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea name="comments" class="form-control" id="comments" placeholder="Message"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="vojon-btn message-btn contact-submit" id="submit">Send Message</button>
                                </div>
                            </form><!-- end form -->
                            <div id="message"></div>

                        </div><!-- end of /.column anf contact -->
                    </div>
                </div><!-- end of /.container -->
            </div><!-- end of /.contact section -->
            
                           <?php

							$msg=Session::get("userId");
							if($msg){
include_once "see_cart.php";
							}
?>
