<?php 

    class Profile extends CI_Controller{
        
        public function index(){
            $session_email = $this->session->userdata('uemail');
            $submit_btn = $this->input->post('update');

            $data['profile'] = $this->Data_model->display_profile($session_email);
            
            if(!empty($session_email)){
                $this->load->view('site/members/profile/view', $data);
            }else{
                redirect('home');
            }
        }
        
        public function member($id){
           $session_email = $this->session->userdata('uemail');
           $submit_btn = $this->input->post('update');

           $data['profile'] = $this->Data_model->display_profile_by_id($id);
            
           if(!empty($session_email)){
              $this->load->view('site/members/member_profile', $data);
           }else{
              redirect('home');
           } 
        }
        
        public function edit($id){
            $session_email = $this->session->userdata('uemail');
            $submit_btn = $this->input->post('update');

            $data['profile'] = $this->Data_model->display_profile_by_id($id);
            $data['career_interest'] = $this->Data_model->display_career_interest();
            
            $this->load->view('site/members/profile/edit', $data);
            
            if(!empty($session_email)){
                
                if(isset($submit_btn)){
                    $fullname = $this->input->post('fullname');
                    $occupation = $this->input->post('occupation');
                    $career_interest = $this->input->post('career_interest');
                    $personal_interest = $this->input->post('personal_interest');
                    $signing_up = $this->input->post('signing_up');
                    $hoping_to_get = $this->input->post('hoping_to_get');
                    $bring_to_community = $this->input->post('bring_to_community');
                    $social_url = $this->input->post('social_url');
                    
                    $hope_get = implode(',', $hoping_to_get);
                    
                    $update_array = array(
                        'fullname' => $fullname,
                        'occupation' => $occupation,
                        'career_interest' => $career_interest,
                        'personal_interest' => $personal_interest,
                        'signing_up' => $signing_up,
                        'hoping_to_get' => $hope_get,
                        'bring_to_community' => $bring_to_community,
                        'social_url' => $social_url
                    );
                    
                    $update_profile = $this->Data_model->update_profile_by_id($id, $update_array);
                    
                    if($update_profile){ ?>
                        <script>
                            alert('Updated Successfully');
                            window.location.href="<?php echo site_url('members/profile'); ?>";
                        </script>
              <?php }else{ ?>
                       <script>
                            alert('Update Failed');
                            window.location.href="<?php echo site_url('members/profile/edit/'.$id); ?>";
                        </script> 
              <?php }
            }

          }else{
            redirect('home');
          }
            
        }
        
        public function update_image($id){
            $submit_btn = $this->input->post('update_image');
            
            $files = $_FILES;
            $cpt1 = count($_FILES['fileToUpload']['name']); 
            
            for($i=0; $i<$cpt1; $i++){
                $_FILES['fileToUpload']['name']= $files['fileToUpload']['name'][$i];
                $_FILES['fileToUpload']['type']= $files['fileToUpload']['type'][$i];
                $_FILES['fileToUpload']['tmp_name']= $files['fileToUpload']['tmp_name'][$i];
                $_FILES['fileToUpload']['error']= $files['fileToUpload']['error'][$i];
                $_FILES['fileToUpload']['size']= $files['fileToUpload']['size'][$i];
                
                $config1 = array(
                'upload_path'   => "./uploads/profile/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
                 );
                 
                $this->load->library('upload', $config1);
                $this->upload->initialize($config1);
    
                $this->upload->do_upload('fileToUpload');
                $fileName = $_FILES['fileToUpload']['name'];
            }
                
                $update_image = $this->Data_model->update_profile_image($id, $fileName);
                
                if($update_image){ ?>
                    <script>
                        alert('Updated Successfully');
                        window.location.href="<?php echo site_url('members/profile'); ?>";
                    </script>
              <?php
                  }else{ ?>
                    <script>
                        alert('Update Failed');
                        window.location.href="<?php echo site_url('members/profile/edit/'.$id); ?>";
                    </script>
            <?php }
        }
    }

?>