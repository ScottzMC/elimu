<?php 

    class Event extends CI_Controller{
        
        public function index(){
          $data['event'] = $this->Admin_model->display_event();    

          $this->load->view('admin/event/view', $data);  
        }
        
        public function add(){
          $data['event'] = $this->Admin_model->display_event();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/event/view', $data); 
           
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
                    'upload_path'   => "./uploads/event/",
                    //'upload_path'   => "./uploads/../../uploads/community/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'overwrite'     => TRUE,
                    'max_size'      => "3000",  // Can be set to particular file size
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
              
              $added = $this->Admin_model->insert_event($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/event'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/event'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit($id){
          $data['event'] = $this->Admin_model->display_event_by_id($id);    

          $this->load->view('admin/event/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $body = $this->input->post('body');
              
              $array = array(
                'title' => $fullname,
                'body' => $body
              );
              
              $updated = $this->Admin_model->update_event($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/event'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/event'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_image($id){
          $data['event'] = $this->Admin_model->display_event_by_id($id);     
            
          $this->load->view('admin/event/edit', $data); 
          
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
                    'upload_path'   => "./uploads/event/",
                    //'upload_path'   => "./uploads/../../uploads/community/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'overwrite'     => TRUE,
                    'max_size'      => "3000",  // Can be set to particular file size
                    //'max_height'    => "768",
                    //'max_width'     => "1024"
                );
    
                $this->load->library('upload', $config1);
                $this->upload->initialize($config1);
    
                $this->upload->do_upload('userFiles1');
                $fileName = $_FILES['userFiles1']['name'];
              }
             
              $array = array('image' => $fileName);
              
              $updated = $this->Admin_model->update_event($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/event'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/event'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_event(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_event($id); 
        }
        
        // Event poster  
        
        public function add_poster(){
          $title = $this->input->post('title');
          $body = $this->input->post('body');
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
                'upload_path'   => "./uploads/event/",
                //'upload_path'   => "./uploads/../../uploads/community/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
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
            'url' => $url,
            'image' => $fileName
          );
          
          $added = $this->Admin_model->insert_event_poster($array);
          
          if($added){ ?>
             <script>
                 alert('Added Successfully');
                 window.location.href="<?php echo site_url('admin/event'); ?>";
             </script> 
     <?php }else{ ?>
            <script>
                alert('Failed');
                window.location.href="<?php echo site_url('admin/event'); ?>";
            </script>  
     <?php }
          
        }
        
        public function edit_poster($id){
          $data['event_poster'] = $this->Admin_model->display_event_poster_by_id($id);

          $this->load->view('admin/event/poster', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $body = $this->input->post('body');
              $url = $this->input->post('url');
    
              $array = array(
                'title' => $title,
                'body' => $body,
                'url' => $url
              );
              
              $updated = $this->Admin_model->update_event_poster($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/event'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/event'); ?>";
                </script>  
         <?php }
           }
        }
        
        public function edit_poster_image($id){
          $data['event_poster'] = $this->Admin_model->display_event_poster_by_id($id);     
            
          $this->load->view('admin/event/edit', $data); 
          
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
                    'upload_path'   => "./uploads/event/",
                    //'upload_path'   => "./uploads/../../uploads/community/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'overwrite'     => TRUE,
                    'max_size'      => "3000",  // Can be set to particular file size
                    //'max_height'    => "768",
                    //'max_width'     => "1024"
                );
    
                $this->load->library('upload', $config1);
                $this->upload->initialize($config1);
    
                $this->upload->do_upload('userFiles1');
                $fileName = $_FILES['userFiles1']['name'];
              }
             
              $array = array('image' => $fileName);
              
              $updated = $this->Admin_model->update_event_poster($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/event'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/event'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_event_poster(){
            $id = $this->input->post('del_id');
            $this->Admin_model->delete_event_poster($id); 
        }
        
        // End of Event poster
    }

?>