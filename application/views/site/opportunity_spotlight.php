<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Opportunity Spotlight || Elimu </title>
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
                        <li class="active" style="color: #dda20b;">Opportunity Spotlight</li>
                    </ul>
                    <h2 class="title">Opportunities are widely shared across our community.</h2>
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
                    <?php if(!empty($opportunity)){ foreach($opportunity as $opp){ ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- About Images Start -->
                            <div class="about-images">
                                <div class="images">
                                    <img src="<?php echo base_url('uploads/opportunity/'.$opp->image); ?>" alt="<?php echo $opp->title; ?>">
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
                                <h2 class="main-title"><?php echo $opp->title; ?></h2>
                                <p><?php echo $opp->body; ?></p>
                            </div>
                            <!-- About Content End -->

                        </div>
                    </div>
                    <?php } } ?>
                </div>
            </div>

            <br><br>

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