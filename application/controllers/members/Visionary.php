<?php 

    class Visionary extends CI_Controller{
        
        public function index(){
            $session_email = $this->session->userdata('uemail');
            
            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['visionary'] = $this->Data_model->display_visionary("Visionary");
            
            $this->load->view('site/members/visionary/view', $data);
        }
        
        public function detail($id){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);

            $data['detail'] = $this->Data_model->display_visionary_in_detail($id, "Visionary");
            $data['following'] = $this->Data_model->display_all_following_by_email($session_email);

            $this->load->view('site/members/visionary/detail', $data);
        }
    }

?>