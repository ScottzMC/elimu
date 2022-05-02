<?php 

    class Policy extends CI_Controller{
        
        public function index(){
          $data['policy'] = $this->Admin_model->display_policy();    

          $this->load->view('admin/policy/view', $data);    
        }
        
        public function add(){
          $data['policy'] = $this->Admin_model->display_policy();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/policy/view', $data); 
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $body = $this->input->post('body');
              
              $array = array(
                'title' => $title,
                'body' => $body
              );
              
              $added = $this->Admin_model->insert_policy($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/policy'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/policy'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit($id){
          $data['policy'] = $this->Admin_model->display_policy_by_id($id);    

          $this->load->view('admin/policy/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $body = $this->input->post('body');
              
              $array = array(
                'title' => $title,
                'body' => $body
              );
              
              $updated = $this->Admin_model->update_policy_info($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/policy'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/policy'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function delete_policy(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_policy($id); 
        }
    }

?>