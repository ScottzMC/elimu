<?php 

    class Opportunity extends CI_Controller{
        
        public function index(){
            $data['opportunity'] = $this->Data_model->display_opportunity();
            $data['testimonial'] = $this->Data_model->display_testimonial();
            
            $this->load->view('site/opportunity_spotlight', $data);
        }
    }

?>