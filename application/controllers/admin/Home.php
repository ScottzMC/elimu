<?php 

    class Home extends CI_Controller{
        
        public function index(){
          $data['home'] = $this->Admin_model->display_home();
          $data['home_supporter'] = $this->Admin_model->display_home_supporter();

          $this->load->view('admin/home/view', $data);  
        }
        
        public function add(){
          $data['home'] = $this->Admin_model->display_home();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/home/view', $data); 
           
           if(isset($btn_submit)){
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
                    'upload_path'   => "./uploads/home/",
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
                'title' => $title,
                'body' => $body,
                'image' => $fileName
              );
              
              $added = $this->Admin_model->insert_home($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/home'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/home'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit($id){
          $data['home'] = $this->Admin_model->display_home_by_id($id);    

          $this->load->view('admin/home/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $body = $this->input->post('body');
              
              $array = array(
                'title' => $title,
                'body' => $body
              );
              
              $updated = $this->Admin_model->update_home($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/home'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/home'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_image($id){
          $data['home'] = $this->Admin_model->display_home_by_id($id);     
            
          $this->load->view('admin/home/edit', $data); 
          
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
                    'upload_path'   => "./uploads/home/",
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
              
              $updated = $this->Admin_model->update_home($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/home'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/home'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_home(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_home($id); 
        }
        
        // Home supporter 
        
        public function add_supporter(){
          $data['home_supporter'] = $this->Admin_model->display_home_supporter();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/home/view', $data); 
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $url = $this->input->post('url');

              $files = $_FILES;
              $cpt1 = count($_FILES['userFiles1']['name']);
    
              for($i=0; $i<$cpt1; $i++){
                $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
                $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
                $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
                $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
                $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];
    
                $config1 = array(
                    'upload_path'   => "./uploads/home/",
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
                'title' => $title,
                'url' => $url,
                'image' => $fileName
              );
              
              $added = $this->Admin_model->insert_home_supporter($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/home'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/home'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit_supporter($id){
          $data['home_supporter'] = $this->Admin_model->display_home_supporter_by_id($id);
          
          $this->load->view('admin/home/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $url = $this->input->post('url');
              
              $array = array(
                'title' => $title,
                'url' => $url
              );
              
              $updated = $this->Admin_model->update_home_supporter($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/home'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/home'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_supporter_image($id){
          $data['home_supporter'] = $this->Admin_model->display_home_supporter_by_id($id);
            
          $this->load->view('admin/home/edit', $data); 
          
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
                    'upload_path'   => "./uploads/home/",
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
              
              $updated = $this->Admin_model->update_home_supporter($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/home'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/home'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_home_supporter(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_home_supporter($id); 
        }
        
        // End of Home supporter 
    
    }

?>