<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shopping Cart || Elimu</title>
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

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li class="active" style="color: #dda20b;">Shopping Cart</li>
                    </ul>
                    <h2 class="title">Our <span style="color: #dda20b;">Shopping Cart</span></h2>
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

        <!-- Blog Start -->
        <div class="section section-padding mt-n10">
            <!-- Courses Category Wrapper Start  -->
            <div class="courses-category-wrapper">
                <div class="courses-search search-2">
                </div>

                <ul class="category-menu" style="margin-left: 120px;">
                    <li><a class="active" href="#">Cart total - £<?php echo $this->cart->total(); ?></a></li>
                    <li><a class="" href="<?php echo site_url('shop/checkout'); ?>">Checkout</a></li>
                </ul>
            </div>
            <!-- Courses Category Wrapper End  -->
            
            <div class="container">
                <div><?php echo $message; ?></div>
                <!-- Blog Wrapper Start -->
                <div class="blog-wrapper">
                    <div class="row">
                    <?php if ($cart = $this->cart->contents()): ?>
                      <?php $grand_total = 0; $i = 1; ?>
                      <?php foreach($cart as $item):
                          $check = array_slice(explode(',', $item['image']), 0, 1);
    
                          foreach($check as $image) {
                             $image;
                          }
                       ?>
                      <?php
                        echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
                        echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
                        echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
                        echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
                      ?>
                        <div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="<?php echo site_url('shop/detail/'.$item['id']); ?>"><img src="<?php echo base_url('uploads/shop/'.$item['image']); ?>" alt="Shop"></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="title"><a href="<?php echo site_url('shop/detail/'.$item['id']); ?>"><?php echo str_replace('-', ' ', $item['name']); ?> </a></h4>
                                    <h4>&pound;<?php echo $item['price']; ?></h4>
                                    <h6>Qty - <?php echo $item['qty']; ?></h6>
                                    <h6><a href="<?php echo site_url('shop/remove_cart/'.$item['rowid']); ?>">remove</a></h6>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    </div>
                </div>
                <!-- Blog Wrapper End -->

                <!-- Page Pagination End 
                <div class="page-pagination">
                    <ul class="pagination justify-content-center">
                        <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                    </ul>
                </div>
                <!-- Page Pagination End -->

            </div>
        </div>
        <!-- Blog End -->

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