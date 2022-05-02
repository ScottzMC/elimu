<?php 

    class Data_model extends CI_Model{
        
        // Account
      
      public function create_user($data){
        $escape_data = $this->db->escape_str($data);
        $query = $this->db->insert('users', $escape_data);
        return $query;
      }
        
      public function validate($email, $password){
    	$escape_email = $this->db->escape_str($email);
        $escape_password = $this->db->escape_str($password);

	  	$this->db->where('email', $escape_email);
    	$query = $this->db->get('users');

    	if($query->num_rows() > 0){
          	$result = $query->row_array();
          	if($this->bcrypt->check_password($escape_password, $result['password'])){
    		    return $query->result();
          	}else{
        		return array();
          	}
	    }else{
        	return NULL;
    	}
  	   }
      	
      public function update_user_password($email, $password){
         $query = $this->db->query("UPDATE users SET password = '$password' WHERE email = '$email' ");
         return $query;
      }
      
      public function activate_user($code){
          $query = $this->db->query("UPDATE users SET status = 'Activated' WHERE code = '$code' ");
          return $query;
      }
      
      // End of Account 
      
      // About Us 
      
      public function display_about(){
        $query = $this->db->get('about')->result();
        return $query;
      }
      
      public function display_about_feature(){
        $this->db->order_by('title', 'ASC');
        $query = $this->db->get('about_feature')->result();
        return $query;
      }
      
      public function display_about_objective(){
        $query = $this->db->get('about_objective')->result();
        return $query;
      }
      
      // End of About Us 
      
      // Covid 
      
      public function display_covid19(){
        $query = $this->db->get('covid19')->result();
        return $query;
      }
      
      // End of Covid 
      
      // Elimu Pillar 
      
      public function display_elimu_pillar(){
        $query = $this->db->get('elimu_pillar')->result();
        return $query;
      }
      
      // End of Elimu Pillar 
      
      // Events 
      
      public function display_event(){
        $query = $this->db->get('event')->result();
        return $query;
      }
      
      public function display_event_poster(){
        $query = $this->db->get('event_poster')->result();
        return $query;
      }
      
      // End of Events 
      
      // Opportunity 
      
      public function display_opportunity(){
        $query = $this->db->get('opportunity')->result();
        return $query;
      }
      
      // End of Opportunity
      
      // Skill Centre 
      
      public function display_skill_centre(){
        $query = $this->db->get('skill_centre')->result();
        return $query;
      }
      
      // End of Skill Centre
      
      // Home
      
      public function display_home(){
        $query = $this->db->get('home')->result();
        return $query;
      }
      
      public function display_home_supporter(){
        $query = $this->db->get('home_supporter')->result();
        return $query;
      }
      
      // End of Home 
      
      // Testimonial 
      
      public function display_testimonial(){
        $query = $this->db->get('testimonial')->result();
        return $query;
      }
      
      // End of Testimonial 
      
      // Team 
      
      public function display_team(){
          $query = $this->db->get('team')->result();
          return $query;
      }
      
      // End of Team 
      
      public function display_mentoring(){
          $query = $this->db->get('mentoring')->result();
          return $query;
      }
      
      public function display_policy(){
          $query = $this->db->get('policy')->result();
          return $query;
      }
      
      // Event 
      
      public function display_all_events(){
          $this->db->order_by('title', 'ASC');
          $query = $this->db->get('events')->result();
          return $query;
      }
      
      // End of Event 
      
      // Profile 
      
      public function display_profile($email){
          $this->db->where('email', $email);
          $query = $this->db->get('users')->result();
          return $query;
      }
      
      public function display_profile_by_id($id){
          $this->db->where('id', $id);
          $query = $this->db->get('users')->result();
          return $query;
      }
      
      public function update_profile_by_id($id, $data){
          $this->db->where('id', $id);
          $query = $this->db->update('users', $data);
          return $query;
      }
      
      public function update_profile_image($id, $image){
          $query = $this->db->query("UPDATE users SET image = '$image' WHERE id = '$id' ");
          return $query;
      }
      
      // End of Profile 
      
      // Following 
      
      public function display_all_following_by_email($email){
          $query = $this->db->query("SELECT DISTINCT users.id, users.membership, users.fullname, users.image, users.email, following.id, following.email, following.following_email FROM users INNER JOIN following ON users.email = following.following_email WHERE users.email = '$email' ")->result();
          return $query;
      }
      
      public function display_following_by_id($id){
         $this->db->where('id', $id);
          $query = $this->db->get('following')->result();
          return $query;
      }
      
      public function fetch_following($email){
          $this->db->where('following_email', $email);
          $this->db->distinct();
          $query = $this->db->get('following')->result();
          return $query;
      }
      
      public function insert_follower($data){
          $query = $this->db->insert('following', $data);
          return $query;
      }
      
      public function remove_follower($id, $data){
          $this->db->where('follower_id', $id);
          $query = $this->db->delete('following');
          return $query;
      }
      
      public function follow_member($id, $data){
          $this->db->where('id', $id);
          $query = $this->db->query('following', $data);
          return $query;
      }
      
      public function unfollow_member($id, $data){
          $this->db->where('id', $id);
          $query = $this->db->update('following', $data);
          return $query;
      }
      
      // End of Following 
      
      // Mentor
      
      public function display_all_mentor(){
          $query = $this->db->get('mentoring')->result();
          return $query;
      }
      
      public function display_all_mentor_by_id($id){
         $this->db->where('id', $id);
         $query = $this->db->get('mentoring')->result();
         return $query;
      }
      
      // End of Mentor
      
      // Shop 
        
        public function display_shop_products(){
            $query = $this->db->get('shop')->result();
            return $query;
        }
        
        public function display_shop_products_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('shop')->result();
            return $query;
        }
        
        public function insert_order_items($data){
    	  $query = $this->db->insert('order_items', $data);
    	  return $query;
    	}
    	
    	public function update_cart($rowid, $qty, $price, $amount) {
     	   $data = array(
    		'rowid' => $rowid,
    		'qty' => $qty,
    		'price' => $price,
    	    'amount' => $amount
    	   );
    
    	   $this->cart->update($data);
    	}
        
      // End of Shop 
      
      // Donation
      
      public function make_a_donation($amount, $email){
          $query = $this->db->query("UPDATE users SET donation = donation + '$amount' WHERE email = '$email' ");
          return $query;
      }
      
      public function remove_donation($email){
          $query = $this->db->query("UPDATE users SET donation = 0 WHERE email = '$email' ");
          return $query;
      }
      
      public function display_donation_info($email){
          $this->db->where('email', $email);
          $query = $this->db->get('users')->result();
          return $query;
      }
      
      // End of Donation 
      
      // Members 
      
      public function display_courses_in_dashboard($category){
          $this->db->where('category', $category);
          $query = $this->db->get('lesson')->result();
          return $query;
      }
      
      public function display_courses_in_launchpad($id){
          $this->db->where('id', $id);
          //$this->db->where('category', $category);
          $query = $this->db->get('course')->result();
          return $query;
      }
      
      public function display_courses_in_fellowship($title, $category){
          $this->db->where('title', $title);
          $this->db->where('category', $category);
          $query = $this->db->get('course')->result();
          return $query;
      }
      
      // Opportunity
      
      public function record_opportunity_count(){
          $query = $this->db->count_all('opportunity');
          return $query;
      }
      
      public function fetch_opportunity_data($limit, $start){
          $this->db->limit($limit, $start);
          $query = $this->db->get('opportunity')->result();
          return $query;
      }
      
      public function display_opportunity_by_id($id){
          $this->db->where('id', $id);
          $query = $this->db->get('opportunity')->result();
          return $query;
      }
      
      public function insert_opportunity($data){
          $query = $this->db->insert('opportunity', $data);
          return $query;
      }
      
      public function update_opportunity_by_id($id, $data){
          $this->db->where('id', $id);
          $query = $this->db->update('opportunity', $data);
          return $query;
      }
      
      public function delete_opportunity($id){
          $query = $this->db->query("DELETE FROM opportunity WHERE id = '$id' ");
      }
      
      // End of Opportunity
      
      // Role Model
      
      public function display_role_model($membership){
          $this->db->where('membership', $membership);
          $query = $this->db->get('users')->result();
          return $query;
      }
      
      public function display_role_model_in_detail($id, $membership){
          $this->db->where('id', $id);
          $this->db->where('membership', $membership);
          $query = $this->db->get('users')->result();
          return $query;
      }
      
      // End of Role Model
      
      // Visionary
      
      public function display_visionary($membership){
          $this->db->where('membership', $membership);
          $query = $this->db->get('users')->result();
          return $query;
      }
      
      public function display_visionary_in_detail($id, $membership){
          $this->db->where('id', $id);
          $this->db->where('membership', $membership);
          $query = $this->db->get('users')->result();
          return $query;
      }
      
      // End of Visionary
      
      // Search
      
      public function record_search_count(){
          $query = $this->db->count_all('users');
          return $query;
      }
        
      public function fetch_search_data($limit, $start, $fullname){
           $this->db->limit($limit, $start);
           $query = $this->db->query("SELECT * FROM users WHERE fullname LIKE '%$fullname%' ")->result();
           return $query;
      }
      
      public function record_advanced_search_count(){
          $query = $this->db->count_all('users');
          return $query;
      }
        
      public function fetch_advanced_search_data($limit, $start, $fullname, $membership){
           $this->db->limit($limit, $start);
           $this->db->where('membership', $membership);
           $query = $this->db->query("SELECT * FROM users WHERE fullname LIKE '%$fullname%' ")->result();
           return $query;
      }
      
      // End of Search
      
      // End of Members 
      
      // Contact 
      
      public function insert_contact($data){
          $query = $this->db->insert('contact', $data);
          return $query;
      }
      
      // End of Contact 
      
      // Career Interest 
      
      public function display_career_interest(){
        $query = $this->db->get('career_interest')->result();
        return $query;
      }
      
      // End of Career interest
      
    }

?>