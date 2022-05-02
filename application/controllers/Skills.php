<?php 
    
    class Skills extends CI_Controller{
        
        public function index(){
            $data['skill_centre'] = $this->Data_model->display_skill_centre();
            $data['testimonial'] = $this->Data_model->display_testimonial();
            
            $this->load->view('site/skill_centre', $data);
        }
    }

?>