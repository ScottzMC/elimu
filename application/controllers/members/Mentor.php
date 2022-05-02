<?php 

    class Mentor extends CI_Controller{
        
        public function index(){
            $session_email = $this->session->userdata('uemail');
            
            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['mentor'] = $this->Data_model->display_all_mentor();
            
            $this->load->view('site/members/mentor/view', $data);
        }
        
        public function detail($id){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);

            $data['detail'] = $this->Data_model->display_all_mentor_by_id($id);

            $this->load->view('site/members/mentor/detail', $data);
        }
    }

?>