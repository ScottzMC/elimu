<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About Us || Elimu </title>
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

<body>

    <div class="main-wrapper">

        <?php $this->load->view('menu/main/nav'); ?>

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Page Banner Start -->
        <div style="height: 400px;" class="section page-banner">

            <!--<img class="shape-1 animation-round" src="assets/images/shape/shape-8.png" alt="Shape">

            <img class="shape-2" src="assets/images/shape/shape-23.png" alt="Shape">-->

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li class="active" style="color: #dda20b;">About</li>
                    </ul>
                    <h2 class="title">About <span style="color: #dda20b;">Elimu.</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">

                <!--<img class="icon-shape-1 animation-left" src="assets/images/shape/shape-5.png" alt="Shape">-->

                <!--<div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>-->

                <!--<img class="icon-shape-2" src="assets/images/shape/shape-6.png" alt="Shape">-->

            </div>
            <!-- Shape Icon Box End -->

            <!--<img class="shape-3" src="assets/images/shape/shape-24.png" alt="Shape">-->

        </div>
        <!-- Page Banner End -->

        <!-- About Start -->
        <div class="section">

            <div class="section-padding-02 mt-n10">
                <div class="container">
                    <div class="row">
                        <?php if(!empty($about)){ foreach($about as $abt){} ?>
                        <div class="col-lg-6">
                            
                            <!-- About Images Start -->
                            <div class="about-images">
                                <div class="images">
                                    <img src="<?php echo base_url('uploads/about_us/'.$abt->image); ?>" alt="<?php echo $abt->title; ?>">
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
                                <h2 class="main-title"><?php echo $abt->title; ?></span></h2>
                                <p><?php echo $abt->body; ?></p>
                                <a href="<?php echo site_url('login'); ?>" class="btn btn-primary btn-hover-dark">Login</a>
                            </div>
                            <!-- About Content End -->

                        </div>
                        <?php } ?>
                        
                        <div class="col-lg-6">
                            <?php foreach($about_objective as $objective){} ?>
                            <!-- About Content Start -->
                            <div class="about-content">
                                <h2 class="main-title"><?php echo $objective->mission_title; ?></span></h2>
                                <p><?php echo $objective->mission_body; ?></p>
                            </div>
                            <!-- About Content End -->

                        </div>
                        
                        <div class="col-lg-6">

                            <!-- About Content Start -->
                            <div class="about-content">
                                <h2 class="main-title"><?php echo $objective->vision_title; ?></span></h2>
                                <p><?php echo $objective->vision_body; ?></p>
                            </div>
                            <!-- About Content End -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="section-padding-02 mt-n6">
                <div class="container">

                    <!-- About Items Wrapper Start -->
                    <div class="about-items-wrapper">
                        <div class="row">
                            <?php if(!empty($about_feature)){ foreach($about_feature as $feature){ ?>
                            <div class="col-lg-4">
                                <!-- About Item Start -->
                                <div class="about-item">
                                    <div class="item-icon-title">
                                        <div class="item-icon">
                                            <i class="<?php echo $feature->icon; ?>"></i>
                                        </div>
                                        <div class="item-title">
                                            <h3 class="title"><?php echo $feature->title; ?></h3>
                                        </div>
                                    </div>
                                    <p><?php echo $feature->body; ?></p>
                                </div>
                                <!-- About Item End -->
                            </div>
                            <?php } } ?>
                        </div>
                    </div>
                    <!-- About Items Wrapper End -->

                </div>
            </div>
            
        </div>
        <!-- About End -->

        <!-- Call to Action Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Call to Action Wrapper Start 
                <div class="call-to-action-wrapper">

                    <img class="cat-shape-01 animation-round" src="assets/images/shape/shape-12.png" alt="Shape">
                    <img class="cat-shape-02" src="assets/images/shape/shape-13.svg" alt="Shape">
                    <img class="cat-shape-03 animation-round" src="assets/images/shape/shape-12.png" alt="Shape">

                    <div class="row align-items-center">
                        <div class="col-md-6">

                            <!-- Section Title Start 
                            <div class="section-title shape-02">
                                <h5 class="sub-title">Become A Instructor</h5>
                                <h2 class="main-title">You can join with Edule as <span>a instructor?</span></h2>
                            </div>
                            <!-- Section Title End 

                        </div>
                        <div class="col-md-6">
                            <div class="call-to-action-btn">
                                <a class="btn btn-primary btn-hover-dark" href="contact.html">Drop Information</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call to Action Wrapper End -->

            </div>
        </div>
        <!-- Call to Action End -->

        <!-- Team Member's Start -->
        <div class="section section-padding mt-n1">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title shape-03 text-center">
                    <h2 class="main-title">Elimu Team <span style="color: #dda20b;"> Members</span></h2>
                </div>
                <!-- Section Title End -->

                <!-- Team Wrapper Start -->
                <div class="team-wrapper">
                    <div class="row row-cols-lg-5 row-cols-sm-3 row-cols-2 ">
                        <?php if(!empty($team)){ foreach($team as $tem){ ?>
                        <div class="col">

                            <!-- Single Team Start -->
                            <div class="single-team">
                                <div class="team-thumb">
                                    <img height="220" width="250" src="<?php echo base_url('uploads/team/'.$tem->image); ?>" alt="<?php echo $tem->fullname; ?>">
                                </div>
                                <div class="team-content">
                                    <h4 class="name"><?php echo $tem->fullname; ?></h4>
                                    <span class="designation"><?php echo $tem->role; ?></span>
                                </div>
                            </div>
                            <!-- Single Team End -->

                        </div>
                        <?php } } ?>
                        
                    </div>
                </div>
                <!-- Team Wrapper End -->

            </div>
        </div>
        <!-- Team Member's End -->

        <!-- Download App Start 
        <div class="section section-padding download-section">

            <div class="app-shape-1"></div>
            <div class="app-shape-2"></div>
            <div class="app-shape-3"></div>
            <div class="app-shape-4"></div>

            <div class="container">

                <!-- Download App Wrapper Start 
                <div class="download-app-wrapper mt-n6">

                    <!-- Section Title Start 
                    <div class="section-title section-title-white">
                        <h5 class="sub-title">Ready to start?</h5>
                        <h2 class="main-title">Download our mobile app. for easy to start your course.</h2>
                    </div>
                    <!-- Section Title End 

                    <img class="shape-1 animation-right" src="assets/images/shape/shape-14.png" alt="Shape">

                    <!-- Download App Button End 
                    <div class="download-app-btn">
                        <ul class="app-btn">
                            <li><a href="#"><img src="assets/images/google-play.png" alt="Google Play"></a></li>
                            <li><a href="#"><img src="assets/images/app-store.png" alt="App Store"></a></li>
                        </ul>
                    </div>
                    <!-- Download App Button End 

                </div>
                <!-- Download App Wrapper End 

            </div>
        </div>
        <!-- Download App End -->

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
                                        <img src="<?php echo base_url('uploads/testimonial/'.$test->image); ?>" alt="Author">
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

        <?php $this->load->view('menu/main/footer'); ?>

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>


    <!-- JS
    ============================================ -->

    <?php $this->load->view('menu/main/script'); ?>
    
</body>

</html>