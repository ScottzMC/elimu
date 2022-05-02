<?php 
    
    class Opportunity extends CI_Controller{
        
        public function index(){
            $config['base_url'] = base_url('members/opportunity');
            $total_row = $this->Data_model->record_opportunity_count();      
            $config['total_rows'] = $total_row;
            $config['per_page'] = 12;
            $config['uri_segment'] = 3;
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
    
            $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
            
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data["opportunity"] = $this->Data_model->fetch_opportunity_data($config["per_page"], $page);
            
            $this->load->view('site/members/opportunity/view', $data);
            
        }
        
        public function detail($id){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['detail'] = $this->Data_model->display_opportunity_by_id($id);
            
            $this->load->view('site/members/opportunity/detail', $data);
        }
        
        public function add(){
            $session_email = $this->session->userdata('uemail');
            $data['profile'] = $this->Data_model->display_profile($session_email);
            
            $btn_submit = $this->input->post('add');
            
            $title = $this->input->post('title');
            $body = $this->input->post('body');
            $url = $this->input->post('url');
            $date = date('Y-m-d H:i:s');
            
            $this->load->view('site/members/opportunity/add', $data);
            
            if(isset($btn_submit)){
                
                $array = array(
                    'title' => $title,
                    'body' => $body,
                    'url' => $url,
                    'image' => "elimu.png"
                );
                
                $add_opp = $this->Data_model->insert_opportunity($array);
                
                if($add_opp){ ?>
                    <script>
                        alert('Added Successfully');
                        window.location.href="<?php echo site_url('members/opportunity'); ?>";
                    </script>
                    <?php
                }else{ ?>
                    <script>
                        alert('Failed');
                        window.location.href="<?php echo site_url('members/opportunity/add'); ?>";
                    </script>
                    <?php
                }   
            }
            
        }
        
        public function edit($id){
            $session_email = $this->session->userdata('uemail');
            $data['profile'] = $this->Data_model->display_profile($session_email);
            $data['detail'] = $this->Data_model->display_opportunity_by_id($id);
            
            $this->load->view('site/members/opportunity/edit', $data);
            
            $btn_submit = $this->input->post('edit');
            
            $title = $this->input->post('title');
            $body = $this->input->post('body');
            $url = $this->input->post('url');
            $date = date('Y-m-d H:i:s');
            
            if(isset($btn_submit)){
                
                $array = array(
                    'title' => $title,
                    'body' => $body,
                    'url' => $url,
                    'uploaded_by' => $session_email,
                    'created_date' => $date
                );
                
                $update_opp = $this->Data_model->update_opportunity_by_id($id, $array);
                
                if($update_opp){ ?>
                    <script>
                        alert('Updated Successfully');
                        window.location.href="<?php echo site_url('members/opportunity'); ?>";
                    </script>
                    <?php
                }else{ ?>
                    <script>
                        alert('Failed');
                        window.location.href="<?php echo site_url('members/opportunity/add'); ?>";
                    </script>
                    <?php
                }   
            }
        }
        
        public function delete_opportunity(){
            $id = $this->input->post('del_id');
           
            $this->Data_model->delete_opportunity($id); 
        }
    }

?>