<?php 

    class Shop extends CI_Controller{
        
        public function index(){
            $data['shop'] = $this->Data_model->display_shop_products();
            
            $this->load->view('site/shop/view', $data);
        }
        
        public function detail($id){
            $data['detail'] = $this->Data_model->display_shop_products_by_id($id);
            
            $this->load->view('site/shop/detail', $data);
        }
        
        public function checkout(){
          if(!$this->cart->contents()){
    		$data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
    	  }else{
    		$data['message'] = $this->session->flashdata('message');
    	  }
    		  
            $this->load->view('site/shop/checkout', $data);
        }
        
        // Shopping Cart 
        
        public function add_cart(){
          $insert_items = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('title'),
            'price' => $this->input->post('price'),
            'qty' => 1,
            'image' => $this->input->post('image'),
            'color' => $this->input->post('color'),
            'size' => $this->input->post('size')
          );
    
         $this->cart->insert($insert_items);
         redirect('shop/view_cart');
        }
        
        public function remove_cart($rowid){
          if($rowid=="all"){
             $this->cart->destroy();
          }else{
            $data = array(
              'rowid'   => $rowid,
              'qty'     => 0
            );
    
            $this->cart->update($data);
          }
          redirect('shop/view_cart');
        }
    
        public function clear(){
          $this->cart->destroy();
          redirect('shopping/view_cart');
        }
    
        public function update_cart(){
          foreach($_POST['cart'] as $id => $cart){
           $price = $cart['price'];
           $amount = $price * $cart['qty'];
           $this->Data_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
        }
    
          redirect('shop/view_cart');
        }
        
        public function stripe_post(){
            require_once('application/libraries/stripe-php/init.php');
            
            $session_email = $this->session->userdata('uemail');
            $session_fullname = $this->session->userdata('ufullname');

            if($cart = $this->cart->contents()):
    			foreach ($cart as $item):
			       $order_array = array(
			            'fullname' => $session_email,
                        'email' => $session_fullname,
                        'title' => $item['name'],
            			'price' => $item['price'],
                        'quantity' => $item['qty'],
                        'image' => $item['image'],
                        'color' => $item['color'],
                        'size' => $item['size'],
                        'status' => 'Pending',
                        'created_time' => time(),
                        'created_date'  => date('Y-m-j H:i:s')
                    );
                    
                $this->Data_model->insert_order_items($order_array);

                endforeach;
    		endif;
            
            $amount = $this->cart->total();
            $this->cart->destroy();
            
            \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
            \Stripe\Charge::create ([
                "amount" => $amount * 100,
                "currency" => "gbp",
                "source" => $this->input->post('stripeToken'),
                "description" => "Test payment from Elimu Shopping" 
            ]);
            ?>
            <script>
                alert('Payment made');
                window.location.href="<?php echo site_url('home'); ?>";
            </script>
            <?php
            //$this->Data_model->insert_order_items($order_array);
            //$this->session->set_flashdata('success', 'Payment made successfully.');

            //redirect('home');
        }
        
        public function view_cart(){
            if(!$this->cart->contents()){
    			$data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
    		  }else{
    			$data['message'] = $this->session->flashdata('message');
    		  }
            
            $this->load->view('site/shop/cart', $data);
        }
        
        // End of Shopping Cart 
    }

?>