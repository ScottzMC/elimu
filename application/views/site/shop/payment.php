<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shopping Checkout || Elimu</title>
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

    <style type="text/css">
    .panel-title{
        display: inline;
        font-weight: bold;
    }
    
    .display-table{
        display: table;
    }
    
    .display-tr{
        display: table-row;
    }

    .display-td {
        display: table-cell;
        vertical-align: middle;
        width: 61%;
    }

    </style>

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
                    <h2 class="title">Our <span style="color: #dda20b;">Final Payment</span></h2>
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
        
        <!-- About Start -->
        <div class="section">

            <div class="section-padding-02 mt-n10">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading display-table">
                            <div class="row display-tr">
                                <h3 class="panel-title display-td" style="width: auto;">Payment Details</h3>
                            </div>                    
                        </div>
        
                        <div class="panel-body">
                            <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p><?php echo $this->session->flashdata('success'); ?></p>
                            </div>
                            <?php } ?>
        
                            <form role="form" action="<?php echo base_url('shop/stripe_post'); ?>" method="post" 
                                class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form">
                                <?php $session_email = $this->session->userdata('uemail'); ?>

                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group required'>
                                        <label class='control-label'>Name on Card</label> 
                                        <input class='form-control' size='4' type='text'>
                                    </div>
                                </div>
        
                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group card required'>
                                        <label class='control-label'>Card Number</label> 
                                        <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                    </div>
                                </div>
        
                                <div class='form-row row'>
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                        <label class='control-label'>CVC</label> 
                                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                    </div>
        
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Month</label> 
                                        <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                    </div>
        
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Year</label> 
                                        <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                    </div>
                                </div>
                                
                                <div class='form-row row'>
                                    <div class='col-md-12 error form-group hide'>
                                        <div class='alert-danger alert'>Please correct the errors and try again.</div>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (&pound;<?php echo $this->cart->total(); ?>)</button>
                                    </div>
                                </div>
                            </form>
                         </div>
                       </div>        
                </div>
            </div>

        </div>
        <!-- About End -->

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
    
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
    <script type="text/javascript">
    $(function(){
        var $form = $(".require-validation");
        
        $('form.require-validation').bind('submit', function(e){
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 
                            'input[type=password]',
                            'input[type=text]', 
                            'input[type=file]',
                             'textarea'].join(', '),
    
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
    
        $inputs.each(function(i, el){
          var $input = $(el);
          
          if($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
    
        if(!$form.data('cc-on-file')){
            e.preventDefault();
            
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
      });
    
      function stripeResponseHandler(status, response){
        if(response.error){
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        }else{
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    
       }
    
    });
    
    </script>

</body>

</html>