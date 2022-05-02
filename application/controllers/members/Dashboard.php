<?php 

    class Dashboard extends CI_Controller{
        
        public function index(){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['launchpad'] = $this->Data_model->display_courses_in_dashboard('Launchpad');
            $data['fellowship'] = $this->Data_model->display_courses_in_dashboard('Fellowship');

            $this->load->view('site/members/dashboard', $data);
        }
    }

?>