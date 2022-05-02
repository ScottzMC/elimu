<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php foreach($detail as $det){} ?>
    <title><?php echo $det->title; ?> || Opportunity || Elimu</title>
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

<body>

    <div class="main-wrapper main-wrapper-02">
        
            <?php foreach($profile as $prof){} ?>

        <!-- Login Header Start -->
        <div class="section login-header">
            <!-- Login Header Wrapper Start -->
            <div class="login-header-wrapper navbar navbar-expand">

                <!-- Header Logo Start -->
                <div class="login-header-logo">
                    <a href="#"><img style="height: 90px; width: auto;" src="<?php echo base_url('assets/images/elimu-logo-3.png'); ?>" alt="Logo"></a></li>
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

        <!-- Courses Start -->
        <div class="section section-padding mt-n10">
            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('members/dashboard'); ?>">Members</a></li>
                        <li><a href="<?php echo site_url('members/opportunity'); ?>">Opportunity</a></li>
                        <li class="active"><?php echo $det->title; ?></li>
                    </ul>
                    <h2 class="title"><?php echo $det->title; ?> <span>Elimu.</span></h2>
                </div>
                <!-- Page Banner End -->
                <div class="row gx-10">
                    <div class="col-lg-8">

                        <!-- Courses Details Start -->
                        <div class="courses-details">

                            <div class="courses-details-images">
                                <img src="<?php echo base_url('assets/images/elimu.png'); ?>" alt="">
                            </div>

                            <h2 class="title"><?php echo $det->title; ?></h2>

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
                                                </div>
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
                            <?php $session_email = $this->session->userdata('uemail'); ?>
                            <!-- Sidebar Widget Information Start -->
                            <div class="sidebar-widget widget-information">
                                <div class="info-btn">
                                    <a href="<?php echo $det->url; ?>" class="btn btn-primary btn-hover-dark w-100">Link</a>
                                </div>
                            </div>
                            <!-- Sidebar Widget Information End -->
                            
                            <?php if($det->uploaded_by == $session_email && !empty($session_email)){ ?>
                            <!-- Sidebar Widget Information Start -->
                            <div class="sidebar-widget widget-information">
                                <div class="info-btn">
                                    <a href="<?php echo site_url('members/opportunity/edit/'.$det->id); ?>" class="btn btn-primary btn-hover-dark w-100">Edit</a>
                                </div>
                            </div>
                            <!-- Sidebar Widget Information End -->
                            <?php } ?>

                        </div>
                        <!-- Courses Details Sidebar End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->
        
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