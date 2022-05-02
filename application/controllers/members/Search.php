<?php 

    class Search extends CI_Controller{
        
        public function index(){
            $session_email = $this->session->userdata('uemail');
            
            $search_query = $this->input->post('search_query');
            
            $config['base_url'] = base_url('members/search');
            $total_row = $this->Data_model->record_search_count();      
            $config['total_rows'] = $total_row;
            $config['per_page'] = 12;
            $config['uri_segment'] = 4;
            $choice = $config['total_rows']/$config['per_page'];
            $config['num_links'] = round($choice);
    
            $config['full_tag_open'] = '<ul style="margin-left: 100px;" class="pagination">';
            $config['full_tag_close'] = '</ul>';
    
            $config['first_tag_open'] = '<li><a><i class="fa fa-angle-double-right">';
            $config['last_tag_open'] = '<li><a><i class="fa fa-angle-double-left">';
    
            $config['next_tag_open'] = '<li><a>';
            $config['prev_tag_open'] = '<li><a>';
    
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
    
            $config['first_tag_close'] = '</i></a></li>';
            $config['last_tag_close'] = '</i></a></li>';
    
            $config['next_tag_close'] = '</a></li>';
            $config['prev_tag_close'] = '</a></li>';
    
            $config['cur_tag_open'] = '<li class="active"><a>';
            $config['cur_tag_close'] = '</a></li>';
    
            $this->pagination->initialize($config);
    
            $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
    
            $data["search"] = $this->Data_model->fetch_search_data($config["per_page"], $page, $search_query);
            $data['profile'] = $this->Data_model->display_profile($session_email);
            
            $this->load->view('site/members/search', $data);
        }
        
        public function advanced_search($membership){
            $session_email = $this->session->userdata('uemail');
            
            $search_query = $this->input->post('search_query');

            $config['base_url'] = base_url('members/search/advanced_search');
            $total_row = $this->Data_model->record_advanced_search_count();      
            $config['total_rows'] = $total_row;
            $config['per_page'] = 12;
            $config['uri_segment'] = 4;
            $choice = $config['total_rows']/$config['per_page'];
            $config['num_links'] = round($choice);
    
            $config['full_tag_open'] = '<ul style="margin-left: 100px;" class="pagination">';
            $config['full_tag_close'] = '</ul>';
    
            $config['first_tag_open'] = '<li><a><i class="fa fa-angle-double-right">';
            $config['last_tag_open'] = '<li><a><i class="fa fa-angle-double-left">';
    
            $config['next_tag_open'] = '<li><a>';
            $config['prev_tag_open'] = '<li><a>';
    
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
    
            $config['first_tag_close'] = '</i></a></li>';
            $config['last_tag_close'] = '</i></a></li>';
    
            $config['next_tag_close'] = '</a></li>';
            $config['prev_tag_close'] = '</a></li>';
    
            $config['cur_tag_open'] = '<li class="active"><a>';
            $config['cur_tag_close'] = '</a></li>';
    
            $this->pagination->initialize($config);
    
            $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;
    
            $data["search"] = $this->Data_model->fetch_advanced_search_data($config["per_page"], $page, $search_query, $membership);
            $data['profile'] = $this->Data_model->display_profile($session_email);
            
            $this->load->view('site/members/advanced_search', $data);
        }
        
        
    }

?>