<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health - Medical Website Template</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care Clinic</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 0333-1234567</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@giclinic.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.html#top" class="smoothScroll">Home</a></li>
                         <li><a href="index.html#about" class="smoothScroll">About Us</a></li>
                         <li><a href="index.html#team" class="smoothScroll">Our Services</a></li>
                         <li><a href="index.html#news" class="smoothScroll">News</a></li>
                         <li><a href="index.html#google-map" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="#appointment">Make Appointment</a></li>
						 <li class="appointment-btn"><a href="stafflogin.html">Clinic Staff Login</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h2>Healthy Living</h2>
                                             <a href="index.html#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctor</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>“Wherever the art of Medicine is loved, there is also a love of Humanity.”</h3>
                                             <h1>New way of curing</h1>
                                             <a href="index.html#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>“Let food be thy medicine and medicine be thy food.”</h3>
                                             <h2>Healthy stories</h2>
                                             <a href="index.html#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>

	<?php
								if(isset($_POST['submit']) == true) {
									$servername = "remotemysql.com";
									$username = "gk5G7Iia9l";
									$password = "MIGiFsNi2N";
									$dbname="gk5G7Iia9l";

									
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if($conn)
									{
										echo "Connection made";
										$check = "SELECT patientID FROM patientpersonal WHERE cnic='$_POST[cnic]'";
										$rs = $conn->query($check);
										$recID = $rs->fetch_assoc();
										
										if($rs->num_rows < 1) {
											$sql1 = "INSERT INTO patientpersonal (firstName,lastName, cnic, contactNumber, city) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['cnic']."', '".$_POST['phone']."','".$_POST['city']."')";
											
											$sql2 = "INSERT INTO ";

											if ($conn->query($sql1) === TRUE) {
													echo "<h3 style='text-align:center;'>Dear " .$_POST['fname']. ", <br/></h3>";
													echo "<h3 style='text-align:center;'>Your appointment for " .$_POST['date']. " at " .$_POST['time']. " 
													has been made. You need to be at clinic before 15 mins. </h3>";
												} else {
													echo "Error: " . $sql . "<br>" . $conn->error;
												}
										}
										else{
											
											
										}

									}
									else  {
										die("Connection failed: " . $conn->connect_error);
									}

									}

								$conn->close();
						?>
    
     
     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make a New Appointment</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <span style="color:red;font-weight:bold">*</span>
									    <label for="name">First Name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
									    <span style="color:red;font-weight:bold">*</span>
                                        <label for="name">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
									    <span style="color:red;font-weight:bold">*</span>
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" id="date" value="" class="form-control" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select Time</label>
                                        <select class="form-control" id="time" name="time">
                                             <option>06:00</option>
                                             <option>06:15</option>
                                             <option>06:30</option>
                                             <option>06:45</option>
											 <option>07:00</option>
                                             <option>07:15</option>
                                             <option>07:30</option>
                                             <option>07:45</option>
											 <option>08:00</option>
                                             <option>08:15</option>
                                             <option>08:30</option>
                                             <option>08:45</option>
											 <option>09:00</option>
                                             <option>09:15</option>
                                             <option>09:30</option>
                                             <option>09:45</option>
                                        </select>
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select Your City</label>
                                        <select class="form-control" id="city" name="city">
                                             <option>Lahore</option>
                                             <option>Gujranwala</option>
                                             <option>Kasur</option>
                                             <option>Sahiwal</option>
											 <option>Okara</option>
                                             <option>Pattoki</option>
                                             <option>Sialkot</option>
                                             <option>Muridkey</option>
											 <option>Rawalpindi</option>
                                             <option>Jehlum</option>
                                             <option>Gujrat</option>
                                             
                                        </select>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
									    <span style="color:red;font-weight:bold">*</span>
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required minlength="11" maxlength="11">
								   </div>

                                   <div class="col-md-6 col-sm-6">
									    <span style="color:red;font-weight:bold">*</span>
                                        <label for="Message">CNIC</label>
                                        <input type="tel" class="form-control" id="cnic" name="cnic" placeholder="35200xxxxxxxx" required minlength="13" maxlength="13">
									</div>

                                   <div class="col-md-12 col-sm-6">
									    <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                                   </div>
                              </div>
                        </form>
						
						
                    </div>

               </div>
          </div>
     </section>


     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13601.781170546043!2d74.35263019999996!3d31.53939190000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dcfaeeb2a761500!2sLiver%20and%20Stomach%20clinic%2C%20Professor%20Muhammad%20Imran!5e0!3m2!1sen!2s!4v1585036063177!5m2!1sen!2s" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>           


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Amazing Technology</h5></a>
                                        <span>March 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>New Healing Process</h5></a>
                                        <span>February 20, 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>Closed</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2018 Your Company 
                                   
                                   | Design: Tooplate</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>