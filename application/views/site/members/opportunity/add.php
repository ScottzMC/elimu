<?php foreach($profile as $prof){} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Opportunity || Elimu</title>
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
                </div>
            </div>
            <!-- Sidebar Wrapper End -->

            <div class="page-content-wrapper py-0">
            <!-- Page Content Wrapper Start -->
            
                <?php $this->load->view('menu/member/nav'); ?>
              
              <div class="main-content-wrapper pb-0">
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
                        
                        <div class="col-lg-6" style="margin-left: 30px; padding-bottom: 50px;">

                            <!-- Register & Login Form Start -->

                                <div class="form-wrapper">
                                    <form action="<?php echo base_url('members/opportunity/add'); ?>" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                        <div class="single-form">
                                            <label>
                                                <h5>Title</h5>
                                            </label>
                                            <input type="text" name="title" placeholder="Title" value="">
                                        </div>
                                        <div class="single-form">
                                            <label>
                                                <h5>Description</h5>
                                            </label>
                                            <textarea id="summernote" name="body" rows="5" cols="5" placeholder="Description"></textarea>
                                        </div>
                                        <br>
                                        <div class="single-form">
                                            <label>
                                                <h5>Opportunity Link</h5>
                                            </label>
                                            <input type="text" name="url" placeholder="Opportunity Link" value="">
                                        </div>
                                        <div class="single-form">
                                            <button type="submit" name="add" class="btn btn-primary btn-hover-dark w-100">Save</button>
                                        </div>
                                    </form>
                                </div>
                                
                            <!-- Register & Login Form End -->
                            <?php
                            	echo $this->session->flashdata('msg');
                            	echo $this->session->flashdata('msgError');
                            ?>
                        </div>

                <!-- Register & Login Wrapper End -->

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
    <script src="<?php echo base_url('assets/js/plugins/jquery.nice-select.min.js'); ?>"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                tabsize: 2,
                height: 200
            });
        });
    </script>

</body>

</html>