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
      
      public function display_mentoring(){
          $query = $this->db->get('mentoring')->result();
          return $query;
      }
      
      public function display_policy(){
          $query = $this->db->get('policy')->result();
          return $query;
      }
      
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
      
      public function display_courses_in_launchpad($title, $category){
          $this->db->where('title', $title);
          $this->db->where('category', $category);
          $query = $this->db->get('course')->result();
          return $query;
      }
      
      public function display_courses_in_fellowship($title, $category){
          $this->db->where('title', $title);
          $this->db->where('category', $category);
          $query = $this->db->get('course')->result();
          return $query;
      }
      
      public function display_visionary(){
          $this->db->order_by('fullname', 'ASC');
          $query = $this->db->get('visionary')->result();
          return $query;
      }
      
      public function display_visionary_in_detail($id){
          $this->db->where('id', $id);
          $query = $this->db->get('visionary')->result();
          return $query;
      }
      
      public function display_role_model(){
          $this->db->order_by('fullname', 'ASC');
          $query = $this->db->get('role_model')->result();
          return $query;
      }
      
      public function display_role_model_in_detail($id){
          $this->db->where('id', $id);
          $query = $this->db->get('role_model')->result();
          return $query;
      }
      
      // End of Members 
      
      // Contact 
      
      public function insert_contact($data){
          $query = $this->db->insert('contact', $data);
          return $query;
      }
      
      // End of Contact 
      
    }

?>