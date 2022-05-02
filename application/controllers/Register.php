<?php 
    
    class Register extends CI_Controller{
        
        public function index(){
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
          
            $form_valid = $this->form_validation->run();
            $submit_btn = $this->input->post('register');
            
            if($form_valid == FALSE){
                $this->load->view('site/account/register');
            }
            
            if(isset($submit_btn)){
                $fullname = $this->input->post('fullname');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $hashed_password = $this->bcrypt->hash_password($password);
                $shuffle = "ABCDEFGHZXCQWE";
                $unique = rand(000, 999);
                $code = $shuffle.$unique;
                $role = "User";
                $image = "original.jpg";
                $members = $this->input->post('membership');
                $time = time();
                $date = date('Y-m-d H:i:s');
                
                $slug = str_replace(' ', '-', strtolower($fullname)); 
                $alias = str_replace(' ', '_', strtolower($members));
                
                /*$subject = "Activate your Account";
                  $body = "
                    Welcome to FastFood and thank you for registering an account. Upon clicking the link, your account would be activated,
                    Your email is - $email
                    please click the link to activate the account - https://scottnnaghor.com/fastfood/account/activate_user/$code";
                  $time = time();
                  $date = date('Y-m-d H:i:s');
        
                  $config = Array(
                 'protocol' => 'smtp',
                 'smtp_host' => 'smtp.scottnnaghor.com',
                 'smtp_port' => 25,
                 'smtp_user' => 'admin@scottnnaghor.com', // change it to account email
                 'smtp_pass' => 'TigerPhenix100', // change it to account email password
                 'mailtype' => 'html',
                 'charset' => 'iso-8859-1',
                 'wordwrap' => TRUE
                 );
        
                 $this->load->library('email', $config);
                 //$this->load->library('encrypt');
                 $this->email->from('admin@scottnnaghor.com', "FastFood Team");
                 $this->email->to("$email");
                 //$this->email->cc("testcc@domainname.com");
                 $this->email->subject("$subject");
                 $this->email->message("$body");*/
                
                $register_array = array(
                    'slug' => $slug,
                    'fullname' => $fullname,
                    'email' => $email,
                    'password' => $hashed_password,
                    'role' => $role,
                    'status' => "Activated",
                    'image' => $image,
                    'membership' => $members,
                    'alias' => $alias,
                    'created_time' => $time,
                    'created_date' => $date
                );
                
                $add_user = $this->Data_model->create_user($register_array);

                if($add_user){ ?>
                    <script>
                        alert('Account has been created successfully.');
                        window.location.href="<?php echo site_url('login'); ?>";
                    </script>
          <?php }else{ ?>
                   <script>
                        alert('Account has not been created');
                    </script> 
          <?php }
            }
        }
    }

?>