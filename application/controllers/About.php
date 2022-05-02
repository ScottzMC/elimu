<?php 

    class About extends CI_Controller{
        
        public function index(){
            $data['about'] = $this->Data_model->display_about();
            $data['about_feature'] = $this->Data_model->display_about_feature();
            $data['about_objective'] = $this->Data_model->display_about_objective();
            
            $data['team'] = $this->Data_model->display_team();
            $data['testimonial'] = $this->Data_model->display_testimonial();
            $this->load->view('site/about', $data);
        }
    }

?>