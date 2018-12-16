<?php
if (isset($_POST['submit'])):
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6LcvJ4IUAAAAACaSLBe_Sskxc8XbeOYlPGyOYJjN';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        
        $name = !empty($_POST['name'])?$_POST['name']:'';
        $email = !empty($_POST['email'])?$_POST['email']:'';
        $number = !empty($_POST['number'])?$_POST['number']:'';
        $message = !empty($_POST['message'])?$_POST['message']:'';
        if ($responseData->success):
            //contact form submission code
            $to = 'bennkingy@gmail.com';
            $subject = 'New contact form have been submitted';
            $htmlContent = "
				<h1>Contact request details</h1>
				<p><b>Name: </b>".$name."</p>
        <p><b>Email: </b>".$email."</p>
        <p><b>Number: </b>".$number."</p>
				<p><b>Message: </b>".$message."</p>
			";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
            //send email
            @mail($to, $subject, $htmlContent, $headers);
            
            $succMsg = 'Your contact request have submitted successfully.';
            $name = '';
            $email = '';
            $number = '';
            $message = '';
        else:
            $errMsg = 'Robot verification failed, please try again.';
        endif;
    else:
        $errMsg = 'Please click on the reCAPTCHA box.';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
    $name = '';
    $email = '';
    $number = '';
    $message = '';
endif;
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hoffman Health - Sports Massage Therapy</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<!--<link rel="stylesheet" href="assets/css/lightbox.css"> -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.css">
</head>
<body>
<div class="page-wrapper"> 
  <!-- Preloader 
  <div class="preloader"></div>
  <!-- Preloader --> 

  <style>
     @media (min-width:720px) {
    .carousel-inner, .carousel {
    max-height: 580px;
}}
  @media (min-width:1024px) and (max-width:1279px) {
  .inner-content {
  height: 71vh;
  }
}
@media (min-width:768px) and (max-width:991px) {
  .footer-widget.quick-links ul {
  min-height: 133px;
  }
}
  .robImg::after {
  content: "";
  background: rgba(45, 88, 35, 0.7);
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}
  @media (min-width:992px) and  (max-width:1199px) {
	.top-servic-box figure img {
	  max-height: 293px;
	}
  }
  @media (min-width:1200px) and  (max-width:1279px) {
	.top-servic-box figure img {
	  max-height: 355px;
	}
  }
  @media (min-width:1280px) {
	.top-servic-box figure img {
	  max-height: 370px;
	}
  }
  .navbar-toggle {
	border: none;
	margin-right: -9px;
	margin-top: 6PX;
	margin-bottom: 6PX;
  }
  .navbar-toggle .icon-bar {
	height: 4px;
  }
  @media (min-width:1200px) {
    
  }
  </style>

  <!-- header start -->
  <header class="main-header">
    <div class="header-top">
      <div class="container clearfix">
        <div class="top-left pull-left clearfix">
          <div class="phone pull-left"><a href="tel:07748 785 686"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;07748 785 686</a></div>
          <div class="email pull-left"><a href="mailto:r.hoffman@btopenworld.com"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;r.hoffman@btopenworld.com</a></div>
        </div>
        <div class="top-right pull-right clearfix">
          <div class="social"><a class="fa fa-facebook-f" href="https://www.facebook.com/Sports-Massage-Therapy-1519100721689863"></a><!--- <a class="fa fa-twitter" href="#"></a>--><a class="fa fa-instagram" href="#"></a> <!--<a class="fa fa-google-plus" href="#"></a>--></div>
        </div>
      </div>
    </div>
    <div class="header-lower">
      <div class="container clearfix">
        <div class="logo pull-left"><a href="index.html">
          <h2 class="logo_name">HOFFMAN <span class="white_text">HEALTH </span> </h2>
          </a></div>
        <div class="right-cont clearfix">
          <nav class="main-menu">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse clearfix">
              <ul class="nav navbar-nav navbar-right  ml-auto" id="onenav">
                <li class="nav-link home current"><a href="#home" class="js-scroll-trigger">HOME</a> </li>
                <li class="nav-link"><a href="#aboutus" class="js-scroll-trigger">ABOUT</a> </li>
                <li class="nav-link"><a href="#course" class="js-scroll-trigger">SERVICES</a></li>
                <!--  <li class="nav-link"><a href="#timetable" class="js-scroll-trigger">SCHEDULE</a></li> -->
                <!--  <li class="nav-link"><a href="#blog" class="js-scroll-trigger">BLOG</a></li> -->
                <li class="nav-link"><a href="#contact" class="js-scroll-trigger">CONTACT</a></li>
                <!--- <li class="search-btn" onclick="openSearch()"><a><i class="fa fa-search"></i></a></li> -->
              </ul>
              <div class="clearfix"></div>
            </div>
          </nav>
        </div>
        <div id="myOverlay" class="overlay"> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
            <form>
              <input type="text" placeholder="Enter your keywords..." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header end --> 
  
<!-- Carousel start -->
  <section class="main-slider slide-wrapper" id="home">
    <div id="myCarousel" class="carousel slide"> 
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item item1 active">
          <div class="fill" style="background-image:url(assets/images/bg3.jpg);">
            <div class="inner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 iner_info">
                    <h2 class="wow fadeInUp animated img_animate">Sports massage therapy</h2>
                    <h3 class="wow fadeInUp animated title_animate">Personal training</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-up"></i> -->
      <!-- <span class="sr-only">Previous</span> --> 
      <!-- </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-down"></i> -->
      <!-- <span class="sr-only">Next</span> --> 
      </div>
  </section>
  <!-- Carousel end -->  
  
  <!--Services start -->
  <section class="service">
    <div id="services" class="site-top-services">
      <div class="container">
        <div class="row">
          <div class="site-top-service-main">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="top-servic-box ser1" style="position:relative;">
                <figure> <img src="assets/images/therapy.jpg" alt="dance"> </figure>
                <div class="content">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>HOME MASSAGE <span style="font-size: 16px">£50 HOME VISIT</span></h2>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 borderbtm"> </div>
                    <br>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service_info">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> <img src="assets/images/relaxing-massage.png" alt=""> </div>
                    <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
                      <h5>HOME MASSAGE THERAPY</h5>
                      <p>Help relieve stress and tension.</p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 service_info">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> <img src="assets/images/si2.png" alt=""> </div>
                    <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
                      <h5>FAT LOSS PROGRAM</h5>
                      <p>Loose all your extra weight in the new year. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="top-servic-box ser2" style="position:relative;">
                <figure> <img src="assets/images/opening.jpg" alt="dance"> </figure>
                <div class="content">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>MAKE AN ENQUIRY</h2>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 borderbtm"> </div>
                    <br>
                  <h3> PHONE </h3>
                  <h4><a href="tel:07748 785 686">07748 785 686</a></h4>
                  <h3> EMAIL </h3>
                  <h4><a href="mailto:r.hoffman@btopenworld.com">r.hoffman@btopenworld.com</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Services end --> 
  
  <!--About start -->
  <section class="home_about_sec" id="aboutus">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home_about">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 aimg_sec">
              <div class="row robImg"> <img src="assets/images/rob.jpg" alt=""> </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ainfo_sec">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="title"><b> about</b><span class="green_text"> HOFFMAN HEALTH</span><span class="light_text"></span></h2>
                </div>
                <div class="col-sm-12">
                  <p>Providing <strong>swedish massages</strong> to rejuvenate and relax the mind body and spirit as well as <strong>sports massage</strong>, <strong>deep tissue</strong> and <strong>remedial therapy</strong>.</p>
                  <p>Having years of <strong>experience</strong> in sports and passionate about <strong>health</strong>.</p>
                  <a href="#" class="primary-btn">see me on instagram</a> </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--About start --> 
  
  <!--Coueses start -->
  <section class="home_course_sec" id="course">
    <div class="container">
      <div class="row">
        <h2 class="title"><b>services</b></h2>
        <div class="coueses-container filter-list clearfixcol-xs-12 col-sm-12 col-md-12 col-lg-12">
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="assets/images/sports-massage.jpeg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>SPORTS MASSAGE</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="assets/images/nutrition-advice.jpeg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>NUTRITION ADVICE</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="assets/images/deep-tissue.jpeg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>deep tissue massage</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="assets/images/personal-training.jpeg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>Personal Training</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="assets/images/swedish-massage.jpeg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>SWEDISH MASSAGE</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="assets/images/injury-rehabilitation.jpeg" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>INJURY HABILATATION</h4>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!--Coueses end --> 
  
  <!--Contact start -->
  <section id="contact" class="home_contact_sec">
    <div class="site-quick-support center-text site-dark-section-a">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-xs-12 col-md-7 col-lg-7 no-padding cbg">
            <div class="left">
              <h2>Make it happen</h2>
              <form class="site-contact-form" method="post" id="reused_form">
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                  <input type="text" class="text" value="<?php echo !empty($name)?$name:''; ?>" placeholder="Your full name" name="name" >
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                  <input type="text" class="text" value="<?php echo !empty($email)?$email:''; ?>" placeholder="Email adress" name="email" >
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                  <input type="number" class="text" value="<?php echo !empty($number)?$number:''; ?>" placeholder="Phone number" name="number" >
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                   <textarea type="text" placeholder="Message..." required="" name="message"><?php echo !empty($message)?$message:''; ?></textarea>
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                     <div class="g-recaptcha" data-sitekey="6LcvJ4IUAAAAAMU74kl3mP1_qkP6Px8rj8rDQj2s"></div>
                  </div>
                </div>
                <div class="clearfix"> </div>				
                <button type="submit" name="submit" value="SUBMIT" class="primary-btn"> SEND MESSAGE </button>
                <!--<button type="submit" class="primary-btn"> SEND MESSAGE </button>-->
              </form>
              <?php if (!empty($errMsg)): ?><div class="errMsg"><?php echo $errMsg; ?></div><?php endif; ?>
              <?php if (!empty($succMsg)): ?><div class="succMsg"><?php echo $succMsg; ?></div><?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 no-padding hmap">
            <div class="right">
              <div class="site-google-map" id="site-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39784.78850129105!2d-0.37888170858150777!3d51.44807080838114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760c93b240c7c3%3A0xe4a25f60c77e7ed1!2sTwickenham!5e0!3m2!1sen!2suk!4v1544898218692" width="100" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact end --> 
  
  <!--Footer start -->
  <footer class="main-footer">
    <div class="container">
      <div class="footer-widget-area clearfix">
        <div class="footer-widget about-widget col-md-3 col-sm-6 col-xs-12"> <a href="#">
          <h2 class="logo_name">HOFFMAN <span class="white_text">HEALTH </span> </h2>
          </a>
          <div class="widget-about">
            <p>Enjoy massage at home or work for physical and mental relaxation and help relieve stress, strains and tension.</p>
            <div class="social"><a class="fa fa-facebook-f" href="https://www.facebook.com/Sports-Massage-Therapy-1519100721689863"></a> <!--<a class="fa fa-twitter" href="#"></a> --> <a class="fa fa-instagram" href="#"></a><!-- <a class="fa fa-google-plus" href="#"></a>--></div>
          </div>
        </div>
        <div class="footer-widget quick-links col-md-2 col-sm-6 col-xs-12 ">
          <h4>MENU</h4>
          <div class="widget-link">
            <ul>
              <li> <a href="#home">Home</a></li>
              <li> <a href="#aboutus">About</a></li>
              <li> <a href="#course">Services</a></li>
              <li> <a href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-widget latest-work col-md-4 col-sm-6 col-xs-12 ">
          <h4>Instagram</h4>
          <div class="widget-post">
            <div class="clearfix">
              <!-- TODO: Put instagram images here -->
            </div>
          </div>
        </div>
        <div class="footer-widget address col-md-3 col-sm-6 col-xs-12">
          <h4>Contact us</h4>
          <div class="widget-content">
            <div class="address_box"> <i class="fa fa-phone"></i>
              <p><a href="tel:07748785686">07748 785 686</a></p>
            </div>
            <div class="address_box"> <i class="fa fa-envelope"></i>
              <p><a href="mailto:r.hoffman@btopenworld.com">r.hoffman@btopenworld.com</a></p>
            </div>
           <!--<div class="address_box"> <i class="fa fa-envelope"></i>
            <p>Fitness@domain.com</p> -->
            </div>
        <!---    <div class="address_box1"> <i class="fa fa-map-marker"></i>
              <p>1011Santa Monica <br>
                boulevard Los Angeles</p>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="auto-container text-center">© 2018 <a href="#">HOFFMAN HEALTH</a></div>
    </div>
  </footer>
  <!--Footer end --> 
</div>
<a href="#" class="scrollToTop"><i class="fa fa-arrow-up" style="top: 15px;position: absolute; left: 17px;" aria-hidden="true"></i></a> 

<!-- jQuery --> 
<script src="assets/js/jquery.min.js"></script> 

<!-- Bootstrap --> 
<script src="assets/js/bootstrap.min.js"></script> 

<!-- ScrollToPlugin --> 
<script src="assets/js/ScrollToPlugin.min.js"></script> 

<!-- filter --> 
<script src="assets/js/jquery.isotope.min.js"></script> 

<!-- gallery_popup
<script src="assets/js/lightbox.js"></script> -->

<!-- carousel slider --> 
<script src="assets/js/wow.min.js"></script> 

<!-- wow --> 
<script src="assets/js/owl.carousel.js"></script> 

<!-- Global Init --> 
<script src="assets/js/custom.js"></script> 


</body>
</html>