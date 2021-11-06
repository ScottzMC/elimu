<?php 

    class Donate extends CI_Controller{
        
        public function index(){
            $btn_submit = $this->input->post('donate');
            
            $email = $this->session->userdata('uemail');
            $amount = $this->input->post('amount');
            
            if(isset($btn_submit)){
                $donation = $this->Data_model->make_a_donation($amount, $email);
                
                if($donation){ ?>
                    <script>
                        //alert('Donation made');
                        window.location.href="<?php echo site_url('donate/payment'); ?>";
                    </script>
            <?php }else{ ?>
                    <script>
                        alert('Donation Failed');
                        window.location.href="<?php echo site_url('donate'); ?>";
                    </script>
            <?php }
            }
            
            $this->load->view('site/donate/view');
        }
        
        public function payment(){
            $session_email = $this->session->userdata('uemail');
            
            $data['donate'] = $this->Data_model->display_donation_info($session_email);
            
            $this->load->view('site/donate/payment', $data);
        }
        
        public function stripe_post(){
            require_once('application/libraries/stripe-php/init.php');
            
            $amount = $this->input->post('amount');
            $session_email = $this->session->userdata('uemail');
            
            \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
            \Stripe\Charge::create ([
                "amount" => $amount * 100,
                "currency" => "gbp",
                "source" => $this->input->post('stripeToken'),
                "description" => "Test donation from Elimu" 
            ]);
            
            $this->Data_model->remove_donation($session_email); ?>
            <script>
                alert('Donation made');
                window.location.href="<?php echo site_url('home'); ?>";
            </script>
    <?php }
    }

?>