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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/elimu-logo-3.png'); ?>">

    <!-- CSS
	============================================ -->

    <?php $this->load->view('menu/main/style'); ?>


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

                        <!-- Header Top Left Start 
                        <div class="header-top-left">
                            <p>Know more about us <a href="< ?php echo site_url('home'); ?>">Elimu.</a></p>
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
                    <div style="margin-top: 5px; border: none;" class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="<?php echo site_url('home'); ?>"><img style="height: 90px; width: auto;" src="<?php echo base_url('assets/images/elimu-logo-3.png'); ?>" alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="header-menu d-none d-lg-block">
                            <ul class="nav-menu">
                                <li><a style="color: #dda20b;" href="<?php echo site_url('home'); ?>">Home</a></li>
                                <li><a style="color: #dda20b;" href="<?php echo site_url('about'); ?>">About</a></li>
                                <li><a style="color: #dda20b;" href="<?php echo site_url('covid'); ?>">Covid-19</a></li>
                                <li><a style="color: #dda20b;" href="<?php echo site_url('elimu_pillars'); ?>">Elimu Pillars</a></li>
                                <li><a style="color: #dda20b;" href="<?php echo site_url('shop'); ?>">Shop Elimu</a></li>
                                <li><a style="color: #dda20b;" href="<?php echo site_url('shop/view_cart'); ?>">Cart (<?php echo $this->cart->total_items(); ?>)</a></li>
                            </ul>

                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Sing In & Up Start -->
                        <div class="header-sign-in-up d-none d-lg-block">
                            <ul>
                            <?php if($this->session->userdata('urole') == 'User'){ ?>
                                <li><a style="color: #dda20b;" href="<?php echo site_url('members/dashboard'); ?>">Members area</a></li>
                                <li><a class="sign-in" style="color: #dda20b;" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                            <?php }else if($this->session->userdata('urole') == 'Admin'){ ?>
                                <li><a style="color: #dda20b;" href="<?php echo site_url('admin/course'); ?>">Admin</a></li>
                                <li><a class="sign-in" style="color: #dda20b;" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                            <?php }else{ ?>
                                <li><a class="sign-in" style="color: #dda20b;" href="<?php echo site_url('login'); ?>">Login </a></li>
                                <li><a class="sign-up" style="color: #dda20b;" href="<?php echo site_url('register'); ?>">Register </a></li>
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
                    <li><a style="color: #dda20b;" href="<?php echo site_url('members/dashboard'); ?>">Members area</a></li>
                    <li><a style="color: #dda20b;" class="sign-in" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                <?php }else if($this->session->userdata('urole') == 'Admin'){ ?>
                    <li><a style="color: #dda20b;" href="<?php echo site_url('admin/course'); ?>">Admin</a></li>
                    <li><a class="sign-in" style="color: #dda20b;" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                <?php }else{ ?>
                    <li><a class="sign-in" style="color: #dda20b;" href="<?php echo site_url('login'); ?>">Login </a></li>
                    <li><a class="sign-up" style="color: #dda20b;" href="<?php echo site_url('register'); ?>">Register </a></li>
                <?php } ?>
                </ul>
            </div>
            <!-- Mobile Sing In & Up End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li><a style="color: #dda20b;" href="<?php echo site_url('home'); ?>">Home</a></li>
                    <li><a style="color: #dda20b;" href="<?php echo site_url('about'); ?>">About</a></li>
                    <li><a style="color: #dda20b;" href="<?php echo site_url('covid'); ?>">Covid-19 Response</a></li>
                    <li><a style="color: #dda20b;" href="<?php echo site_url('elimu_pillars'); ?>">Elimu Pillars</a></li>
                    <li><a style="color: #dda20b;" href="<?php echo site_url('shop'); ?>">Shop Elimu</a></li>
                    <li><a style="color: #dda20b;" href="<?php echo site_url('shop/view_cart'); ?>">Cart (<?php echo $this->cart->total_items(); ?>)</a></li>
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
        
        <section style="background: #309255;" class="showcase">
            <!--<header>
              <h2 class="logo">Travel</h2>
              <div class="toggle"></div>
            </header>-->

            <video src="<?php echo base_url('uploads/video/black_students.mp4'); ?>" muted loop autoplay></video>

            <!--<div class="overlay"></div>-->
            <div style="margin-top: -50px;" class="text">
              <h3>Join our community to access our members-only area</h3>
            </div>
            <!--<ul class="social">
              <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
              <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
              <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
            </ul>-->
        </section>
        
        <!-- About Start -->
        <div class="section">

            <div class="section-padding-02 mt-n10">
                <div class="container">
                    <div class="row">
                        <!--<div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start 
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="< ?php echo site_url('skills'); ?>"><img height="230" width="200" src="< ?php echo base_url('assets/images/skill_centre.png'); ?>" alt="Skills Centre"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="< ?php echo site_url('skills'); ?>">Skill Centre</a></h4>
                                </div>
                            </div>
                            <!-- Single Blog End 

                        </div>-->
                        
                        <div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="<?php echo site_url('lets_talk'); ?>"><img height="230" width="200" src="<?php echo base_url('assets/images/lets-talk.jpg'); ?>" alt="Let's Talk About"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="<?php echo site_url('lets_talk'); ?>">Let's Talk About</a></h4>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>
                        
                        <!--<div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start 
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="< ?php echo site_url('event'); ?>"><img height="230" width="200" src="< ?php echo base_url('assets/images/events.jpg'); ?>" alt="Events"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="< ?php echo site_url('event'); ?>">Events</a></h4>
                                </div>
                            </div>
                            <!-- Single Blog End 

                        </div>-->
                        
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
                        
                        <div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="<?php echo site_url('skills'); ?>"><img height="230" width="200" src="<?php echo base_url('assets/images/skill_centre.png'); ?>" alt="Skill Centre"></a>
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
                    
                    
                    
                </div>
            </div>
            
            <div class="section-padding-02 mt-n10">
                <div class="container">
                    <?php if(!empty($home)){ foreach($home as $hom){ ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- About Images Start -->
                            <div class="about-images">
                                <div class="images">
                                    <img src="<?php echo base_url('uploads/home/'.$hom->image); ?>" alt="<?php echo $hom->title; ?>">
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
                                <h2 class="main-title"><?php echo $hom->title; ?></h2>
                                <p><?php echo $hom->body; ?></p>
                            </div>
                            <!-- About Content End -->

                        </div>
                    </div>
                    <?php } } ?>
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
                            <?php if(!empty($testimonial)){ foreach($testimonial as $test){ ?>
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('uploads/testimonial/'.$test->image); ?>" alt="<?php echo $test->fullname; ?>">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p><?php echo $test->body; ?></p>
                                    <h4 class="name"><?php echo $test->fullname; ?>, <?php echo $test->age; ?></h4>
                                </div>
                            </div>
                            <?php } } ?>
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
        <div style="padding-top: 35px; padding-bottom: 30px;" class="section section-padding-02">
            <div class="container">

                <!-- Brand Logo Wrapper Start -->
                <div class="brand-logo-wrapper">

                    <!-- Section Title Start -->
                    <div class="section-title shape-03">
                        <h2 class="main-title">Supporters of <span style="color: #dda20b;"> Elimu.</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Brand Logo Start -->
                    <div class="brand-logo brand-active">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Single Brand Start -->
                                <?php if(!empty($home_supporter)){ foreach($home_supporter as $supporter){ ?>
                                <div class="single-brand swiper-slide">
                                    <a href="<?php echo $supporter->url; ?>" target="_blank">    
                                        <img height="100" width="100" src="<?php echo base_url('uploads/home/'.$supporter->image); ?>" alt="<?php echo $supporter->title; ?>">
                                    </a>    
                                </div>
                                <?php } } ?>
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

        <?php $this->load->view('menu/main/footer'); ?>

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

    <?php $this->load->view('menu/main/script'); ?>

</body>

</html>