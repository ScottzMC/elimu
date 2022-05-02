<?php 

    class Following extends CI_Controller{
        
        public function index(){
            $session_email = $this->session->userdata('uemail');
            
            $data['profile'] = $this->Data_model->display_profile($session_email);
            
            $data['following'] = $this->Data_model->fetch_following($session_email);
            
            $this->load->view('site/members/follow/view', $data);
        }
        
        public function detail($id){
            $session_email = $this->session->userdata('uemail');

            $data['profile'] = $this->Data_model->display_profile($session_email);

            $data['detail'] = $this->Data_model->display_following_by_id($id);
            $data['following'] = $this->Data_model->fetch_following($session_email);
            
            $this->load->view('site/members/follow/detail', $data);
        }
        
        public function follow(){
          $status = "Following";
          $id = $this->input->post('id');

          $data = array('status' => $status);
          $this->Data_model->follow_member($id, $data);
        }
        
        public function follow_member($id){
            $email = $this->input->post('email');
            $session_email = $this->session->userdata('uemail');
            $date = date('Y-m-d H:i:s');
            
            $fullname = $this->input->post('fullname');
            $image = $this->input->post('image');
            $membership = $this->input->post('membership');
            
            $data = array(
                'fullname' => $fullname,
                'image' => $image,
                'email' => $email,
                'follower_id' => $id,
                'following_email' => $session_email,
                'membership' => $membership,
                'status' => 'Following',
                'created_date' => $date
            );
            
            $this->Data_model->insert_follower($data);
            redirect($_SERVER['HTTP_REFERER']);
       }

        public function unfollow_member($id){
            $this->Data_model->remove_follower($id, $data);
            redirect('following');
        }
    }

?>