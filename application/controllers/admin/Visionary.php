<?php 

    class Visionary extends CI_Controller{
        
        public function index(){
          $data['visionary'] = $this->Admin_model->display_visionary();    

          $this->load->view('admin/visionary/view', $data);  
        }
        
        public function add(){
          $data['visionary'] = $this->Admin_model->display_visionary();    
            
           $btn_submit = $this->input->post('add');
           
           $this->load->view('admin/visionary/view', $data); 
           
           if(isset($btn_submit)){
              
              $fullname = $this->input->post('fullname');
              $email = $this->input->post('email');
              $password = $this->input->post('password');
              $hashed_password = $this->bcrypt->hash_password($password);
              $description = $this->input->post('description');
              $membership = $this->input->post('membership');
              $occupation = $this->input->post('occupation');
              $career_interest = $this->input->post('career_interest');
              $personal_interest = $this->input->post('personal_interest');
              $signing_up = $this->input->post('signing_up');
              $hoping_to_get = $this->input->post('hoping_to_get');
              $bring_to_community = $this->input->post('bring_to_community');
              $social_url = $this->input->post('social_url');
              
              $slug = str_replace(' ', '-', strtolower($fullname)); 
              $alias = str_replace(' ', '_', strtolower($membership));
              
              $time = time();
              $date = date("Y-m-d H:i:s");
              
              $hope_get = implode(',', $hoping_to_get);

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
                'slug' => $slug,
                'fullname' => $fullname,
                'email' => $email,
                'password' => $hashed_password,
                'description' => $description,
                'role' => 'User',
                'status' => 'Activated',
                'donation' => '0',
                'image' => $fileName,
                'membership' => 'Visionary',
                'alias' => 'visionary',
                'occupation' => $occupation,
                'career_interest' => $career_interest,
                'personal_interest' => $personal_interest,
                'signing_up' => $signing_up,
                'hoping_to_get' => $hope_get,
                'bring_to_community' => $bring_to_community,
                'social_url' => $social_url,
                'created_time' => $time,
                'created_date' => $date
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
        
        public function edit($id){
          $data['visionary'] = $this->Admin_model->display_visionary_by_id($id);    

          $this->load->view('admin/visionary/edit', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $fullname = $this->input->post('fullname');
              $email = $this->input->post('email');
              $password = $this->input->post('password');
              $hashed_password = $this->bcrypt->hash_password($password);
              $description = $this->input->post('description');
              $membership = $this->input->post('membership');
              $occupation = $this->input->post('occupation');
              $career_interest = $this->input->post('career_interest');
              $personal_interest = $this->input->post('personal_interest');
              $signing_up = $this->input->post('signing_up');
              $hoping_to_get = $this->input->post('hoping_to_get');
              $bring_to_community = $this->input->post('bring_to_community');
              $social_url = $this->input->post('social_url');
              
              $slug = str_replace(' ', '-', strtolower($fullname)); 
              $alias = str_replace(' ', '_', strtolower($membership));
              
              $time = time();
              $date = date("Y-m-d H:i:s");
              
              $hope_get = implode(',', $hoping_to_get);
              
              $array = array(
                'slug' => $slug,
                'fullname' => $fullname,
                'email' => $email,
                'password' => $hashed_password,
                'description' => $description,
                'role' => 'User',
                'status' => 'Activated',
                'donation' => '0',
                'membership' => 'Visionary',
                'alias' => 'visionary',
                'occupation' => $occupation,
                'career_interest' => $career_interest,
                'personal_interest' => $personal_interest,
                'signing_up' => $signing_up,
                'hoping_to_get' => $hope_get,
                'bring_to_community' => $bring_to_community,
                'social_url' => $social_url,
                'created_time' => $time,
                'created_date' => $date
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
        
        public function edit_image($id){
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
    }

?>