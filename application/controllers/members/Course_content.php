<?php 
    
    class Course_content extends CI_Controller{
        
        public function index(){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);
            
            $this->load->view('site/members/course_content', $data);
        }
    }

?>