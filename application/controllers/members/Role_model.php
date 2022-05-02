<?php 

    class Role_model extends CI_Controller{
        
        public function index(){
            $session_email = $this->session->userdata('uemail');
            
            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['role_model'] = $this->Data_model->display_role_model("Role Model");
            
            $this->load->view('site/members/role_model/view', $data);
        }
        
        public function detail($id){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['detail'] = $this->Data_model->display_role_model_in_detail($id, "Role Model");
            $data['following'] = $this->Data_model->display_all_following_by_email($session_email);

            $this->load->view('site/members/role_model/detail', $data);
        }
    }

?>