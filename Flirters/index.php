<?php
echo $_GET['name']
?>

<!DOCTYPE html>
<html>
<head>
	<title>Flirters</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/aos.css">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <script type="text/javascript">
	
	const parallax = document.getElementByClass
("intro");

window.addEventListener("scroll", function  ()
{
	let offset = window.pageYOffset;
	intro.style.backgroundPositionY = offset * 0.7 + "px";

}) 

</script>
 

</head>
<body>
	<div id="parallax">
<div class="intro">
	
		<a class="btn pull-right " data-toggle="modal"     data-target="#myModal">Login</a> 
		<div class="dropdown-menu"></div> 

		<div class="intro-text">
			<h1 data-aos="fade-down">Flirters</h1>
			<p class="lead" data-aos="fade-right">Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
			<button type="button" class="btn btn-default" data-aos="fade-left">GET STARTED</button>
		</div>

<div class="modal fade " id="myModal" tabindex="-1" role="dialog"     aria-labelledby="myModalLabel" aria-hidden="true">   
 <div class="modal-dialog">       
 	<div class="modal-content">      
 	    <div class="modal-header"> 
 	    <h4 class="modal-title pull-left" id="myModalLabel">Input Details</h4>    
 	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>            
 	             
		 </div>          
		 <div class="modal-body">
		 	<form method="GET">
		 	<input type="text" name="name" placeholder="Username"><br><br>
		 	<input type="password" name="password" placeholder="Password">

		  </div>  
		         <div class="modal-footer">         
		                      <button type="button" class="btn btn-outline-secondary">Login</button>          </div>       </div><!-- /.modal-content --> </div> 
		                  </form>
	</div>
</div>
</div>

<section class="services-block">
                <div class="services-bgbanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="services-details">
                                    <h1 data-aos="fade-up">Your Dream Awaits</h1>
                                    <h4>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</h4>
                                    <button type="button" href="#pricing" class="btn btn-default">Choose a package</button>
                                </div>
                            </div>
                            <h1 style="color: black;margin-left: 302px"></h1>
                        </div>
                    </div>
                </div>
            </section>
       
<section id="gallery">
	<div class="container">
		<div class="col-md-12">
			<h1 class="text-center">Gallery</h1>
			<div class="line-mf"></div>
			<div class="row">
				

			<div class="col-md-4" data-aos="fade-down">
				<div class="gallery-content">
					<img src="img/aurora-borealis-evening-lake-1562058.jpg" class="img-fluid">
					<div class="gallery-text">
						<h3>Innovation</h3>
					<p class="lead">
						Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation
					</p>
				</div>
				</div>
				
			</div>

			
			<div class="col-md-4" data-aos="fade-right" style="margin-top: 0">

				<div class="gallery-content">
					<div class="gallery-text">
						<h3>Diversity</h3>
					<p class="lead">
						Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation
					</p>
				</div>
					<img src="img/dawn-dusk-evening-861443.jpg" class="img-fluid">
				</div>
				
			</div>
			
<div class="col-md-4" data-aos="fade-left" style="margin-top: 0">
				<div class="gallery-content">
					<img src="img/dawn-dusk-evening-861443.jpg" class="img-fluid">
					<div class="gallery-text">
						<h3>Style</h3>
					<p class="lead">
						Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation
					</p>
				</div>
				</div>
				
			</div>
			
		</div>
	</div>
</section>

 <div class="section-counter paralax-mf bg-image" style="background-image: url(img/adventure-backpacker-cliffs-914128.jpg);background-size: cover;">
    <div class="overlay-mf"></div>
	 <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box">
            <div class="counter-ico">
              <span class="ico-circle"><i class="fa fa-check-circle" style="color: white"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">450</p>
              <span class="counter-text">WORKS COMPLETED</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="fa fa-calendar" style="color: white"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">15</p>
              <span class="counter-text">YEARS OF EXPERIENCE</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people" style="color: white"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">550</p>
              <span class="counter-text">TOTAL CLIENTS</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ribbon-a" style="color: white"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">36</p>
              <span class="counter-text">AWARD WON</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="pricing">
	<div class="container">
		
			<div class="col-md-12">
				<h1 class="display-3 text-center">Pricing</h1>
				<div class="line-mf" style="margin-bottom: 40px"></div>
				<div class="row row-space-1">
					  <div class="col-md-4">
						<div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-chemistry"></i>
                                    <h3>Starter Kit <span> - #</span>5000</h3>
                                    <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Basic Features</li>
                                    <li class="pricing-list-item">Up to 5 products</li>
                                    <li class="pricing-list-item">50 Users Panels</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
                        </div>

                          <div class="col-md-4">
                            	<div class="pricing" data-aos="fade-up">
                            			<div class="margin-b-30">

                                    <i class="pricing-icon icon-chemistry"></i>
                                    <h3>Starter Kit <span> - #</span>10000</h3>
                                    <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Basic Features</li>
                                    <li class="pricing-list-item">Up to 5 products</li>
                                    <li class="pricing-list-item">50 Users Panels</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
                        </div>

<div class="col-md-4">
	<div class="pricing">
	<div class="margin-b-30">
                                    <i class="pricing-icon icon-chemistry"></i>
                                    <h3>Starter Kit <span> - #</span> 15000</h3>
                                    <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Basic Features</li>
                                    <li class="pricing-list-item">Up to 5 products</li>
                                    <li class="pricing-list-item">50 Users Panels</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
</section>

<section id="about">
		
			<div class="col-md-12">
			
				<div class="about-content">
			           	<div class="row">		
						<div class="col-md-6">
				<div class="about-left" data-aos="fade-right">
					<h3>About Us</h3>
					<p class="lead">Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. </p>
				
			</div>
		</div>
            
            <div class="col-md-6">
			<div class="about-right" data-aos="fade-left">
				<h3>Address</h3>
				<span class="address"><i class="fa fa-address-book" style="margin-right: 10px"></i>No 45 Aremu Olatunbosun Street Ikeja Lagos</span>
			</div>
		</div>
			</div>
		</div>
		</div>
	</div>



</section>

<section id="team" >
	 <div class="container">
	 	<div class="col-md-12">
	 		<div class="team-main">
	 		<h3 class="display-4 text-center">Our Team</h3>
	 		<div class="line-mf"></div>
	 		<div class="row">
	 			<div class="col-md-4">
	 				<div class="team-content">
	 					<img src="img/team2.png" data-aos="zoom-out">
	 					<h5>Emmasimons</h5>
	 					<p>Web Designer</p>
	 					<a href="#"><i class="fa fa-facebook"  data-aos="fade-in-Down"></a></i>
	 					<a href="#"><i class="fa fa-twitter"  data-aos="fade-in-Down"></a></i>
	 					<a href="#"><i class="fa fa-instagram"  data-aos="fade-in-Down"></a></i>
	 				</div>
	 			</div>

	 			<div class="col-md-4">
	 				<div class="team-content">
	 					<img src="img/team3.png" data-aos="zoom-out">
	 					<h5>Undead</h5>
	 					<p>Creative Writer</p>
	 						<a href="#"><i class="fa fa-facebook" data-aos="fade-in-Down"></a></i>
	 					<a href="#"><i class="fa fa-twitter"  data-aos="fade-in-Down"></a></i>
	 					<a href="#"><i class="fa fa-instagram" data-aos="fade-in-Down"></a></i>
	 				</div>
	 			</div>

	 			<div class="col-md-4">
	 				<div class="team-content">
	 					<img src="img/team1.png" data-aos="zoom-out">
	 					<h5>Winteriscoming</h5>
	 					<p>Editor</p>
	 						<a href="#"><i class="fa fa-facebook"  data-aos="fade-in-Down"></a></i>
	 					<a href="#"><i class="fa fa-twitter"  data-aos="fade-in-Down"></a></i>
	 					<a href="#"><i class="fa fa-instagram"  data-aos="fade-in-Down"></a></i>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 	</div>
	 </div>
    </section>
    <hr>

<section id="newsletter" data-aos="fade-up">
	<div class="container">
		<div class="col-md-12">
			<h3 class="text-center display-4" >Newsletter</h3>
			<p></p>
			<div class="line-mf"></div>
			<div class="news text-center">
			<div class="row">
				<div class="col-md-12">
					<input type="email" name="email" placeholder="Input Your Email">
					<button class="btn btn-default-bg">Subscribe</button>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>

<section id="testimonials paralax-mf bg-image" style=" background-image:linear-gradient(rgba(129, 124, 124, 0.7),rgba(129, 124, 124, 0.7)),url(img/adventure-backpacker-cliffs-914128.jpg);background-size: cover; padding: 80px;">
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="testimonial-text" data-aos="fade-up">
					<img src="img/team2.png" class="rounded-circle text-center"><br>
					<span class="author">Emma Simons</span>
                </div>
                <div class="testimony">
                	<p class="lead">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,              consectetur, adipisci velit, sed quia non numquam eius modi              tempora incidunt ut labore et dolore magnam aliquam quaerat              voluptatem.</p>
                </div>
                <span class="quote"><i class="fa fa-quote-right rounded-circle text-center" style="display: block;"></i></span>
			</div>
		</div>
	</div>
</section>

<section id="contact" data-aos="fade-up">
	<<div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact-info" class="box-shadow-full">
              <div class="row">
				<div class="col-md-12">
			<h3 class="display-4 text-center">Send Us a Message</h3>
				<div class="line-mf"></div>
				<div class="contact-info">
				<div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                         
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                         
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                         
                          </div>
                        </div>
                        <div class="col-md-12">
                          <a href="#"><button style="margin-left: 15px;border-radius: 25px;width: 40%;border-width: 0;height: 40px;background: rgba(21,0,0,0.7);color: white"  class="button button-a button-big button-rouded">Send Message</button></a>
                        </div>
                      
			</div>
		</div>
	</div>
</section>

<section id="socials">
	<div class="container">
		<div class="col-md-12">
			<div class="social" data-aos="zoom-out">
			<div class="row">
				<div class="col-md-4">
					<h4>Social</h4>
                  <i class="fa fa-facebook"></i>
                  <i class="fa fa-twitter"></i>
                  <i class="fa fa-instagram"></i>
                  <i class="fa fa-linkedin"></i>
				</div>

				<div class="col-md-4">
					<h4>Pay</h4>
                  <i class="fa fa-apple"></i>
                  <i class="fa fa-amazon"></i>
                  <i class="fa fa-bitcoin"></i>
                  <i class="fa fa-paypal"></i>
				</div>

				<div class="col-md-4">
					<h4>Sponsors</h4>
                  <i class="fa fa-spotify"></i>
                  <i class="fa fa-opera"></i>
                  <i class="fa fa-github"></i>
                  <i class="fa fa-google"></i>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<footer>
	<div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright text-center" style="color: white">&copy; Copyright <strong>Simons</strong>. All Rights Reserved</p>
              <div class="credits text-center" style="color: white">
              	 Designed by <a href="mailto:emmasimons141@gmail.com" style="color: white; text-decoration: none;">Emmasimons</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
</footer>

 <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="js/main.js"></script>
<script src="lib/typed/typed.min.js"></script>
<script src="js/jquery.min.js"></script>  
<script src="js/bootstrap.min.js"></script>
<script src="js/aos.js"></script>
<script>
    AOS.init({
    	duration: 2000
    });
  </script>



 
</body>
</html>