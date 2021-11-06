<?php 

    class Admin extends CI_Controller{
        
        public function dashboard(){
            $this->load->view('admin/dashboard');
        }
        
        // Course 
        
        public function add_lesson(){
          $data['course_content'] = $this->Admin_model->display_course();    
          $data['lesson'] = $this->Admin_model->display_course_lesson();

           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/course/view', $data); 
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $str_title = str_replace(' ', '-', $title);
              $body = $this->input->post('body');
              $category = $this->input->post('category');
              
              $files = $_FILES;
              $cpt1 = count($_FILES['userFiles1']['name']);
    
              for($i=0; $i<$cpt1; $i++){
                $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
                $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
                $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
                $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
                $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];
    
                $config1 = array(
                    'upload_path'   => "./uploads/course/",
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
                'title' => $str_title,
                'body' => $body,
                'category' => $category,
                'image' => $fileName
              );
              
              $added = $this->Admin_model->insert_course_lesson($array);
              
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
        
        public function course(){
          $data['course_content'] = $this->Admin_model->display_course();   
          $data['lesson'] = $this->Admin_model->display_course_lesson();

          $this->load->view('admin/course/view', $data);  
        }
        
        public function add_course(){
          $data['course_content'] = $this->Admin_model->display_course();    
          $data['lesson'] = $this->Admin_model->display_course_lesson();

           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/course/view', $data); 
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $str_title = str_replace(' ', '-', $title);
              $body = $this->input->post('body');
              $category = $this->input->post('category');
              $lesson = $this->input->post('lesson');
              $sub_lesson_title = $this->input->post('sub_lesson_title');
              $sub_lesson_no = $this->input->post('sub_lesson_no');
              $video_url = $this->input->post('video_url');
              
              $array = array(
                'title' => $str_title,
                'body' => $body,
                'category' => $category,
                'lesson' => $lesson,
                'sub_lesson_no' => $sub_lesson_no,
                'sub_lesson_title' => $sub_lesson_title,
                'video_url' => $video_url
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
        
        public function edit_lesson($id){
          $data['lesson'] = $this->Admin_model->display_lesson_by_id($id);

          $this->load->view('admin/course/edit_lesson', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $str_title = str_replace(' ', '-', $title);
              $body = $this->input->post('body');
              $category = $this->input->post('category');
              
              $array = array(
                'title' => $str_title,
                'body' => $body,
                'category' => $category
              );
              
              $updated = $this->Admin_model->update_lesson_info($id, $array);
              
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
        
        public function edit_course($id){
          $data['course_content'] = $this->Admin_model->display_course_by_id($id);    
          $data['lesson'] = $this->Admin_model->display_course_lesson();

          $this->load->view('admin/course/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $str_title = str_replace(' ', '-', $title);
              $body = $this->input->post('body');
              $category = $this->input->post('category');
              $lesson = $this->input->post('lesson');
              $sub_lesson_title = $this->input->post('sub_lesson_title');
              $sub_lesson_no = $this->input->post('sub_lesson_no');
              $video_url = $this->input->post('video_url');
              
              $array = array(
                'title' => $str_title,
                'body' => $body,
                'category' => $category,
                'lesson' => $lesson,
                'sub_lesson_no' => $sub_lesson_no,
                'sub_lesson_title' => $sub_lesson_title,
                'video_url' => $video_url
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
        
        public function edit_lesson_image($id){
          $data['lesson'] = $this->Admin_model->display_lesson_by_id($id);

          $this->load->view('admin/course/edit_lesson', $data); 
          
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
                    'upload_path'   => "./uploads/course/",
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
              
              $updated = $this->Admin_model->update_lesson_image($id, $array);
              
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
        
        /*public function edit_course_image($id){
          $data['course'] = $this->Admin_model->display_course_by_id($id);     
          $data['lesson'] = $this->Admin_model->display_course_lesson();

          $this->load->view('admin/course/edit', $data); 
          
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
                    'upload_path'   => "./uploads/profile/",
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
              
              $updated = $this->Admin_model->update_course_image($id, $array);
              
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
        }*/
        
        public function delete_course(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_course($id); 
        }
        
        public function delete_lesson(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_lesson($id); 
        }
        
        // End of Course 
        
        // Members 
        
        public function member(){
          $data['member'] = $this->Admin_model->display_members();    

          $this->load->view('admin/member/view', $data);  
        }
        
        public function add_member(){
          $data['member'] = $this->Admin_model->display_members();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/member/view', $data); 
           
           if(isset($btn_submit)){
              $fullname = $this->input->post('fullname');
              $email = $this->input->post('email');
              $password = $this->input->post('password');
              $hashed_password = $this->bcrypt->hash_password($password);
              
              $membership = $this->input->post('membership');
              $occupation = $this->input->post('occupation');
              $personal_interest = $this->input->post('personal_interest');
              $career_interest = $this->input->post('career_interest');
              
              $role_hoping_to_get = $this->input->post('role_hoping_to_get');
              $role_hope_get = implode(',', $role_hoping_to_get);
              
              $vision_hoping_to_get = $this->input->post('vision_hoping_to_get');
              $vision_hope_get = implode(',', $vision_hoping_to_get);
              
              $signing_up = $this->input->post('signing_up');
              $bring_to_community = $this->input->post('bring_to_community');
              $social_url = $this->input->post('social_url');

              $files = $_FILES;
              $cpt1 = count($_FILES['userFiles1']['name']);
    
              for($i=0; $i<$cpt1; $i++){
                $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
                $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
                $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
                $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
                $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];
    
                $config1 = array(
                    'upload_path'   => "./uploads/profile/",
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
              
              if(isset($role_hoping_to_get)){
                  $array = array(
                    'fullname' => $fullname,
                    'email' => $email,
                    'password' => $hashed_password,
                    'role' => 'Users',
                    'membership' => $membership,
                    'occupation' => $occupation,
                    'career_interest' => $career_interest,
                    'personal_interest' => $personal_interest,
                    'signing_up' => $signing_up,
                    'hoping_to_get' => $role_hope_get,
                    'bring_to_community' => $bring_to_community,
                    'social_url' => $social_url,
                    'image' => $fileName
                  );
                  
                $added = $this->Admin_model->insert_members($array);
                                
              }else if(isset($vision_hoping_to_get)){
                 $array = array(
                    'fullname' => $fullname,
                    'email' => $email,
                    'password' => $password,
                    'role' => 'User',
                    'membership' => $membership,
                    'occupation' => $occupation,
                    'career_interest' => $career_interest,
                    'personal_interest' => $personal_interest,
                    'signing_up' => $signing_up,
                    'hoping_to_get' => $vision_hope_get,
                    'bring_to_community' => $bring_to_community,
                    'social_url' => $social_url,
                    'image' => $fileName
                  ); 
                  
                $added = $this->Admin_model->insert_members($array);
              }
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/member'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/member'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit_member($id){
          $data['member'] = $this->Admin_model->display_members_by_id($id);    

          $this->load->view('admin/member/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $fullname = $this->input->post('fullname');
              
              $membership = $this->input->post('membership');
              $occupation = $this->input->post('occupation');
              $personal_interest = $this->input->post('personal_interest');
              $career_interest = $this->input->post('career_interest');
              
              $signing_up = $this->input->post('signing_up');
              $bring_to_community = $this->input->post('bring_to_community');
              $social_url = $this->input->post('social_url');
              
              $array = array(
                'fullname' => $fullname,
                'membership' => $membership,
                'occupation' => $occupation,
                'career_interest' => $career_interest,
                'personal_interest' => $personal_interest,
                'signing_up' => $signing_up,
                'bring_to_community' => $bring_to_community,
                'social_url' => $social_url
              );
              
              $updated = $this->Admin_model->update_members_info($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/member'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/member'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_member_image($id){
          $data['member'] = $this->Admin_model->display_members_by_id($id);     
            
          $this->load->view('admin/member/edit', $data); 
          
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
                    'upload_path'   => "./uploads/profile/",
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
              
              $updated = $this->Admin_model->update_members_image($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/member'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/member'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_member(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_members($id); 
        }
        
        // End of Members 
        
        // Mentoring 
        
        public function mentoring(){
          $data['mentoring'] = $this->Admin_model->display_mentoring();    

          $this->load->view('admin/mentoring/view', $data);    
        }
        
        public function add_mentoring(){
          $data['mentoring'] = $this->Admin_model->display_mentoring();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/mentoring/view', $data); 
           
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
                    'upload_path'   => "./uploads/mentoring/",
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
              
              $added = $this->Admin_model->insert_mentoring($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/mentoring'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/mentoring'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit_mentoring($id){
          $data['mentoring'] = $this->Admin_model->display_mentoring_by_id($id);    

          $this->load->view('admin/mentoring/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $body = $this->input->post('body');
              
              $array = array(
                'title' => $title,
                'body' => $body
              );
              
              $updated = $this->Admin_model->update_mentoring_info($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/mentoring'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/mentoring'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_mentoring_image($id){
          $data['mentoring'] = $this->Admin_model->display_mentoring_by_id($id);     
            
          $this->load->view('admin/mentoring/edit', $data); 
          
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
                    'upload_path'   => "./uploads/mentoring/",
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
              
              $updated = $this->Admin_model->update_mentoring_image($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/mentoring'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/mentoring'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_mentoring(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_mentoring($id); 
        }
        
        // End of Mentoring 
        
        // Privacy Policy 
        
        public function policy(){
          $data['policy'] = $this->Admin_model->display_policy();    

          $this->load->view('admin/policy/view', $data);    
        }
        
        public function add_policy(){
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
        
        public function edit_policy($id){
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
        
        // End of Privacy Policy
        
        // Role Model 
        
        public function role_model(){
          $data['role_model'] = $this->Admin_model->display_role_model();    

          $this->load->view('admin/role_model/view', $data);  
        }
        
        public function add_role_model(){
          $data['role_model'] = $this->Admin_model->display_role_model();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/role_model/view', $data); 
           
           if(isset($btn_submit)){
              $fullname = $this->input->post('fullname');
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
                    'upload_path'   => "./uploads/profile/",
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
                'fullname' => $fullname,
                'body' => $body,
                'category' => 'Role Model',
                'image' => $fileName
              );
              
              $added = $this->Admin_model->insert_role_model($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/role_model'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/role_model'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit_role_model($id){
          $data['role_model'] = $this->Admin_model->display_role_model_by_id($id);    

          $this->load->view('admin/role_model/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $fullname = $this->input->post('fullname');
              $body = $this->input->post('body');
              
              $array = array(
                'fullname' => $fullname,
                'body' => $body
              );
              
              $updated = $this->Admin_model->update_role_model_info($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/role_model'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/role_model'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_role_model_image($id){
          $data['role_model'] = $this->Admin_model->display_role_model_by_id($id);     
            
          $this->load->view('admin/role_model/edit', $data); 
          
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
                    'upload_path'   => "./uploads/profile/",
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
              
              $updated = $this->Admin_model->update_role_model_image($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/role_model'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/role_model'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_role_model(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_role_model($id); 
        }
        
        // End of Role Model 
        
        // Team 
        
        public function team(){
          $data['team'] = $this->Admin_model->display_team();    

          $this->load->view('admin/team/view', $data);  
        }
        
        public function add_team(){
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
        
        public function edit_team($id){
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
        
        public function edit_team_image($id){
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
        
        // End of Team
        
        // Visionary 
        
        public function visionary(){
          $data['visionary'] = $this->Admin_model->display_visionary();    

          $this->load->view('admin/visionary/view', $data);  
        }
        
        public function add_visionary(){
          $data['visionary'] = $this->Admin_model->display_visionary();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/visionary/view', $data); 
           
           if(isset($btn_submit)){
              $fullname = $this->input->post('fullname');
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
                    'upload_path'   => "./uploads/profile/",
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
                'fullname' => $fullname,
                'body' => $body,
                'category' => 'Visionary',
                'image' => $fileName
              );
              
              $added = $this->Admin_model->insert_visionary($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Successfully');
                     window.location.href="<?php echo site_url('admin/visionary'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/visionary'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function edit_visionary($id){
          $data['visionary'] = $this->Admin_model->display_visionary_by_id($id);    

          $this->load->view('admin/visionary/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $fullname = $this->input->post('fullname');
              $body = $this->input->post('body');
              
              $array = array(
                'fullname' => $fullname,
                'body' => $body
              );
              
              $updated = $this->Admin_model->update_visionary_info($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/visionary'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/visionary'); ?>";
                </script>  
         <?php }
           } 
        }
        
        public function edit_visionary_image($id){
          $data['visionary'] = $this->Admin_model->display_visionary_by_id($id);     
            
          $this->load->view('admin/visionary/edit', $data); 
          
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
                    'upload_path'   => "./uploads/profile/",
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
              
              $updated = $this->Admin_model->update_visionary_image($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
                     window.location.href="<?php echo site_url('admin/visionary'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/visionary'); ?>";
                </script>  
         <?php }
           }  
        }
        
        public function delete_visionary(){
           $id = $this->input->post('del_id');
           $this->Admin_model->delete_visionary($id); 
        }
        
        // End of Visionary 
        
        // Shop 
        
        public function shop(){
          $data['shop'] = $this->Admin_model->display_shop();    
          $data['orders'] = $this->Admin_model->display_orders();    
            
          $this->load->view('admin/shop/view', $data);
        }
        
        public function add_shop(){
           $data['shop'] = $this->Admin_model->display_shop();    
           $data['orders'] = $this->Admin_model->display_orders();
           
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/shop/view', $data); 
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $price = $this->input->post('price');
              $body = $this->input->post('body');
              $color = $this->input->post('color');
              $size = $this->input->post('size');
               
              $files = $_FILES;
              $cpt1 = count($_FILES['userFiles1']['name']);
    
              for($i=0; $i<$cpt1; $i++){
                $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
                $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
                $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
                $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
                $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];
    
                $config1 = array(
                    'upload_path'   => "./uploads/shop/",
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
                'image' => $fileName,
                'price' => $price,
                'color' => $color,
                'size' => $size
              );
              
              $added = $this->Admin_model->insert_shop($array);
              
              if($added){ ?>
                 <script>
                     alert('Added Product Successfully');
                     window.location.href="<?php echo site_url('admin/shop'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/shop'); ?>";
                </script>  
         <?php }
           }
          
        }
        
        public function edit_shop($id){
          $data['shop'] = $this->Admin_model->display_shop_by_id($id);    
          $data['orders'] = $this->Admin_model->display_orders();    
            
          $this->load->view('admin/shop/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');
              $price = $this->input->post('price');
              $body = $this->input->post('body');
              $color = $this->input->post('color');
              $size = $this->input->post('size');
              
              
              $array = array(
                'title' => $title,
                'body' => $body,
                'price' => $price,
                'color' => $color,
                'size' => $size
              );
              
              $updated = $this->Admin_model->update_shop_info($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Product Successfully');
                     window.location.href="<?php echo site_url('admin/shop'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/shop'); ?>";
                </script>  
         <?php }
           }
        }
        
        public function edit_shop_image($id){
          $data['shop'] = $this->Admin_model->display_shop_by_id($id);    
          $data['orders'] = $this->Admin_model->display_orders();    
            
          $this->load->view('admin/shop/edit', $data); 
          
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
                    'upload_path'   => "./uploads/shop/",
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
              
              $updated = $this->Admin_model->update_shop_image($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Product Successfully');
                     window.location.href="<?php echo site_url('admin/shop'); ?>";
                 </script> 
         <?php }else{ ?>
                <script>
                    alert('Failed');
                    window.location.href="<?php echo site_url('admin/shop'); ?>";
                </script>  
         <?php }
           }
        }
        
        public function delete_shop(){
            $id = $this->input->post('del_id');
            $this->Admin_model->delete_shop($id); 
        }
        
        // End of Shop 
    }

?>