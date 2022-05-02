<?php foreach($profile as $prof){} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit <?php echo $prof->fullname; ?> Profile || Elimu</title>
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
                    
                    <!-- Register & Login Images Start -->
                            <div class="register-login-images">
                                <div class="images">
                                    <img height="300" width="300" src="<?php echo base_url('uploads/profile/'.$prof->image); ?>" alt="Profile">
                                </div>
                            </div>
                            <br>
                            <!-- Register & Login Images End -->
                    
                    <!-- Register & Login Wrapper Start -->
                        
                        <div class="col-lg-6" style="margin-left: 30px;">

                            <!-- Register & Login Form Start -->
                                <h3 class="title">User <span>Membership</span></h3>

                                <div class="form-wrapper">
                                    <form action="<?php echo base_url('members/profile/edit/'.$prof->id); ?>" method="POST">
                                        <div class="single-form">
                                            <label>
                                                <h5>Full Name</h5>
                                            </label>
                                            <input type="text" name="fullname" placeholder="Full Name" value="<?php echo $prof->fullname; ?>">
                                        </div>
                                        <div class="single-form">
                                            <label>
                                                <h5>Occupation</h5>
                                            </label>
                                            <input type="text" name="occupation" placeholder="Occupation" value="<?php echo $prof->occupation; ?>">
                                        </div>
                                        <div class="single-form">
                                            <label>
                                                <h5>Career Interest</h5>
                                            </label>
                                            <select class="form-control" name="career_interest">
                                                <option>Select</option>
                                                <?php if(!empty($career_interest)){ foreach($career_interest as $career){ ?>
                                                <option value="<?php echo $career->title; ?>"><?php echo $career->title; ?></option>
                                                <?php } } ?>
                                            </select>
                                        </div>
                                        <div class="single-form">
                                            <label>
                                                <h5>Personal Interest</h5>
                                            </label>
                                            <input type="text" name="personal_interest" placeholder="Personal Interest" value="<?php echo $prof->personal_interest; ?>">
                                        </div>
                                        <div class="single-form">
                                            <label>
                                                <h5>Why are you signing up?</h5>
                                            </label>
                                            <textarea name="signing_up" rows="5" cols="5" placeholder="Why are you signing up?"><?php echo $prof->signing_up; ?></textarea>
                                        </div>
                                        <br>
                                        <label>
                                            <h5>What are you hoping to get?</h5>
                                        </label>
                                        <br>
                                        <?php if($prof->membership == "Role Model"){ ?>
                                        <input type="checkbox" name="hoping_to_get[]" value="Become an ambassador"> Become an ambassador
                                        <br>
                                        <input type="checkbox" name="hoping_to_get[]" value="Deliver a Workshop"> Deliver a Workshop
                                        <br>
                                        <input type="checkbox" name="hoping_to_get[]" value="Mentor"> Mentor
                                        <br>
                                        <input type="checkbox" name="hoping_to_get[]" value="Share your skills"> Share your skills
                                        <br>
                                        <?php }else if($prof->membership == "Visionary"){ ?>
                                        <input type="checkbox" name="hoping_to_get[]" value="Attend events"> Attend events
                                        <br>
                                        <input type="checkbox" name="hoping_to_get[]" value="Become a fellow"> Become a fellow
                                        <br>
                                        <input type="checkbox" name="hoping_to_get[]" value="Gain entrepreneurship skills"> Gain entrepreneurship skills
                                        <br>
                                        <input type="checkbox" name="hoping_to_get[]" value="Mentor"> Mentor
                                        <br>
                                        <?php } ?>
                                        <div class="single-form">
                                            <label>
                                                <h5>What can you bring to the community?</h5>
                                            </label>
                                            <textarea name="bring_to_community" rows="5" cols="5" placeholder="What can you bring to the community?"><?php echo $prof->bring_to_community; ?></textarea>
                                        </div>
                                        <br>
                                        <div class="single-form">
                                            <label>
                                                <h5>Link to social media</h5>
                                            </label>
                                            <input type="text" name="social_url" placeholder="Link to social media" value="<?php echo $prof->social_url; ?>">
                                        </div>
                                        <div class="single-form">
                                            <button type="submit" name="update" class="btn btn-primary btn-hover-dark w-100">Save</button>
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="form-wrapper">
                                    <form action="<?php echo base_url('members/profile/update_image/'.$prof->id); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="">
                                            <br>
                                            <label>
                                                <h5>Photo</h5>
                                            </label>
                                            <br>
                                            <input type="file" name="fileToUpload[]">
                                        </div>
                                        <div class="single-form">
                                            <button type="submit" name="update_image" class="btn btn-primary btn-hover-dark w-100">Save</button>
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

</body>

</html>