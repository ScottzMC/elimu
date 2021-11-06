<?php 

    class Opportunity extends CI_Controller{
        
        public function index(){
            $this->load->view('site/opportunity_spotlight');
        }
    }

?>