<?php 

    class Policy extends CI_Controller{
        
        public function index(){
            $data['policy'] = $this->Data_model->display_policy();
            
            $this->load->view('site/privacy_policy', $data);
        }
    }

?>