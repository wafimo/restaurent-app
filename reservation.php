       <?php  include 'update_menu.php';?>
		 <?php // include 'menu.php';?>
		 <div class="section reservation-section" id="reservation">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box col-md-6 col-md-offset-3">
                            <h1>Reservation</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end about caption -->
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <form class="reservation-form row" id="reservation-form" action="inc/reservation.php" name="contactform" method="post">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputName" name="InputName" placeholder="NAME" required="required" >
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div><!-- end of /.time group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="InputPhoneNumber" name="InputPhoneNumber" placeholder="PHONE NUMBER" required="required">
                                        <i class="fa fa-phone"></i>
                                    </div><!-- end of /.phone number group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="InputEmail1" name="InputEmail1" placeholder="EMAIL" required="required">
                                        <i class="fa fa-envelope-o"></i>
                                    </div><!-- end of /.email group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="InputNumberPerson" name="InputNumberPerson" placeholder="NUMBER OF PERSON" required="required">
                                        <i class="fa fa-user"></i>
                                    </div><!-- end of /.number person group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="InputDate" name="InputDate" placeholder="DATE" required="required">
                                        <i class="fa fa-calendar-o"></i>
                                    </div><!-- end of /. date group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="datetime" class="form-control" id="InputTime" name="InputTime" placeholder="TIME" required="required">
                                        <i class="fa fa-clock-o"></i>
                                    </div><!-- end of /.time group -->
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group message-group">
                                        <textarea name="comments" id="comments" cols="30" rows="5" placeholder="MESSAGE OR ANY SPECIAL REQUEST"></textarea>
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                </div><!-- end of /.message group -->
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="vojon-btn" id="res-submit" >BOOK NOW</button>
                                </div>
                            </form><!-- end of /.form -->
                            <div id="alert"></div>
                        </div><!-- end of /.columns 6 -->
                    </div><!-- end of /.roe -->
                </div><!-- end of /.container -->
            </div><!-- end of /.reservation swction -->
			<script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- BOOTSTRAP -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- PRETTYPHOTO -->
        <script src="js/jquery.prettyPhoto.js"></script>
        <!-- OWL -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- ISOTOPE -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- PLACEHOLDEM -->
        <script src="js/placeholdem.min.js"></script>
        <!-- PARALLAX -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- COUNTER UP -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- WAYPOINTS -->
        <script src="js/waypoints.min.js"></script>
        <!-- SMOTHSCROLL -->
        <script src="js/smoothscroll.min.js"></script>
        <!-- BOOTSNAV -->
        <script src="js/bootsnav.js"></script>
        <!-- GOOGLE MAP -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script>  
        <!-- CUSTOM JS -->
        <script src="js/custom.js"></script>
        <!-- MAP -->
        <script src="js/map.js"></script>