<?php 

    class Contact extends CI_Controller{
        
        public function index(){
            $this->load->view('site/contact');
            
            $btn_submit = $this->input->post('submit');
            
            if(isset($btn_submit)){
                $fullname = $this->input->post('fullname');
                $email = $this->input->post('email');
                $subject = $this->input->post('subject');
                $message = $this->input->post('message');
                $time = time();
                $date = date('Y-m-d');
                
                $array = array(
                    'fullname' => $fullname,
                    'email' => $email,
                    'subject' => $subject,
                    'message' => $message,
                    'created_time' => $time,
                    'created_date' => $date
                );
                
                $add_contact = $this->Data_model->insert_contact($array);
                
                if($add_contact){ ?>
                    <script>
                        alert('Sent Successfully');
                        window.location.href="<?php echo site_url('contact'); ?>";
                    </script>
            <?php }else{ ?>
                    <script>
                        alert('Failed');
                        window.location.href="<?php echo site_url('contact'); ?>";
                    </script>
            <?php }
            }
        }
    }

?>