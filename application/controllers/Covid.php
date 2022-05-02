<?php 
    
    class Covid extends CI_Controller{
        
        public function index(){
            $data['covid'] = $this->Data_model->display_covid19();
            $data['testimonial'] = $this->Data_model->display_testimonial();
            
            $this->load->view('site/covid_response', $data);
        }
    }

?>