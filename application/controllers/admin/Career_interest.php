<?php 

    class Career_interest extends CI_Controller{
        
        public function index(){
          $data['career_interest'] = $this->Admin_model->display_career_interest();

          $this->load->view('admin/career_interest/view', $data);  
        }
        
        public function add(){
          $data['career_interest'] = $this->Admin_model->display_career_interest();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/career_interest/view', $data); 
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              
              $array = array(
                'title' => $title
              );
              
              $added = $this->Admin_model->insert_career_interest($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/career_interest'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/career_interest'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit($id){
          $data['career_interest'] = $this->Admin_model->display_career_interest_by_id($id);    

          $this->load->view('admin/career_interest/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');

              $array = array(
                'title' => $title
              );
              
              $updated = $this->Admin_model->update_career_interest($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/career_interest'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/career_interest'); ?>";
                </script>  
         <?php }
           } 
        }
        
        
        public function delete_career_interest(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_career_interest($id); 
        }
    
    }

?>