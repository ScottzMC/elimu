    <!-- Footer Start  -->
        <div class="section footer-section">

            <!-- Footer Widget Section Start -->
            <div class="footer-widget-section">

                <!--<img class="shape-1 animation-down" src="assets/images/shape/shape-21.png" alt="Shape">-->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="<?php echo site_url('home'); ?>"><img height="120" width="220" src="<?php echo base_url('assets/images/elimu.png'); ?>" alt="Logo"></a>
                                </div>

                                <div class="widget-address">
                                    <p>Kemp House 152-160 City Road, London, EC1V 2NX.</p>
                                </div>

                                <ul class="widget-info">
                                    <li>
                                        <p> <i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a> </p>
                                    </li>
                                    <li>
                                        <p> <i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a> </p>
                                    </li>
                                </ul>

                                <ul class="widget-social">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <div class="col-lg-6 order-md-3 order-lg-2">

                            <!-- Footer Widget Link Start -->
                            <div class="footer-widget-link">

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Public Links</h4>

                                    <ul class="widget-link">
                                        <li><a href="<?php echo site_url('opportunity'); ?>">Opportunity Spotlight</a></li>
                                        <li><a href="<?php echo site_url('shop'); ?>">Shop Elimu</a></li>
                                        <li><a href="<?php echo site_url('support_elimu'); ?>">Support Elimu</a></li>
                                        <li><a href="<?php echo site_url('event'); ?>">Events</a></li>
                                        <!--<li><a href="<?php echo site_url('interview'); ?>">Interviews</a></li>-->
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Quick Links</h4>

                                    <ul class="widget-link">
                                        <?php if($this->session->userdata('urole') == 'User'){ ?>
                                        <li><a href="<?php echo site_url('members/dashboard'); ?>">Members only area</a></li>
                                        <?php } ?>
                                        <li><a href="<?php echo site_url('policy'); ?>">Privacy Policy</a></li>
                                        <li><a href="<?php echo site_url('contact'); ?>">Contact Us</a></li>
                                        <li><a href="<?php echo site_url('covid'); ?>">Covid Response</a></li>
                                        <li><a href="<?php echo site_url('assessment'); ?>">Assessment Centre</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                            </div>
                            <!-- Footer Widget Link End -->

                        </div>
                        <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Subscribe</h4>

                                <div class="widget-subscribe">
                                    <p>Lorem Ipsum has been them an industry printer took a galley make book.</p>

                                    <!--<div class="widget-form">
                                        <form action="#">
                                            <input type="text" placeholder="Email here">
                                            <button class="btn btn-primary btn-hover-dark">Subscribe Now</button>
                                        </form>
                                    </div>-->
                                </div>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                    </div>
                </div>

            </div>
            <!-- Footer Widget Section End -->

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="container">

                    <!-- Footer Copyright Start -->
                    <div class="copyright-wrapper">
                        <div class="copyright-link">
                            <a href="<?php echo site_url('assessment'); ?>">Assessment Centre</a>
                            <a href="<?php echo site_url('covid'); ?>">Covid Response</a>
                            <a href="<?php echo site_url('policy'); ?>">Privacy Policy</a>
                        </div>
                        <div class="copyright-text">
                            <p>&copy; <?php echo date('Y'); ?> <span> Elimu </span></p>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->

                </div>
            </div>
            <!-- Footer Copyright End -->

        </div>
        <!-- Footer End -->