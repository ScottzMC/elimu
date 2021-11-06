<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php foreach($detail as $det){} ?>
    <title><?php echo $det->title; ?> || Elimu</title>
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

    <div class="main-wrapper">

        <?php include 'menu/nav.php'; ?>

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Page Banner Start -->
        <div class="section page-banner">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('shop'); ?>">Shop</a></li>
                        <li class="active"><?php echo $det->title; ?></li>
                    </ul>
                    <h2 class="title"><?php echo $det->title; ?></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start 
            <div class="shape-icon-box">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

            </div>
            <!-- Shape Icon Box End -->

        </div>
        <!-- Page Banner End -->
        
        <?php foreach($detail as $det){} ?>

        <!-- Courses Start -->
        <div class="section section-padding mt-n10">
            <div class="container">
                <div class="row gx-10">
                    <div class="col-lg-8">

                        <!-- Courses Details Start -->
                        <div class="courses-details">

                            <div class="courses-details-images">
                                <img src="<?php echo base_url('uploads/shop/'.$det->image); ?>" alt="<?php echo $det->title; ?>">
                            </div>

                            <h2 class="title"><?php echo $det->title; ?></h2>

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

                            <!-- Sidebar Widget Information Start -->
                            <div class="sidebar-widget widget-information">
                                <div class="info-price">
                                    <span class="price">&pound;<?php echo $det->price; ?></span>
                                </div>
                                <div class="info-list">
                                    <ul>
                                        <li><i class="icofont-bars"></i> <strong>Color</strong> <span><?php echo $det->color; ?></span></li>
                                        <li><i class="icofont-bars"></i> <strong>Size</strong> <span><?php echo $det->size; ?></span></li>
                                    </ul>
                                </div>
                                <div class="info-btn">
                                    <form action="<?php echo base_url('shop/add_cart'); ?>" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $det->id; ?>">
                                        <input type="hidden" name="title" value="<?php echo $det->title; ?>">
                                        <input type="hidden" name="price" value="<?php echo $det->price; ?>">
                                        <input type="hidden" name="image" value="<?php echo $det->image; ?>">
                                        <input type="hidden" name="color" value="<?php echo $det->color; ?>">
                                        <input type="hidden" name="size" value="<?php echo $det->size; ?>">
                                        <button type="submit" class="btn btn-primary btn-hover-dark" title="Add to Cart">Add To Cart</button>
                                        <br>
                                     </form>
                                </div>
                            </div>
                            <!-- Sidebar Widget Information End -->

                            <!-- Sidebar Widget Share Start 
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