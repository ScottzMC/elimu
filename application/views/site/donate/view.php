<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Donate || Elimu </title>
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
                        <li class="active" style="color: #dda20b;">Donate</li>
                    </ul>
                    <h2 class="title">Donate <span style="color: #dda20b;">Elimu.</span></h2>
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
                                <h3 class="title">Make a <span>Donation</span></h3>

                                <div class="form-wrapper">
                                    <form action="<?php echo base_url('donate'); ?>" method="POST">
                                        <!--<div class="single-form">
                                            <label><h4>Your Email</h4></label>
                                            <input type="email" name="email" placeholder="Email">
                                        </div>-->
                                        <div class="single-form">
                                            <label><h4>Your Contribution</h4></label>
                                            <br>
                                            <input type="radio" name="amount" value="10">
                                            <label>£10.00</label>
                                            <br>
                                            <input type="radio" name="amount" value="25">
                                            <label>£25.00</label>
                                            <br>
                                            <input type="radio" name="amount" value="50">
                                            <label>£50.00</label>
                                            <br>
                                            <input type="radio" name="amount" value="100">
                                            <label>£100.00</label>
                                            <br>
                                            <input type="radio" name="amount" value="250">
                                            <label>£250.00</label>
                                            <br>
                                            <input type="radio" name="amount" value="450">
                                            <label>£450.00</label>
                                            <br>
                                            <!--<input type="text" name="amount" value="Other £ amount">-->
                                        </div>
                                        <div class="single-form">
                                            <button type="submit" name="donate" class="btn btn-primary btn-hover-dark w-100">Pay</button>
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
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“This experience is most definitely invaluable. 
                                    Great insight again and I would definitely encourage you to keep 
                                    going with this programme.”</p>
                                    <h4 class="name">Lewis, 28</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->

                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“Thanks once again for this opportunity. I'm glad I was chosen for this mock interview. 
                                    Looking forward to applying the feedback received for future job interviews..”</p>
                                    <h4 class="name">Priscilla, 24</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->

                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“I'm surprised that I get the opportunity to make these connections.”</p>
                                    <h4 class="name">Oluchi, 18</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                            
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“I'm excited to be connected with someone who can relate to me as a young, Black man.”</p>
                                    <h4 class="name">Abeselom, 19</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                            
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“It was really informative and I really took in what was spoken about. 
                                    Thank you honestly for staying in touch and continuing to help me by providing 
                                    me with another opportunity that will benefit me.”</p>
                                    <h4 class="name">Kadija, 16</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                            
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“I'm grateful because I always apply for these opportunities and no one gets back to me.”</p>
                                    <h4 class="name">Cindy-Ann, 17</h4>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                            
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial swiper-slide">
                                <div class="testimonial-author">
                                    <div class="author-thumb">
                                        <img src="<?php echo base_url('assets/images/author/original.jpg'); ?>" alt="Author">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <br><br>
                                </div>
                                
                                <div class="testimonial-content">
                                    <p>“I never thought my mentor would remember to send me such opportunities, it means a lot to me.”</p>
                                    <h4 class="name">Tahou, 20</h4>
                                </div>
                            </div>
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