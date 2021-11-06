<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Members Profile || Elimu</title>
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

    <?php foreach($profile as $prof){} ?>

<body>

    <div class="main-wrapper main-wrapper-02">

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

        <!-- Courses Admin Start -->
        <div class="section overflow-hidden position-relative" id="wrapper">

            <!-- Sidebar Wrapper Start -->
            <div class="sidebar-wrapper">
                <div class="menu-list">
                    <a href="<?php echo site_url('home'); ?>">
                        <img src="<?php echo base_url('assets/images/menu-icon/icon-1.png'); ?>" alt="Icon" title="Home">
                    </a>
                    <a class="active" href="<?php echo site_url('members/dashboard'); ?>">
                        <img src="<?php echo base_url('assets/images/menu-icon/icon-1.png'); ?>" alt="Icon" title="Dashboard">
                    </a>
                    <a href="<?php echo site_url('members/role_model'); ?>">
                        <img src="<?php echo base_url('assets/images/menu-icon/icon-1.png'); ?>" alt="Icon" title="Role Model">
                    </a>
                    <a href="<?php echo site_url('members/visionary'); ?>">
                        <img src="<?php echo base_url('assets/images/menu-icon/icon-3.png'); ?>" alt="Icon" title="Visionary">
                    </a>
                    <!--<a href="#"><img src="<?php echo base_url('assets/images/menu-icon/icon-4.png'); ?>" alt="Icon"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/menu-icon/icon-5.png'); ?>" alt="Icon"></a>-->
                </div>
            </div>
            <!-- Sidebar Wrapper End -->

            <!-- Page Content Wrapper Start -->
            <div class="page-content-wrapper">
                <div class="container-fluid custom-container">

                    <!-- Message Start -->
                    <div class="message">
                        <div class="message-icon">
                            <img src="<?php echo base_url('assets/images/menu-icon/icon-6.png'); ?>" alt="">
                        </div>
                        <div class="message-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                            since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                            but also the leap into electronic.</p>
                        </div>
                    </div>
                    <!-- Message End -->

                    <!-- Admin Courses Tab Start -->
                    <div class="admin-courses-tab">
                        <h3 class="title">Members Profile</h3>
                    </div>
                    <!-- Admin Courses Tab End -->
                    
                    <!-- Admin Courses Tab Content Start -->
                    <div class="admin-courses-tab-content">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">

                                <!-- Courses Item Start -->
                                <div class="courses-item">
                                    <div class="item-thumb">
                                        <a href="#">
                                            <img src="<?php echo base_url('uploads/profile/'.$prof->image); ?>" alt="Profile">
                                        </a>
                                    </div>

                                    <div class="content-title">
                                        <h3 class="title">
                                            <a href="#">
                                                Full Name - <?php echo $prof->fullname; ?>
                                            </a>
                                        </h3>
                                        <h3 class="title">
                                            <a href="#">
                                                Occupation - <?php echo $prof->occupation; ?>
                                            </a>
                                        </h3>
                                    </div>
                                    
                                    <div class="content-title">
                                        <h3 class="title">
                                            <a href="#">
                                                Personal Interest - <?php echo $prof->personal_interest; ?>
                                            </a>
                                        </h3>
                                        <h3 class="title">
                                            <a href="#">
                                                Career Interest - <?php echo $prof->career_interest; ?>
                                            </a>
                                        </h3>
                                    </div>
                                    
                                    <div class="content-title">
                                        <h3 class="title">
                                            <a href="#">
                                                Membership - <?php echo $prof->membership; ?>
                                            </a>
                                        </h3>
                                        <h3 class="title">
                                            <?php if(!empty($prof->social_url)){ ?>
                                            <a href="#">
                                                Social Link - <a href="<?php echo $prof->social_url; ?>">Click</a>
                                            </a>
                                            <?php } ?>
                                        </h3>
                                    </div>
                                    
                                </div>
                                <!-- Courses Item End -->
                                
                                 <!-- Courses Item Start -->
                                <div class="courses-item">
                                    <div class="content-title">
                                        <h3 class="title">
                                            <a href="#">
                                                Why are you signing up? - <?php echo $prof->signing_up; ?>
                                            </a>
                                        </h3>
                                    </div>
                                    
                                </div>
                                <!-- Courses Item End -->
                                
                                <!-- Courses Item Start -->
                                <div class="courses-item">
                                    <div class="content-title">
                                        <h3 class="title">
                                            <a href="#">
                                                What can you bring to the community? - <?php echo $prof->bring_to_community; ?>
                                            </a>
                                        </h3>
                                    </div>
                                    
                                </div>
                                <!-- Courses Item End -->
                                
                                <!-- Courses Item Start -->
                                <div class="courses-item">
                                    <div class="content-title">
                                        <h3 class="title">
                                            <a href="#">
                                                What are you hoping to get? - 
                                                <?php 
                                                //$check = explode(',', $prof->hoping_to_get);
                                                //foreach($check as $hope_get){
                                                    echo $prof->hoping_to_get;
                                                //}
                                                ?>
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <br><br>
                                <!-- Courses Item End -->
                                
                                <a href="<?php echo site_url('members/edit_profile/'.$prof->id); ?>" class="btn btn-primary btn-hover-dark w-100">Update my Profile</a>

                            </div>
                            
                        </div>
                    </div>
                    <!-- Admin Courses Tab Content End -->

                </div>
            </div>
            <!-- Page Content Wrapper End -->

        </div>
        <!-- Courses Admin End -->

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