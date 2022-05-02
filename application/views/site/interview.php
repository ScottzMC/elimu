<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Interviews || Elimu</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/elimu-logo-3.png'); ?>">

    <!-- CSS
	============================================ -->

    <?php $this->load->view('menu/main/style'); ?>

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
                        <li class="active" style="color: #dda20b;">Interviews</li>
                    </ul>
                    <h2 class="title">View our <span style="color: #dda20b;">Interviews</span></h2>
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

            <!--<img class="shape-3" src="assets/images/shape/shape-24.png" alt="Shape">

            <img class="shape-author" src="assets/images/author/author-11.jpg" alt="Shape">-->

        </div>
        <!-- Page Banner End -->

        <!-- Courses Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- Courses Wrapper Start  -->
                <div class="courses-wrapper-02">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="#"><img src="<?php echo base_url('assets/images/courses/courses-01.jpg'); ?>" alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="author">
                                            <div class="author-thumb">
                                                <a href="#"><img src="<?php echo base_url('assets/images/author/author-01.jpg'); ?>" alt="Author"></a>
                                            </div>
                                            <div class="author-name">
                                                <a class="name" href="#">Jason Williams</a>
                                                <a class="name-2" href="#">Ohula Malsh</a>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="title"><a href="#">Data Science and Machine Learning</a></h4>
                                </div>
                            </div>
                            <!-- Single Courses End -->
                            
                        </div>
                        
                    </div>
                </div>
                <!-- Courses Wrapper End  -->

            </div>
        </div>
        <!-- Courses End -->

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