<?php 

    class Team extends CI_Controller{
        
        public function index(){
          $data['team'] = $this->Admin_model->display_team();    

          $this->load->view('admin/team/view', $data);  
        }
        
        public function add(){
          $data['team'] = $this->Admin_model->display_team();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/team/view', $data); 
           
           if(isset($btn_submit)){
              $fullname = $this->input->post('fullname');
              $role = $this->input->post('role');

              $files = $_FILES;
              $cpt1 = count($_FILES['userFiles1']['name']);
    
              for($i=0; $i<$cpt1; $i++){
                $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
                $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
                $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
                $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
                $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];
    
                $config1 = array(
                    'upload_path'   => "./uploads/team/",
                    //'upload_path'   => "./uploads/../../uploads/community/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'overwrite'     => TRUE,
                    'max_size'      => "30000",  // Can be set to particular file size
                    //'max_height'    => "768",
                    //'max_width'     => "1024"
                );
    
                $this->load->library('upload', $config1);
                $this->upload->initialize($config1);
    
                $this->upload->do_upload('userFiles1');
                $fileName = $_FILES['userFiles1']['name'];
              }
              
              $array = array(
                'fullname' => $fullname,
                'role' => $role,
                'image' => $fileName
              );
              
              $added = $this->Admin_model->insert_team($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/team'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/team'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit($id){
          $data['team'] = $this->Admin_model->display_team_by_id($id);    

          $this->load->view('admin/team/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $fullname = $this->input->post('fullname');
              $role = $this->input->post('role');
              
              $array = array(
                'fullname' => $fullname,
                'role' => $role
              );
              
              $updated = $this->Admin_model->update_team_info($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/team'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/team'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_image($id){
          $data['team'] = $this->Admin_model->display_team_by_id($id);     
            
          $this->load->view('admin/team/edit', $data); 
          
          $btn_submit = $this->input->post('edit_image');
           
           if(isset($btn_submit)){
              
              $files = $_FILES;
              $cpt1 = count($_FILES['userFiles1']['name']);
    
              for($i=0; $i<$cpt1; $i++){
                $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
                $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
                $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
                $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
                $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];
    
                $config1 = array(
                    'upload_path'   => "./uploads/team/",
                    //'upload_path'   => "./uploads/../../uploads/community/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'overwrite'     => TRUE,
                    'max_size'      => "30000",  // Can be set to particular file size
                    //'max_height'    => "768",
                    //'max_width'     => "1024"
                );
    
                $this->load->library('upload', $config1);
                $this->upload->initialize($config1);
    
                $this->upload->do_upload('userFiles1');
                $fileName = $_FILES['userFiles1']['name'];
              }
             
              $array = array('image' => $fileName);
              
              $updated = $this->Admin_model->update_team_image($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/team'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/team'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_team(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_team($id); 
        }
    }

?>