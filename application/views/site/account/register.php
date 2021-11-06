<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Create an Account || Elimu</title>
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
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
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

        <!-- Register & Login Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- Register & Login Wrapper Start -->
                <div class="register-login-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">

                            <!-- Register & Login Images Start -->
                            <div class="register-login-images">

                                <div class="images">
                                    <img src="<?php echo base_url('assets/images/register-login.png'); ?>" alt="Register Login">
                                </div>
                            </div>
                            <!-- Register & Login Images End -->

                        </div>
                        <div class="col-lg-6">

                            <!-- Register & Login Form Start -->
                            <div class="register-login-form">
                                <h3 class="title">Registration <span>Now</span></h3>

                                <div class="form-wrapper">
                                    <form action="<?php echo base_url('register'); ?>" method="POST">
                                        <div class="single-form">
                                            <input type="text" name="fullname" placeholder="Full Name">
                                        </div>
                                        <div class="single-form">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="single-form">
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="single-form">
                                            <input type="password" name="cpassword" placeholder="Confirm Password">
                                        </div>
                                        <div class="single-form">
                                            <label>
                                                <h4>Membership</h4>
                                            </label><br>
                                            <select name="membership">
                                                <option>Select</option>
                                                <option value="Role Model">Role Model</option>
                                                <option value="Visionary">Visionary</option>
                                            </select>
                                        </div>
                                        <div class="single-form">
                                            <button type="submit" name="register" class="btn btn-primary btn-hover-dark w-100">Create an account</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Register & Login Form End -->
                            <?php
                            	echo $this->session->flashdata('msg');
                            	echo $this->session->flashdata('msgError');
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Register & Login Wrapper End -->

            </div>
        </div>
        <!-- Register & Login End -->

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