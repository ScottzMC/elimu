<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Elimu - Welcome to Our Platform</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/icofont.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/font-awesome.min.css'); ?>">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/swiper-bundle.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/apexcharts.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/jqvmap.min.css'); ?>">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/newsletter.css'); ?>">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<style>
#list-builder {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #333;
    filter: alpha(opacity=80);
	opacity: 0.8;
    display: none;
}

#popup-box {
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: #48847b;
    color: #FFFFFF;
    width: 90%;
    max-width: 600px;
    padding: 30px;
    border: 10px solid #FFFFFF;
    display: none;
}

#popup-close {
    position: absolute;
    top: -25px;
    right: -25px;
    cursor: pointer;
    width: 40px;
}

#popup-box h1 {
    margin: 0;
}

#popup-box form {
    margin-bottom: 0px;
}

#popup-box input {
    padding: 10px;
    border: 1px solid #333;
    width: 40%;
}

#popup-box button {
    padding: 10px;
    border: 1px solid #333;
}

</style>

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
header
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 40px 100px;
  z-index: 1000;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
header .logo
{
  color: #fff;
  text-transform: uppercase;
  cursor: pointer;
}
.toggle
{
  position: relative;
  width: 60px;
  height: 60px;
  background: url(https://i.ibb.co/HrfVRcx/menu.png);
  background-repeat: no-repeat;
  background-size: 30px;
  background-position: center;
  cursor: pointer;
}
.toggle.active
{
  background: url(https://i.ibb.co/rt3HybH/close.png);
  background-repeat: no-repeat;
  background-size: 25px;
  background-position: center;
  cursor: pointer;
}
.showcase
{
  position: absolute;
  right: 0;
  width: 100%;
  min-height: 120vh;
  padding: 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #111;
  transition: 0.5s;
  z-index: 2;
}
.showcase.active
{
  right: 300px;
}

.showcase video
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.8;
}
.overlay
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #03a9f4;
  mix-blend-mode: overlay;
}
.text
{
  position: relative;
  z-index: 10;
}

.text h2
{
  font-size: 5em;
  font-weight: 800;
  color: #fff;
  line-height: 1em;
  text-transform: uppercase;
}
.text h3
{
  font-size: 4em;
  font-weight: 700;
  color: #fff;
  line-height: 1em;
  text-transform: uppercase;
}
.text p
{
  font-size: 1.1em;
  color: #fff;
  margin: 20px 0;
  font-weight: 400;
  max-width: 700px;
}
.text a
{
  display: inline-block;
  font-size: 1em;
  background: #fff;
  padding: 10px 30px;
  text-transform: uppercase;
  text-decoration: none;
  font-weight: 500;
  margin-top: 10px;
  color: #111;
  letter-spacing: 2px;
  transition: 0.2s;
}
.text a:hover
{
  letter-spacing: 6px;
}
.social
{
  position: absolute;
  z-index: 10;
  bottom: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.social li
{
  list-style: none;
}
.social li a
{
  display: inline-block;
  margin-right: 20px;
  filter: invert(1);
  transform: scale(0.5);
  transition: 0.5s;
}
.social li a:hover
{
  transform: scale(0.5) translateY(-15px);
}
.menu
{
  position: absolute;
  top: 0;
  right: 0;
  width: 300px;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.menu ul
{
  position: relative;
}
.menu ul li
{
  list-style: none;
}
.menu ul li a
{
  text-decoration: none;
  font-size: 24px;
  color: #111;
}
.menu ul li a:hover
{
  color: #03a9f4; 
}

@media (max-width: 991px)
{
  .showcase,
  .showcase header
  {
    padding: 40px;
  }
  .text h2
  {
    font-size: 3em;
  }
  .text h3
  {
    font-size: 2em;
  }
}
</style>

<body>

    <div class="main-wrapper">
        
            <!-- Header Section Start -->
        <div class="header-section">

            <!-- Header Top Start -->
            <div class="header-top d-none d-lg-block">
                <div class="container">

                    <!-- Header Top Wrapper Start -->
                    <div class="header-top-wrapper">

                        <!-- Header Top Left Start -->
                        <div class="header-top-left">
                            <p>Know more about us <a href="#">Elimu.</a></p>
                        </div>
                        <!-- Header Top Left End -->

                        <!-- Header Top Medal Start -->
                        <div class="header-top-medal">
                            <div class="top-info">
                                <!--<p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>-->
                                <p><i class="flaticon-email"></i> <a href="mailto:hello@elimu.co.uk">hello@elimu.co.uk</a></p>
                            </div>
                        </div>
                        <!-- Header Top Medal End -->

                        <!-- Header Top Right Start 
                        <div class="header-top-right">
                            <ul class="social">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Header Top Right End -->

                    </div>
                    <!-- Header Top Wrapper End -->

                </div>
            </div>
            <!-- Header Top End -->

            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">

                    <!-- Header Main Start -->
                    <div class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="<?php echo site_url('home'); ?>"><img height="70" width="120" src="<?php echo base_url('assets/images/elimu.png'); ?>" alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="header-menu d-none d-lg-block">
                            <ul class="nav-menu">
                                <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                                <li><a href="<?php echo site_url('covid'); ?>">Covid-19</a></li>
                                <li><a href="<?php echo site_url('elimu_pillars'); ?>">Elimu Pillars</a></li>
                                <li><a href="<?php echo site_url('shop'); ?>">Shop Elimu</a></li>
                                <li><a href="<?php echo site_url('shop/view_cart'); ?>">Cart (<?php echo $this->cart->total_items(); ?>)</a></li>
                            </ul>

                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Sing In & Up Start -->
                        <div class="header-sign-in-up d-none d-lg-block">
                            <ul>
                            <?php if($this->session->userdata('urole') == 'User'){ ?>
                                <li><a class="sign-in" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                            <?php }else if($this->session->userdata('urole') == 'Admin'){ ?>
                                <li><a href="<?php echo site_url('admin/course'); ?>">Admin</a></li>
                                <li><a class="sign-in" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                            <?php }else{ ?>
                                <li><a class="sign-in" href="<?php echo site_url('login'); ?>">Login </a></li>
                                <li><a class="sign-up" href="<?php echo site_url('register'); ?>">Register </a></li>
                            <?php } ?>
                            </ul>
                        </div>
                        <!-- Header Sing In & Up End -->

                        <!-- Header Mobile Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <a class="menu-toggle" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <!-- Header Mobile Toggle End -->

                    </div>
                    <!-- Header Main End -->

                </div>
            </div>
            <!-- Header Main End -->

        </div>
        <!-- Header Section End -->
        
         <!-- Mobile Menu Start -->
        <div class="mobile-menu">

            <!-- Menu Close Start -->
            <a class="menu-close" href="javascript:void(0)">
                <i class="icofont-close-line"></i>
            </a>
            <!-- Menu Close End -->

            <!-- Mobile Top Medal Start -->
            <div class="mobile-top">
                <!--<p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>-->
                <p><i class="flaticon-email"></i> <a href="mailto:hello@elimu.co.uk">hello@elimu.co.uk</a></p>
            </div>
            <!-- Mobile Top Medal End -->

            <!-- Mobile Sing In & Up Start -->
            <div class="mobile-sign-in-up">
                <ul>
                <?php if($this->session->userdata('urole') == 'User'){ ?>
                    <li><a class="sign-in" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                <?php }else if($this->session->userdata('urole') == 'Admin'){ ?>
                    <li><a href="<?php echo site_url('admin/course'); ?>">Admin</a></li>
                    <li><a class="sign-in" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                <?php }else{ ?>
                    <li><a class="sign-in" href="<?php echo site_url('login'); ?>">Login </a></li>
                    <li><a class="sign-up" href="<?php echo site_url('register'); ?>">Register </a></li>
                <?php } ?>
                </ul>
            </div>
            <!-- Mobile Sing In & Up End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                    <li><a href="<?php echo site_url('covid'); ?>">Covid-19 Response</a></li>
                    <li><a href="<?php echo site_url('elimu_pillars'); ?>">Elimu Pillars</a></li>
                    <li><a href="<?php echo site_url('shop'); ?>">Shop Elimu</a></li>
                    <li><a href="<?php echo site_url('shop/view_cart'); ?>">Cart (<?php echo $this->cart->total_items(); ?>)</a></li>
                </ul>

            </div>
            <!-- Mobile Menu End -->

            <!-- Mobile Menu End
            <div class="mobile-social">
                <ul class="social">
                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                </ul>
            </div>
            <!-- Mobile Menu End -->

        </div>
        <!-- Mobile Menu End -->
       
        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->
    

        <!-- Slider Start -->
        <div class="section slider-section">
            
            <!--<video class="fullscreen-video" autoplay muted loop id="myVideo">
              <source src="uploads/video/rain.mp4" type="video/mp4">
            </video>-->

            <!-- Slider Shape Start 
            <div class="slider-shape">
                <img class="shape-1 animation-round" src="assets/images/shape/shape-8.png" alt="Shape">
            </div>
            <!-- Slider Shape End -->

            <div class="container">

                <!-- Slider Content Start -->
                <div class="slider-content">
                    <h4 class="sub-title" style="color: #dda20b;">Start your favourite course</h4>
                    <h2 class="main-title">Now learning from anywhere, and build your <span style="color: #dda20b;">bright career.</span></h2>
                    <p>It has survived not only five centuries but also the leap into electronic typesetting.</p>
                    <!--<a class="btn btn-primary btn-hover-dark" href="#">Start A Course</a>-->
                </div>
                <!-- Slider Content End -->

            </div>

            <!-- Slider Courses Box Start -->
            <div class="slider-courses-box">

                <!--<img class="shape-1 animation-left" src="assets/images/shape/shape-5.png" alt="Shape">-->

                <!--<div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-open-book"></i>
                        <span class="count">1,235</span>
                        <p>courses</p>
                    </div>
                </div>-->

                <!--<img class="shape-2" src="assets/images/shape/shape-6.png" alt="Shape">-->

            </div>
            <!-- Slider Courses Box End -->

            <!-- Slider Rating Box Start -->
            <div class="slider-rating-box">

                <!--<div class="box-rating">
                    <div class="box-wrapper">
                        <span class="count">4.8 <i class="flaticon-star"></i></span>
                        <p>Rating (86K)</p>
                    </div>
                </div>-->

                <!--<img class="shape animation-up" src="assets/images/shape/shape-7.png" alt="Shape">-->

            </div>
            <!-- Slider Rating Box End -->

            <!-- Slider Images Start 
            <div class="slider-images">
                <div class="images">
                    <img src="<?php echo base_url('assets/images/slider/slider-1.png'); ?>" alt="Slider">
                </div>
            </div>
            <!-- Slider Images End -->

            <!-- Slider Video Start -->
            <div class="slider-video">
                <img class="shape-1" src="<?php echo base_url('assets/images/shape/shape-9.png'); ?>" alt="Shape">

                <div class="video-play">
                    <img src="<?php echo base_url('assets/images/shape/shape-10.png'); ?>" alt="Shape">
                    <a href="https://www.youtube.com/watch?v=BRvyWfuxGuU" class="play video-popup"><i class="flaticon-play"></i></a>
                </div>
            </div>
            <!-- Slider Video End -->

        </div>
        
        <!-- Slider End -->
        
        <section class="showcase">
            <!--<header>
              <h2 class="logo">Travel</h2>
              <div class="toggle"></div>
            </header>-->

            <video src="<?php echo base_url('uploads/video/black_students.mp4'); ?>" muted loop autoplay></video>

            <!--<div class="overlay"></div>-->
            <div class="text">
              <h2>Never Stop To </h2> 
              <h3>Exploring The World</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.</p>
              <a href="#">Explore</a>
            </div>
            <ul class="social">
              <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
              <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
              <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
            </ul>
        </section>
        
        <!-- About Start -->
        <div class="section">

            <div class="section-padding-02 mt-n10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="<?php echo site_url('skills'); ?>"><img height="230" width="200" src="<?php echo base_url('assets/images/skill_centre.png'); ?>" alt="Skills Centre"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="<?php echo site_url('skills'); ?>">Skill Centre</a></h4>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>
                        
                        <!--<div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start 
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="<?php echo site_url('lets_talk'); ?>"><img height="230" width="200" src="<?php echo base_url('assets/images/lets-talk.jpg'); ?>" alt="Let's Talk About"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="<?php echo site_url('lets_talk'); ?>">Let's Talk About</a></h4>
                                </div>
                            </div>
                            <!-- Single Blog End 

                        </div>-->
                        
                        <div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="<?php echo site_url('event'); ?>"><img height="230" width="200" src="<?php echo base_url('assets/images/events.jpg'); ?>" alt="Events"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="<?php echo site_url('event'); ?>">Events</a></h4>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>
                        <div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="<?php echo site_url('opportunity'); ?>"><img height="230" width="200" src="<?php echo base_url('assets/images/opportunity.jpg'); ?>" alt="Opportunity"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="<?php echo site_url('opportunity'); ?>">Opportunity Spotlight</a></h4>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>
                        
                        <!--<div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start 
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="< ?php echo site_url('mentoring'); ?>"><img height="230" width="200" src="< ?php echo base_url('assets/images/mentoring.jpg'); ?>" alt="Mentoring"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="< ?php echo site_url('mentoring'); ?>">Mentoring</a></h4>
                                </div>
                            </div>
                            <!-- Single Blog End 

                        </div>
                        
                        <div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start 
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="< ?php echo site_url('assessment'); ?>"><img height="230" width="200" src="< ?php echo base_url('assets/images/Black-Techies.jpg'); ?>" alt="Assessment Centre"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="< ?php echo site_url('assessment'); ?>">Assessment Centre</a></h4>
                                </div>
                            </div>
                            <!-- Single Blog End 

                        </div>-->

                    </div>
                    
                    <div class="row">
                        
                        <div class="col-lg-6">

                            <!-- About Images Start -->
                            <div class="about-images">
                                <div class="images">
                                    <img src="<?php echo base_url('assets/images/image.jpg'); ?>" alt="About">
                                </div>

                                <!--<div class="about-years">
                                    <div class="years-icon">
                                        <img src="assets/images/logo-icon.png" alt="About">
                                    </div>
                                    <p><strong>28+</strong> Years Experience</p>
                                </div>-->
                            </div>
                            <!-- About Images End -->

                        </div>
                        <div class="col-lg-6">

                            <!-- About Content Start -->
                            <div class="about-content">
                                <h2 class="main-title">Elimu means ‘knowledge’ and ‘education’ <span style="color: #dda20b;">in Swahili.</span></h2>
                                <p>We provide underrepresented youth and young adults with a community of cross-sector role models who enhance their education, careers and financial literacy.</p>
                                <p>Our community achieves this by providing mentoring, training and interactive events. 
                                These are opportunities for our Young Visionaries (YV’s)  to interact and learn from role models who they identify with. </p>
                                <p>YV’s may identify with role models in our community because they are from a similar background, race, ethnicity, gender, or they share similar career aspirations.</p>
                                <p>By receiving a mentor from a desired career field, or participating in training with a corporation, our beneficiaries are able to develop their networks, while learning how to navigate spaces  
                                and access career or personal development opportunities.</p>
                                <p>Join our community to develop your skills , attend our events, access opportunities or join our Launchpad programme.</p>
                                <p>We have different programmes for youth and young adults. To apply directly to a programme, you must be aged 18+.  Our programmes for under 18s 
                                are delivered through your school, college, university, local authority or youth group.</p>
                                <p>If you’d like to support our young people, register your interest and we will be in touch. </p>
                            </div>
                            <!-- About Content End -->

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-padding-02 mt-n10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">

                            <!-- About Images Start -->
                            <div class="about-images">
                                <div class="images">
                                    <img src="<?php echo base_url('assets/images/Black-Techies.jpg'); ?>" alt="About">
                                </div>

                                <!--<div class="about-years">
                                    <div class="years-icon">
                                        <img src="assets/images/logo-icon.png" alt="About">
                                    </div>
                                    <p><strong>28+</strong> Years Experience</p>
                                </div>-->
                            </div>
                            <!-- About Images End -->

                        </div>
                        <div class="col-lg-6">

                            <!-- About Content Start -->
                            <div class="about-content">
                                <h2 class="main-title">*Under-represented groups</h2>
                                <p>At Elimu, we support underrepresented youth and young adults. You are eligible to apply to our programmes if you are:</p>
                                <ul>
                                    <li> - Black</li>
                                    <li> - Asian</li>
                                    <li> - Any other person from the global majority</li>
                                    <li> - A migrant</li>
                                    <li> - Of low educational attainment</li>
                                    <li> - From a working class background</li>
                                </ul>
                                <!--<a href="#" class="btn btn-primary btn-hover-dark">Start A Course</a>-->
                            </div>
                            <!-- About Content End -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- About End -->
        
        <!-- Testimonial End -->
        <div class="section section-padding-02 mt-n1">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title shape-03 text-center">
                    <h5 class="sub-title" style="color: #dda20b;">Testimonial</h5>
                </div>
                <!-- Section Title End -->

                <!-- Testimonial Wrapper End -->
                <div class="testimonial-wrapper testimonial-active">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“This experience is most definitely invaluable. 
                                    Great insight again and I would definitely encourage you to keep 
                                    going with this programme.”</p>
                                    <h4 class="name">Lewis, 28</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->

                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“Thanks once again for this opportunity. I'm glad I was chosen for this mock interview. 
                                    Looking forward to applying the feedback received for future job interviews..”</p>
                                    <h4 class="name">Priscilla, 24</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->

                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“I'm surprised that I get the opportunity to make these connections.”</p>
                                    <h4 class="name">Oluchi, 18</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                            
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“I'm excited to be connected with someone who can relate to me as a young, Black man.”</p>
                                    <h4 class="name">Abeselom, 19</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                            
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“It was really informative and I really took in what was spoken about. 
                                    Thank you honestly for staying in touch and continuing to help me by providing 
                                    me with another opportunity that will benefit me.”</p>
                                    <h4 class="name">Kadija, 16</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                            
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“I'm grateful because I always apply for these opportunities and no one gets back to me.”</p>
                                    <h4 class="name">Cindy-Ann, 17</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                            
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“I never thought my mentor would remember to send me such opportunities, it means a lot to me.”</p>
                                    <h4 class="name">Tahou, 20</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                            
                        </div>

                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Testimonial Wrapper End -->

            </div>
            <br><br>

        </div>
        <!-- Testimonial End -->

        <!-- Brand Logo Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Brand Logo Wrapper Start -->
                <div class="brand-logo-wrapper">

                    <!-- Section Title Start -->
                    <div class="section-title shape-03">
                        <h2 class="main-title">Best Supporter of <span style="color: #dda20b;"> Elimu.</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Brand Logo Start -->
                    <div class="brand-logo brand-active">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Single Brand Start -->
                                <div class="single-brand swiper-slide">
                                    <a href="https://bateswells.co.uk/" target="_blank">    
                                        <img height="100" width="100" src="<?php echo base_url('assets/images/brand/bates.png'); ?>" alt="Bates Well">
                                    </a>    
                                </div>
                                <!-- Single Brand End -->

                                <!-- Single Brand Start -->
                                <div class="single-brand swiper-slide">
                                    <a href="https://www.socialenterprise.org.uk/" target="_blank">
                                        <img height="100" width="100" src="<?php echo base_url('assets/images/brand/certified-social.png'); ?>" alt="Certified Social">
                                    </a>    
                                </div>
                                <!-- Single Brand End -->

                                <!-- Single Brand Start -->
                                <div class="single-brand swiper-slide">
                                    <a href="https://www.doitnownow.com/" target="_blank">
                                        <img height="100" width="100" src="<?php echo base_url('assets/images/brand/do-it-now.png'); ?>" alt="Do It Now">
                                    </a>
                                </div>
                                <!-- Single Brand End -->

                                <!-- Single Brand Start -->
                                <div class="single-brand swiper-slide">
                                    <a href="https://www.hoganlovells.com/" target="_blank">    
                                        <img height="100" width="100" src="<?php echo base_url('assets/images/brand/hogan-lovells.png'); ?>" alt="Hogan Lovells">
                                    </a>    
                                </div>
                                <!-- Single Brand End -->

                                <!-- Single Brand Start -->
                                <div class="single-brand swiper-slide">
                                    <a href="https://www.lewishamlocal.com/launchpad/" target="_blank">
                                        <img height="100" width="100" src="<?php echo base_url('assets/images/brand/lewisham-local.jpg'); ?>" alt="Lewisham Local">
                                    </a>
                                </div>
                                <!-- Single Brand End -->

                                <!-- Single Brand Start -->
                                <div class="single-brand swiper-slide">
                                    <a href="https://www.thersa.org/" target="_blank">
                                        <img height="100" width="100" src="<?php echo base_url('assets/images/brand/rsa.jpg'); ?>" alt="RSA">
                                    </a>
                                </div>
                                <!-- Single Brand End -->
                                
                                <!-- Single Brand Start -->
                                <div class="single-brand swiper-slide">
                                    <a href="https://www.pwc.co.uk/" target="_blank">
                                        <img height="100" width="100" src="<?php echo base_url('assets/images/brand/pwc.jpg'); ?>" alt="PWC">
                                    </a>
                                </div>
                                <!-- Single Brand End -->
                                
                                <!-- Single Brand Start -->
                                <div class="single-brand swiper-slide">
                                    <a href="https://www.socialenterprise.org.uk/" target="_blank">
                                        <img height="100" width="100" src="<?php echo base_url('assets/images/brand/stephen-lloyds.jpg'); ?>" alt="Stephen Lloyds">
                                    </a>
                                </div>
                                <!-- Single Brand End -->
                                
                                <!-- Single Brand Start -->
                                <div class="single-brand swiper-slide">
                                    <a href="https://tostan.org/" target="_blank">
                                        <img height="100" width="100" src="<?php echo base_url('assets/images/brand/tostan.jpg'); ?>" alt="Tostan">
                                    </a>
                                </div>
                                <!-- Single Brand End -->

                            </div>
                        </div>
                    </div>
                    <!-- Brand Logo End -->

                </div>
                <!-- Brand Logo Wrapper End -->

            </div>
        </div><br><br>
        <!-- Brand Logo End -->

        <?php include 'menu/footer.php'; ?>

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->
        
        <!--<div id="list-builder"></div>
            <div id="popup-box">
                <img src="close.png" id="popup-close" />
                <div id="popup-box-content">
                    <h1>Subscribe to The Polyglot Developer Newsletter</h1>
                    <p>
                        Stay up to date on the latest in web, mobile, and game development, plus receive exclusive content by
                        subscribing to our newsletter.
                    </p>
                    <form id="popup-form" action="https://email_list_service_api.com">
                        <input type="hidden" name="list" value="key_list_etc" />
                        <input type="text" name="name" placeholder="Full Name" />
                        <input type="text" name="email" placeholder="Email Address" />
                        <button type="button" name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>-->

    </div>

    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-3.11.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/jquery-3.5.1.min.js'); ?>"></script>

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/plugins/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/bootstrap.min.js'); ?>"></script>

    <!-- Plugins JS -->
    <script src="<?php echo base_url('assets/js/plugins/swiper-bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/video-playlist.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.nice-select.min.js'); ?>"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    
    <script>
	
	$(document).ready(function() {

        var delay = 3000; // milliseconds
        var cookie_expire = 0; // days
    
        var cookie = localStorage.getItem("list-builder");
        if(cookie == undefined || cookie == null) {
            cookie = 0;
        }
    
        if(((new Date()).getTime() - cookie) / (1000 * 60 * 60 * 24) > cookie_expire) {
            $("#list-builder").delay(delay).fadeIn("fast", () => {
                $("#popup-box").fadeIn("fast", () => {});
            });
    
            $("button[name=subscribe]").click(() => {
                $.ajax({
                    type: "POST",
                    url: $("#popup-form").attr("action"),
                    data: $("#popup-form").serialize(),
                    success: (data) => {
                        $("#popup-box-content").html("<p style='text-align: center'>Thank you for subscribing to The Polyglot Developer newsletter!</p>");
                    }
                });
            });
    
            $("#popup-close").click(() => {
                $("#list-builder, #popup-box").hide();
                localStorage.setItem("list-builder", (new Date()).getTime());
            });
        }

    });
    
    </script>
    
    <script>
	
	 const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
      })

</script>

</body>

</html>