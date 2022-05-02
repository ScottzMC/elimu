<?php 
    
    class Launchpad extends CI_Controller{
        
        public function index($id){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['launchpad'] = $this->Data_model->display_courses_in_launchpad($id);

            $this->load->view('site/members/launchpad', $data);
        }
    }

?>