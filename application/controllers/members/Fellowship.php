<?php 
    
    class Fellowship extends CI_Controller{
        
        public function index(){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['fellowship'] = $this->Data_model->display_courses_in_fellowship($title, 'Fellowship');
            
            $this->load->view('site/members/fellowship', $data);
        }
    }

?>