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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/elimu-logo-3.png'); ?>">

    <!-- CSS
	============================================ -->

    <?php $this->load->view('menu/main/style'); ?>

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

        <?php $this->load->view('menu/main/nav'); ?>

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Page Banner Start -->
        <div style="height: 400px;" class="section page-banner">

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
                        <div class="container">
                            <div class="blog-wrapper">
                                <div class="row">
                                    <div class="panel-heading display-table">
                                        <div class="row display-tr">
                                            <h3 class="panel-title display-td" style="width: auto;">Shopping Payment      </h3>
                                        </div>                    
                                    </div>
                                    
                                    <div class="form-wrapper">
                                        <form action="<?php echo base_url('shop/stripe_post'); ?>" method="post" 
                                class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class='control-label'>Name on Card</label> 
                                                <input class='form-control' size='4' type='text' placeholder="Name on Card">
                                            </div>
                                            <!-- Single Form End -->
                                            
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class='control-label'>Card Number</label> 
                                                <input autocomplete='off' class='form-control card-number' size='20' type='text' placeholder="Card Number">
                                            </div>
                                            <!-- Single Form End -->
                                            
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class='control-label'>CVC</label> 
                                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' placeholder="CVC">
                                            </div>
                                            <!-- Single Form End -->
                                            
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class='control-label'>Expiration Month</label> 
                                                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                            </div>
                                            <!-- Single Form End -->
                                            
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class='control-label'>Expiration Year</label> 
                                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                            </div>
                                            <!-- Single Form End -->
                                            
                                            <!-- Single Form Start -->
                                            <div style="padding-bottom: 20px;" class="single-form">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (&pound;<?php echo $this->cart->total(); ?>)</button>
                                            </div>
                                            <!-- Single Form End -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
        <!-- About End -->

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