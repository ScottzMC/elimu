<?php 

    class About extends CI_Controller{
        
        public function index(){
            $this->load->view('site/about');
        }
        
        public function lynette(){
            $this->load->view('site/lynette');
        }
        
        public function annalisa(){
            $this->load->view('site/annalisa');
        }
    }

?>