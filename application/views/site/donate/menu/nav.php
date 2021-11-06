    <!-- Header Section Start -->
        <div class="header-section">

            <!-- Header Top Start -->
            <div class="header-top d-none d-lg-block">
                <div class="container">

                    <!-- Header Top Wrapper Start -->
                    <div class="header-top-wrapper">

                        <!-- Header Top Left Start -->
                        <div class="header-top-left">
                            <p>Know more about us <a href="#">Elimu.</a></p>
                        </div>
                        <!-- Header Top Left End -->

                        <!-- Header Top Medal Start -->
                        <div class="header-top-medal">
                            <div class="top-info">
                                <!--<p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>-->
                                <p><i class="flaticon-email"></i> <a href="mailto:hello@elimu.co.uk">hello@elimu.co.uk</a></p>
                            </div>
                        </div>
                        <!-- Header Top Medal End -->

                        <!-- Header Top Right Start -->
                        <div class="header-top-right">
                            <ul class="social">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Header Top Right End -->

                    </div>
                    <!-- Header Top Wrapper End -->

                </div>
            </div>
            <!-- Header Top End -->

            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">

                    <!-- Header Main Start -->
                    <div class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="<?php echo site_url('home'); ?>"><img height="70" width="120" src="<?php echo base_url('assets/images/elimu.png'); ?>" alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="header-menu d-none d-lg-block">
                            <ul class="nav-menu">
                                <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                                <li><a href="<?php echo site_url('covid'); ?>">Covid-19</a></li>
                                <li><a href="<?php echo site_url('elimu_pillars'); ?>">Elimu Pillars</a></li>
                                <li><a href="<?php echo site_url('shop'); ?>">Shop Elimu</a></li>
                                <li><a href="<?php echo site_url('shop/view_cart'); ?>">Cart (<?php echo $this->cart->total_items(); ?>)</a></li>
                            </ul>

                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Sing In & Up Start -->
                        <div class="header-sign-in-up d-none d-lg-block">
                            <ul>
                            <?php if($this->session->userdata('urole') == 'User'){ ?>
                                <li><a class="sign-in" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                            <?php }else if($this->session->userdata('urole') == 'Admin'){ ?>
                                <li><a href="<?php echo site_url('admin/course'); ?>">Admin</a></li>
                                <li><a class="sign-in" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                            <?php }else{ ?>
                                <li><a class="sign-in" href="<?php echo site_url('login'); ?>">Login </a></li>
                                <li><a class="sign-up" href="<?php echo site_url('register'); ?>">Register </a></li>
                            <?php } ?>
                            </ul>
                        </div>
                        <!-- Header Sing In & Up End -->

                        <!-- Header Mobile Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <a class="menu-toggle" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <!-- Header Mobile Toggle End -->

                    </div>
                    <!-- Header Main End -->

                </div>
            </div>
            <!-- Header Main End -->

        </div>
        <!-- Header Section End -->
        
         <!-- Mobile Menu Start -->
        <div class="mobile-menu">

            <!-- Menu Close Start -->
            <a class="menu-close" href="javascript:void(0)">
                <i class="icofont-close-line"></i>
            </a>
            <!-- Menu Close End -->

            <!-- Mobile Top Medal Start -->
            <div class="mobile-top">
                <!--<p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>-->
                <p><i class="flaticon-email"></i> <a href="mailto:address@gmail.com">hello@elimu.co.uk</a></p>
            </div>
            <!-- Mobile Top Medal End -->

            <!-- Mobile Sing In & Up Start -->
            <div class="mobile-sign-in-up">
                <ul>
                <?php if($this->session->userdata('urole') == 'User'){ ?>
                    <li><a class="sign-in" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                <?php }else if($this->session->userdata('urole') == 'Admin'){ ?>
                    <li><a href="<?php echo site_url('admin/course'); ?>">Admin</a></li>
                    <li><a class="sign-in" href="<?php echo site_url('logout'); ?>">Logout </a></li>
                <?php }else{ ?>
                    <li><a class="sign-in" href="<?php echo site_url('login'); ?>">Login </a></li>
                    <li><a class="sign-up" href="<?php echo site_url('register'); ?>">Register </a></li>
                <?php } ?>
                </ul>
            </div>
            <!-- Mobile Sing In & Up End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('about'); ?>">About</a></li>
                    <li><a href="<?php echo site_url('covid'); ?>">Covid-19 Response</a></li>
                    <li><a href="<?php echo site_url('elimu_pillars'); ?>">Elimu Pillars</a></li>
                    <li><a href="<?php echo site_url('shop'); ?>">Shop Elimu</a></li>
                    <li><a href="<?php echo site_url('shop/view_cart'); ?>">Cart (<?php echo $this->cart->total_items(); ?>)</a></li>
                </ul>

            </div>
            <!-- Mobile Menu End -->

            <!-- Mobile Menu End -->
            <div class="mobile-social">
                <ul class="social">
                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                </ul>
            </div>
            <!-- Mobile Menu End -->

        </div>
        <!-- Mobile Menu End -->
