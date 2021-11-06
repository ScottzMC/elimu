<?php 

    class Mentoring extends CI_Controller{
        
        public function index(){
            $data['mentoring'] = $this->Data_model->display_mentoring();
            
            $this->load->view('site/mentoring', $data);
        }
    }

?>