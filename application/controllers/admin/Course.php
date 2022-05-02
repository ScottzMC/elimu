<?php 

    class Course extends CI_Controller{
        
        public function index(){
          $data['course_content'] = $this->Admin_model->display_course();   
          $data['lesson'] = $this->Admin_model->display_course_lesson();

          $this->load->view('admin/course/view', $data);  
        }
        
        public function add(){
          $data['course_content'] = $this->Admin_model->display_course();    
          $data['lesson'] = $this->Admin_model->display_course_lesson();

           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/course/view', $data); 
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $str_title = str_replace(' ', '-', $title);
              $category = $this->input->post('category');
              /*$lesson = $this->input->post('lesson');
              $sub_lesson_title = $this->input->post('sub_lesson_title');
              $sub_lesson_no = $this->input->post('sub_lesson_no');*/
              $video_url = $this->input->post('video_url');
              $playlist = $this->input->post('playlist');

              $files = $_FILES;
              $cpt1 = count($_FILES['userFiles1']['name']);
    
              for($i=0; $i<$cpt1; $i++){
                $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
                $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
                $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
                $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
                $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];
    
                $config1 = array(
                    'upload_path'   => "./uploads/video/",
                    //'upload_path'   => "./uploads/../../uploads/community/",
                    'allowed_types' => "mp4",
                    'overwrite'     => TRUE,
                    'max_size'      => "300000",  // Can be set to particular file size
                    //'max_height'    => "768",
                    //'max_width'     => "1024"
                );
    
                $this->load->library('upload', $config1);
                $this->upload->initialize($config1);
    
                $this->upload->do_upload('userFiles1');
                $fileName = $_FILES['userFiles1']['name'];
              }
              
              $array = array(
                'title' => $str_title,
                'category' => $category,
                'video_url' => $video_url,
                'playlist' => $playlist
              );
              
              $added = $this->Admin_model->insert_course($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/course'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/course'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit($id){
          $data['course_content'] = $this->Admin_model->display_course_by_id($id);    
          $data['lesson'] = $this->Admin_model->display_course_lesson();

          $this->load->view('admin/course/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $str_title = str_replace(' ', '-', $title);
              $category = $this->input->post('category');
              $video_url = $this->input->post('video_url');
              $playlist = $this->input->post('playlist');
              
              $array = array(
                'title' => $str_title,
                'category' => $category,
                'video_url' => $video_url,
                'playlist' => $playlist
              );
              
              $updated = $this->Admin_model->update_course_info($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/course'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/course'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_video($id){
          
          $files = $_FILES;
          $cpt1 = count($_FILES['userFiles1']['name']);

          for($i=0; $i<$cpt1; $i++){
            $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
            $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
            $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
            $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
            $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];

            $config1 = array(
                'upload_path'   => "./uploads/video/",
                //'upload_path'   => "./uploads/../../uploads/community/",
                'allowed_types' => "mp4",
                'overwrite'     => TRUE,
                'max_size'      => "300000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config1);
            $this->upload->initialize($config1);

            $this->upload->do_upload('userFiles1');
            $fileName = $_FILES['userFiles1']['name'];
          }
         
          $array = array('video_url' => $fileName);
          
          $updated = $this->Admin_model->update_course_video($id, $array);
          
          if($updated){ ?>
             <script>
                 alert('Updated Successfully');
                 window.location.href="<?php echo site_url('admin/course'); ?>";
             </script> 
     <?php }else{ ?>
            <script>
                alert('Failed');
                window.location.href="<?php echo site_url('admin/course'); ?>";
            </script>  
     <?php }
        }
        
        public function delete_course(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_course($id); 
        }
    }

?>