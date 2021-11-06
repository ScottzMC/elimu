<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php foreach($detail as $det){} ?>
    <title><?php echo $det->fullname; ?> ||Visionary || Elimu</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>">

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

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <div class="main-wrapper main-wrapper-02">
        
            <?php foreach($profile as $prof){} ?>

        <!-- Login Header Start -->
        <div class="section login-header">
            <!-- Login Header Wrapper Start -->
            <div class="login-header-wrapper navbar navbar-expand">

                <!-- Header Logo Start -->
                <div class="login-header-logo">
                    <a href="#"><img height="90" width="180" src="<?php echo base_url('assets/images/elimu.png'); ?>" alt="Logo"></a></li>
                </div>
                <!-- Header Logo End -->

                <!-- Header Search Start -->
                <div class="login-header-search dropdown">
                </div>
                <!-- Header Search End -->

                <!-- Header Action Start -->
                <div class="login-header-action ml-auto">

                    <a class="action author" href="#">
                        <img height="60" width="80" src="<?php echo base_url('uploads/profile/'.$prof->image); ?>" alt="Author">
                    </a>

                    <div class="dropdown">
                        <button class="action more" data-bs-toggle="dropdown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="" href="<?php echo site_url('members/profile'); ?>"><i class="icofont-user"></i> Profile</a></li>
                            <li><a class="" href="<?php echo site_url('logout'); ?>"><i class="icofont-logout"></i> Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Action End -->

            </div>
            <!-- Login Header Wrapper End -->
        </div>
        <!-- Login Header End -->

        <!-- Courses Start -->
        <div class="section section-padding mt-n10">
            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('members/dashboard'); ?>">Members</a></li>
                        <li><a href="<?php echo site_url('members/visionary'); ?>">Visionary</a></li>
                        <li class="active"><?php echo $det->fullname; ?></li>
                    </ul>
                    <h2 class="title"><?php echo $det->fullname; ?> <span>Elimu.</span></h2>
                </div>
                <!-- Page Banner End -->
                
                <div class="row gx-10">
                    <div class="col-lg-8">

                        <!-- Courses Details Start -->
                        <div class="courses-details">

                            <div class="courses-details-images">
                                <img src="<?php echo base_url('uploads/team/aca.png'); ?>" alt="Courses Details">
                            </div>

                            <h2 class="title"><?php echo $det->fullname; ?></h2>

                            <div class="courses-details-admin">
                                <!--<div class="admin-author">
                                    <div class="author-content">
                                        <a class="name" href="#">Pamela Foster</a>
                                        <span class="Enroll">286 Enrolled Students</span>
                                    </div>
                                </div>-->
                                <!--<div class="admin-rating">
                                    <span class="rating-count">4.9</span>
                                    <span class="rating-star">
											<span class="rating-bar" style="width: 80%;"></span>
                                    </span>
                                    <span class="rating-text">(5,764 Rating)</span>
                                </div>-->
                            </div>

                            <!-- Courses Details Tab Start -->
                            <div class="courses-details-tab">

                                <!-- Details Tab Menu Start -->
                                <div class="details-tab-menu">
                                    <ul class="nav justify-content-center">
                                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#description">Description</button></li>
                                    </ul>
                                </div>
                                <!-- Details Tab Menu End -->

                                <!-- Details Tab Content Start -->
                                <div class="details-tab-content">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="description">

                                            <!-- Tab Description Start -->
                                            <div class="tab-description">
                                                <div class="description-wrapper">
                                                    <h3 class="tab-title">Description:</h3>
                                                    <p><?php echo $det->body; ?></p>
=                                                </div>
                                                <!--<div class="description-wrapper">
                                                    <h3 class="tab-title">Curriculum:</h3>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                                    standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type 
                                                    specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                                    It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>
                                                </div>
                                                <div class="description-wrapper">
                                                    <h3 class="tab-title">Certification:</h3>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                                                    dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                                    It was popularsed in the 1960 with release containing Lorem Ipsum passages desktop publishing software.</p>
                                                </div>-->
                                            </div>
                                            <!-- Tab Description End -->

                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- Details Tab Content End -->

                            </div>
                            <!-- Courses Details Tab End -->

                        </div>
                        <!-- Courses Details End -->

                    </div>
                    <div class="col-lg-4">
                        <!-- Courses Details Sidebar Start -->
                        <div class="sidebar">

                            <!-- Sidebar Widget Information Start -->
                            <div class="sidebar-widget widget-information">
                                <div class="info-list">
                                    <ul>
                                        <li><i class="icofont-bars"></i> <strong>Level</strong> <span>Secondary</span></li>
                                        <li><i class="icofont-book-alt"></i> <strong>Language</strong> <span>English</span></li>
                                    </ul>
                                </div>
                                <div class="info-btn">
                                    <a href="#" class="btn btn-primary btn-hover-dark">Follow</a>
                                </div>
                            </div>
                            <!-- Sidebar Widget Information End -->

                            <!-- Sidebar Widget Share Start -->
                            <div class="sidebar-widget">
                                <h4 class="widget-title">Share Course:</h4>

                                <ul class="social">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Sidebar Widget Share End -->

                        </div>
                        <!-- Courses Details Sidebar End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->
        
        <?php include 'menu/footer.php'; ?>
        
        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

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

</body>

</html>