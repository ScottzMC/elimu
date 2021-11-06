<?php 
    
    class Covid extends CI_Controller{
        
        public function index(){
            $this->load->view('site/covid_response');
        }
    }

?>