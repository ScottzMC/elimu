<?php 
    
    class Event extends CI_Controller{
        
        public function index(){
            $data['event'] = $this->Data_model->display_event();
            $data['testimonial'] = $this->Data_model->display_testimonial();
            
            $this->load->view('site/event', $data);
        }
    }

?>