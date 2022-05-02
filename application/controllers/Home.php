<?php 

    class Home extends CI_Controller{
        
        public function index(){
            $data['home'] = $this->Data_model->display_home();
            $data['home_supporter'] = $this->Data_model->display_home_supporter();
            $data['testimonial'] = $this->Data_model->display_testimonial();
            
            $this->load->view('site/home', $data);
        }
    }

?>