<?php 

    class Admin_model extends CI_Model{
        
        // Course 
        
        public function display_course(){
            $query = $this->db->get('course')->result();
            return $query;
        }
        
        public function display_course_lesson(){
            $query = $this->db->get('lesson')->result();
            return $query;
        }
        
        public function display_course_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('course')->result();
            return $query;
        }
        
        public function display_lesson_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('lesson')->result();
            return $query;
        }
        
        public function insert_course($data){
            $query = $this->db->insert('course', $data);
            return $query;
        }
        
        public function insert_course_lesson($data){
            $query = $this->db->insert('lesson', $data);
            return $query;
        }
        
        public function update_course_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('course', $data);
            return $query;
        }
        
        public function update_lesson_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('lesson', $data);
            return $query;
        }
        
        public function update_course_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('course', $data);
            return $query;
        }
        
        public function update_lesson_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('lesson', $data);
            return $query;
        }
        
        public function delete_course($id){
            $query = $this->db->query("DELETE FROM course WHERE id = '$id' ");
            return $query;
        }
        
        public function delete_lesson($id){
            $query = $this->db->query("DELETE FROM lesson WHERE id = '$id' ");
            return $query;
        }
        
        // End of Course 
        
        // Members 
        
        public function display_members(){
            $this->db->where('role', 'User');
            $query = $this->db->get('users')->result();
            return $query;
        }
        
        public function display_members_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('users')->result();
            return $query;
        }
        
        public function insert_members($data){
            $query = $this->db->insert('users', $data);
            return $query;
        }
        
        public function update_members_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('users', $data);
            return $query;
        }
        
        public function update_members_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('users', $data);
            return $query;
        }
        
        public function delete_members($id){
            $query = $this->db->query("DELETE FROM users WHERE id = '$id' ");
            return $query;
        }
        
        // End of Members
        
        // Mentoring 
        
        public function display_mentoring(){
            $query = $this->db->get('mentoring')->result();
            return $query;
        }
        
        public function display_mentoring_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('mentoring')->result();
            return $query;
        }
        
        public function insert_mentoring($data){
            $query = $this->db->insert('mentoring', $data);
            return $query;
        }
        
        public function update_mentoring_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('mentoring', $data);
            return $query;
        }
        
        public function update_mentoring_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('mentoring', $data);
            return $query;
        }
        
        public function delete_mentoring($id){
            $query = $this->db->query("DELETE FROM mentoring WHERE id = '$id' ");
            return $query;
        }
        
        // End of mentoring
        
        // Privacy Policy 
        
        public function display_policy(){
            $query = $this->db->get('policy')->result();
            return $query;
        }
        
        public function display_policy_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('policy')->result();
            return $query;
        }
        
        public function insert_policy($data){
            $query = $this->db->insert('policy', $data);
            return $query;
        }
        
        public function update_policy_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('policy', $data);
            return $query;
        }
        
        public function delete_policy($id){
            $query = $this->db->query("DELETE FROM policy WHERE id = '$id' ");
            return $query;
        }
        
        // End of Privacy Policy
        
        // Role Model 
        
        public function display_role_model(){
            $query = $this->db->get('role_model')->result();
            return $query;
        }
        
        public function display_role_model_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('role_model')->result();
            return $query;
        }
        
        public function insert_role_model($data){
            $query = $this->db->insert('role_model', $data);
            return $query;
        }
        
        public function update_role_model_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('role_model', $data);
            return $query;
        }
        
        public function update_role_model_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('role_model', $data);
            return $query;
        }
        
        public function delete_role_model($id){
            $query = $this->db->query("DELETE FROM role_model WHERE id = '$id' ");
            return $query;
        }
        
        // End of Role Model 
        
        // Team
        
        public function display_team(){
            $query = $this->db->get('team')->result();
            return $query;
        }
        
        public function display_team_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('team')->result();
            return $query;
        }
        
        public function insert_team($data){
            $query = $this->db->insert('team', $data);
            return $query;
        }
        
        public function update_team_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('team', $data);
            return $query;
        }
        
        public function update_team_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('team', $data);
            return $query;
        }
        
        public function delete_team($id){
            $query = $this->db->query("DELETE FROM team WHERE id = '$id' ");
            return $query;
        }
        
        // End of Team
        
        // Visionary 
        
        public function display_visionary(){
            $query = $this->db->get('visionary')->result();
            return $query;
        }
        
        public function display_visionary_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('visionary')->result();
            return $query;
        }
        
        public function insert_visionary($data){
            $query = $this->db->insert('visionary', $data);
            return $query;
        }
        
        public function update_visionary_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('visionary', $data);
            return $query;
        }
        
        public function update_visionary_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('visionary', $data);
            return $query;
        }
        
        public function delete_visionary($id){
            $query = $this->db->query("DELETE FROM visionary WHERE id = '$id' ");
            return $query;
        }
        
        // End of Visionary 
        
        // Shop 
        
        public function display_shop(){
            $query = $this->db->get('shop')->result();
            return $query;
        }
        
        public function display_shop_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('shop')->result();
            return $query;
        }
        
        public function display_orders(){
            $query = $this->db->get('order_items')->result();
            return $query;
        }
        
        public function insert_shop($data){
            $query = $this->db->insert('shop', $data);
            return $query;
        }
        
        public function update_shop_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('shop', $data);
            return $query;
        }
        
        public function update_shop_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('shop', $data);
            return $query;
        }
        
        public function delete_shop($id){
            $query = $this->db->query("DELETE FROM shop WHERE id = '$id' ");
            return $query;
        }
        
        // End of Shop 
        
    }

?>