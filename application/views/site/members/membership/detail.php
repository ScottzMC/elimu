<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php if(!empty($detail)){ foreach($detail as $det){} ?>
    <title>Member <?php echo $det->fullname; ?> || Elimu</title>
    <?php } ?>
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
                        <img height="60" width="80" src="<?php echo base_url('uploads/profile/'.$det->image); ?>" alt="Author">
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

            <!-- Page Content Wrapper Start -->
            <div class="page-content-wrapper py-0">
              <?php $this->load->view('menu/member/nav'); ?>
                
              <div class="main-content-wrapper pb-0">
                <div class="container-fluid custom-container">
                    
                    <!-- Page Banner Start -->
                    <div class="page-banner-content">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('members/dashboard'); ?>">Members</a></li>
                            <li><a href="<?php echo site_url('members/membership/'.$det->alias); ?>"><?php echo $det->membership; ?></a></li>
                            <li class="active"><a href="#"><?php echo $det->fullname; ?></a></li>
                        </ul>
                    </div>
                    <br>
                    <!-- Page Banner End -->

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
                        <h3 class="title"><?php echo $det->fullname; ?> Profile</h3>
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
                                            <img src="<?php echo base_url('uploads/profile/'.$det->image); ?>" alt="Profile">
                                        </a>
                                    </div>

                                    <div class="content-title">
                                        <h3 class="title">
                                            <a href="#">
                                                Full Name - <?php echo $det->fullname; ?>
                                            </a>
                                        </h3>
                                        <h3 class="title">
                                            <a href="#">
                                                Occupation - <?php echo $det->occupation; ?>
                                            </a>
                                        </h3>
                                    </div>
                                    
                                    <div class="content-title">
                                        <h3 class="title">
                                            <a href="#">
                                                Personal Interest - <?php echo $det->personal_interest; ?>
                                            </a>
                                        </h3>
                                        <h3 class="title">
                                            <a href="#">
                                                Career Interest - <?php echo $det->career_interest; ?>
                                            </a>
                                        </h3>
                                    </div>
                                    
                                    <div class="content-title">
                                        <h3 class="title">
                                            <a href="#">
                                                Membership - <?php echo $det->membership; ?>
                                            </a>
                                        </h3>
                                        <h3 class="title">
                                            <?php if(!empty($det->social_url)){ ?>
                                            <a href="#">
                                                Social Link - <a href="<?php echo $det->social_url; ?>">Click</a>
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
                                            Description
                                            <p>
                                                <?php echo $det->description; ?>
                                            </p>
                                        </h3>
                                    </div>
                                </div>
                                <!-- Courses Item End -->
                                
                                 <!-- Courses Item Start -->
                                <div class="courses-item">
                                    <div class="content-title">
                                        <h3 class="title">
                                            Why are you signing up?
                                            <p>
                                                <?php echo $det->signing_up; ?>
                                            </p>
                                        </h3>
                                    </div>
                                </div>
                                <!-- Courses Item End -->
                                
                                <!-- Courses Item Start -->
                                <div class="courses-item">
                                    <div class="content-title">
                                        <h3 class="title">
                                            What can you bring to the community?
                                            <p>
                                                <?php echo $det->bring_to_community; ?>
                                            </p>
                                        </h3>
                                    </div>
                                    
                                </div>
                                <!-- Courses Item End -->
                                
                                <!-- Courses Item Start -->
                                <div class="courses-item">
                                    <div class="content-title">
                                        <h3 class="title">
                                            What are you hoping to get?
                                            <?php 
                                                $check = explode(',', $det->hoping_to_get);
                                                foreach($check as $hope_get){ ?>
                                                <p>
                                                    <?php echo $hope_get; ?>
                                                </p>
                                            <?php } ?>
                                        </h3>
                                    </div>
                                </div>
                                <br><br>
                                <!-- Courses Item End -->
                                <?php 
                                $session_email = $this->session->userdata('uemail');
                                $following = $this->db->query("SELECT email, following_email FROM following WHERE following_email = '$session_email' ")->result(); 
                                foreach($following as $follow){}
                                ?>
                                <?php if($det->email == $follow->email){ ?>
                                <form action="<?php echo base_url('members/unfollow_member/'.$det->id); ?>" method="post">
                                    <input type="hidden" name="slug" value="<?php echo $det->slug; ?>">
                                    <input type="hidden" name="fullname" value="<?php echo $det->fullname; ?>">
                                    <input type="hidden" name="email" value="<?php echo $det->email; ?>">
                                    <input type="hidden" name="image" value="<?php echo $det->image; ?>">
                                    <button type="submit" class="btn btn-primary btn-hover-dark w-100">Unfollow</button>
                                </form>
                                <?php }else if($det->email != $follow->email){ ?>
                                <form action="<?php echo base_url('members/follow_member/'.$det->id); ?>" method="post">
                                    <input type="hidden" name="slug" value="<?php echo $det->slug; ?>">
                                    <input type="hidden" name="fullname" value="<?php echo $det->fullname; ?>">
                                    <input type="hidden" name="email" value="<?php echo $det->email; ?>">
                                    <input type="hidden" name="image" value="<?php echo $det->image; ?>">
                                    <button type="submit" class="btn btn-primary btn-hover-dark w-100">Follow</button>
                                </form>
                                <?php }else{ ?>
                                <form action="<?php echo base_url('members/follow_member/'.$det->id); ?>" method="post">
                                    <input type="hidden" name="slug" value="<?php echo $det->slug; ?>">
                                    <input type="hidden" name="fullname" value="<?php echo $det->fullname; ?>">
                                    <input type="hidden" name="email" value="<?php echo $det->email; ?>">
                                    <input type="hidden" name="image" value="<?php echo $det->image; ?>">
                                    <button type="submit" class="btn btn-primary btn-hover-dark w-100">Follow</button>
                                </form>
                                <?php } ?>
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