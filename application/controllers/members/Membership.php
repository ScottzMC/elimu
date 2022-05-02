<?php 

    class Membership extends CI_Controller{
        
        public function index($membership){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['membership'] = $this->Data_model->display_by_membership($membership);
            
            $this->load->view('site/members/membership/view', $data);
        }
        
        public function detail($id){
            $session_email = $this->session->userdata('uemail');

            //$data['profile'] = $this->Data_model->display_profile($session_email);
            $data['detail'] = $this->Data_model->display_by_membership_in_detail($id);
            
            $data['following'] = $this->Data_model->display_all_following_by_email($session_email);
            
            $this->load->view('site/members/membership/detail', $data);
        }
    }

?>