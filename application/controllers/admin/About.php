<?php 

    class About extends CI_Controller{
        
        public function index(){
          $data['about'] = $this->Admin_model->display_about();
          $data['about_feature'] = $this->Admin_model->display_about_feature();
          $data['about_objective'] = $this->Admin_model->display_about_objective();  
          
          $this->load->view('admin/about/view', $data);  
        }
        
        public function add(){
          $data['about'] = $this->Admin_model->display_about();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/about/view', $data); 
           
           if(isset($btn_submit)){
              $icon = $this->input->post('icon');
              $title = $this->input->post('title');
              $body = $this->input->post('body');

              $files = $_FILES;
              $cpt1 = count($_FILES['userFiles1']['name']);
    
              for($i=0; $i<$cpt1; $i++){
                $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
                $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
                $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
                $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
                $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];
    
                $config1 = array(
                    'upload_path'   => "./uploads/about_us/",
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
                'icon' => $icon,
                'title' => $title,
                'body' => $body,
                'image' => $fileName
              );
              
              $added = $this->Admin_model->insert_about($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/about'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/about'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit($id){
          $data['about'] = $this->Admin_model->display_about_by_id($id);    

          $this->load->view('admin/about/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $body = $this->input->post('body');
              
              $array = array(
                'title' => $title,
                'body' => $body
              );
              
              $updated = $this->Admin_model->update_about($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/about'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/about'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_image($id){
          $data['about'] = $this->Admin_model->display_about_by_id($id);     
            
          $this->load->view('admin/about/edit', $data); 
          
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
                    'upload_path'   => "./uploads/about_us/",
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
              
              $updated = $this->Admin_model->update_about($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/about'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/about'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_about(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_about($id); 
        }
        
        // About Us objective  
        
        public function add_objective(){
          $mission_title = $this->input->post('mission_title');
          $mission_body = $this->input->post('mission_body');
          $vision_title = $this->input->post('vision_title');
          $vision_body = $this->input->post('vision_body');

          $array = array(
            'mission_title' => $mission_title,
            'mission_body' => $mission_body,
            'vision_title' => $vision_title,
            'vision_body' => $vision_body
          );
          
          $added = $this->Admin_model->insert_about_objective($array);
          
          if($added){ ?>
             <script>
                 alert('Added Successfully');
                 window.location.href="<?php echo site_url('admin/about'); ?>";
             </script> 
     <?php }else{ ?>
            <script>
                alert('Failed');
                window.location.href="<?php echo site_url('admin/about'); ?>";
            </script>  
     <?php }
          
        }
        
        public function edit_objective($id){
          $data['about_objective'] = $this->Admin_model->display_about_objective_by_id($id);

          $this->load->view('admin/about/objective', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $mission_title = $this->input->post('mission_title');
              $mission_body = $this->input->post('mission_body');
              $vision_title = $this->input->post('vision_title');
              $vision_body = $this->input->post('vision_body');
    
              $array = array(
                'mission_title' => $mission_title,
                'mission_body' => $mission_body,
                'vision_title' => $vision_title,
                'vision_body' => $vision_body
              );
              
              $updated = $this->Admin_model->update_about_objective($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/about'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/about'); ?>";
                </script>  
         <?php }
           }
        }
        
        public function delete_objective(){
            $id = $this->input->post('del_id');
            $this->Admin_model->delete_objective($id); 
        }
        
        // End of About Us objective
        
        // About Us feature  
        
        public function add_feature(){
          $title = $this->input->post('title');
          $body = $this->input->post('body');

          $array = array(
            'title' => $title,
            'body' => $body
          );
          
          $added = $this->Admin_model->insert_about_feature($array);
          
          if($added){ ?>
             <script>
                 alert('Added Successfully');
                 window.location.href="<?php echo site_url('admin/about'); ?>";
             </script> 
     <?php }else{ ?>
            <script>
                alert('Failed');
                window.location.href="<?php echo site_url('admin/about'); ?>";
            </script>  
     <?php }
          
        }
        
        public function edit_feature($id){
          $data['about_feature'] = $this->Admin_model->display_about_feature_by_id($id);

          $this->load->view('admin/about/feature', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $body = $this->input->post('body');

              $array = array(
                'title' => $title,
                'body' => $body
              );
              
              $updated = $this->Admin_model->update_about_feature($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/about'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/about'); ?>";
                </script>  
         <?php }
           }
        }
        
        public function delete_feature(){
            $id = $this->input->post('del_id');
            $this->Admin_model->delete_feature($id); 
        }
        
        // End of About Us feature 
    }

?>