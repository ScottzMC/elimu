<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Members Dashboard || Elimu</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/elimu-logo-3.png'); ?>">

    <!-- CSS
	============================================ -->

    <?php $this->load->view('menu/member/style'); ?>

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
                    <a href="<?php echo site_url('home'); ?>"><img style="height: 90px; width: auto;" src="<?php echo base_url('assets/images/elimu-logo-3.png'); ?>" alt="Logo"></a></li>
                </div>
                <!-- Header Logo End -->

                <!-- Header Search Start -->
                <div class="login-header-search dropdown">
                    <button class="search-toggle" data-bs-toggle="dropdown"><i class="flaticon-loupe"></i></button>

                    <div class="search-input dropdown-menu">
                        <form action="<?php echo base_url('members/search'); ?>" method="POST">
                            <input type="text" name="search_query" placeholder="Search here">
                        </form>
                    </div>
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
                            <li><a class="" href="<?php echo site_url('members/message'); ?>"><i class="icofont-user"></i> Message</a></li>
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
                    <a href="<?php echo site_url('home'); ?>" title="Home">
                        <img src="<?php echo base_url('assets/images/menu-icon/icon-1.png'); ?>" alt="Icon" title="Home">
                    </a>
                    <a class="active" href="<?php echo site_url('members/dashboard'); ?>" title="Dashboard">
                        <img src="<?php echo base_url('assets/images/menu-icon/icon-1.png'); ?>" alt="Icon" title="Dashboard">
                    </a>
                </div>
            </div>
            <!-- Sidebar Wrapper End -->
            
            <div class="page-content-wrapper py-0">
            
                <?php $this->load->view('menu/member/nav'); ?>
            
                <!-- Page Content Wrapper Start -->
                <div class="main-content-wrapper pb-0" style="padding-bottom: 300px;">
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
                            <h3 class="title">Launchpad</h3>
                        </div>
                        <!-- Admin Courses Tab End -->
    
                        <!-- Admin Courses Tab Content Start -->
                        <div class="admin-courses-tab-content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">
    
                                    <!-- Courses Item Start -->
                                    <?php if(!empty($launchpad)){ foreach($launchpad as $launch){ ?>
                                    <div class="courses-item">
                                        <div class="item-thumb">
                                            <a href="<?php echo site_url('members/launch_pad_course/'.$launch->title); ?>">
                                                <img src="<?php echo base_url('uploads/course/'.$launch->image); ?>" alt="<?php echo $launch->title;  ?>">
                                            </a>
                                        </div>
    
                                        <div class="content-title">
                                            <h3 class="title">
                                                <a href="<?php echo site_url('members/launch_pad/'.$launch->id); ?>">
                                                    <?php echo str_replace('-', ' ', $launch->title); ?>
                                                </a>
                                            </h3>
                                        </div>
                                        
                                    </div>
                                    <?php } }else{ echo ''; } ?>
                                    <!-- Courses Item End -->
    
                                </div>
                                
                            </div>
                        </div>
                        <!-- Admin Courses Tab Content End -->
                        
                        <!-- Admin Courses Tab Start -->
                        <div class="admin-courses-tab">
                            <h3 class="title">Fellowship</h3>
                        </div>
                        <!-- Admin Courses Tab End -->
    
                        <!-- Admin Courses Tab Content Start -->
                        <div class="admin-courses-tab-content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">
    
                                    <!-- Courses Item Start -->
                                    <?php if(!empty($fellowship)){ foreach($fellowship as $fellow){ ?>
                                    <div class="courses-item">
                                        <div class="item-thumb">
                                            <a href="<?php echo site_url('members/fellowship_course/'.$fellow->title); ?>">
                                                <img src="<?php echo base_url('uploads/course/'.$fellow->image); ?>" alt="<?php echo $fellow->title;  ?>">
                                            </a>
                                        </div>
    
                                        <div class="content-title">
                                            <h3 class="title">
                                                <a href="<?php echo site_url('members/fellowship_course'); ?>">
                                                    <?php echo $fellow->title; ?>
                                                </a>
                                            </h3>
                                        </div>
                                        
                                    </div>
                                    <?php } }else{ echo ''; } ?>
                                    <!-- Courses Item End -->
    
                                </div>
                                
                            </div>
                        </div>
                        <!-- Admin Courses Tab Content End -->
    
                    </div>
                </div>
            </div>
            <!-- Page Content Wrapper End -->

        </div>
        <!-- Courses Admin End -->

        <?php $this->load->view('menu/member/footer'); ?>

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>

    <!-- JS
    ============================================ -->

    <?php $this->load->view('menu/member/script'); ?>

</body>

</html>