<?php 

    class Elimu_pillars extends CI_Controller{
        
        public function index(){
            $data['elimu_pillar'] = $this->Data_model->display_elimu_pillar();
            $data['testimonial'] = $this->Data_model->display_testimonial();
            
            $this->load->view('site/elimu_pillars', $data);
        }
    }

?>