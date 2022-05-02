<?php 

    class Admin_model extends CI_Model{
        
        // Menu 
        
        public function display_color(){
            $query = $this->db->get('menu_color')->result();
            return $query;
        }
        
        public function display_color_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('menu_color')->result();
            return $query;
        }
        
        public function insert_color($data){
            $query = $this->db->insert('menu_color', $data);
            return $query;
        }
        
        public function update_color($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('menu_color', $data);
            return $query;
        }
        
        public function delete_color($id){
            $query = $this->db->query("DELETE FROM menu_color WHERE id = '$id' ");
            return $query;
        }
        
        public function display_size(){
            $query = $this->db->get('menu_size')->result();
            return $query;
        }
        
        public function display_size_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('menu_size')->result();
            return $query;
        }
        
        public function insert_size($data){
            $query = $this->db->insert('menu_size', $data);
            return $query;
        }
        
        public function update_size($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('menu_size', $data);
            return $query;
        }
        
        public function delete_size($id){
            $query = $this->db->query("DELETE FROM menu_size WHERE id = '$id' ");
            return $query;
        }
        
        // End of Menu 
        
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
        
        public function update_course_video($id, $data){
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
        
        // About Us 
        
        public function display_about(){
            $query = $this->db->get('about')->result();
            return $query;
        }
        
        public function display_about_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('about')->result();
            return $query;
        }
        
        public function insert_about($data){
            $query = $this->db->insert('about', $data);
            return $query;
        }
        
        public function update_about($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('about', $data);
            return $query;
        }
        
        public function delete_about($id){
            $query = $this->db->query("DELETE FROM about WHERE id = '$id' ");
            return $query;
        }
        
        // About Us Objective
        
        public function display_about_objective(){
            $query = $this->db->get('about_objective')->result();
            return $query;
        }
        
        public function display_about_objective_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('about_objective')->result();
            return $query;
        }
        
        public function insert_about_objective($data){
            $query = $this->db->insert('about_objective', $data);
            return $query;
        }
        
        public function update_about_objective($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('about_objective', $data);
            return $query;
        }
        
        public function delete_about_objective($id){
            $query = $this->db->query("DELETE FROM about_objective WHERE id = '$id' ");
            return $query;
        }
        
        // End of About Us objective
        
        // About Us feature
        
        public function display_about_feature(){
            $query = $this->db->get('about_feature')->result();
            return $query;
        }
        
        public function display_about_feature_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('about_feature')->result();
            return $query;
        }
        
        public function insert_about_feature($data){
            $query = $this->db->insert('about_feature', $data);
            return $query;
        }
        
        public function update_about_feature($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('about_feature', $data);
            return $query;
        }
        
        public function delete_about_feature($id){
            $query = $this->db->query("DELETE FROM about_feature WHERE id = '$id' ");
            return $query;
        }
        
        // End of About Us feature
        
        // End of About Us
        
        // Covid-19
        
        public function display_covid19(){
            $query = $this->db->get('covid19')->result();
            return $query;
        }
        
        public function display_covid19_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('covid19')->result();
            return $query;
        }
        
        public function insert_covid19($data){
            $query = $this->db->insert('covid19', $data);
            return $query;
        }
        
        public function update_covid19($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('covid19', $data);
            return $query;
        }
        
        public function delete_covid19($id){
            $query = $this->db->query("DELETE FROM covid19 WHERE id = '$id' ");
            return $query;
        }
        
        // End of Covid-19
        
        // Elimu Pillar
        
        public function display_elimu_pillar(){
            $query = $this->db->get('elimu_pillar')->result();
            return $query;
        }
        
        public function display_elimu_pillar_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('elimu_pillar')->result();
            return $query;
        }
        
        public function insert_elimu_pillar($data){
            $query = $this->db->insert('elimu_pillar', $data);
            return $query;
        }
        
        public function update_elimu_pillar($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('elimu_pillar', $data);
            return $query;
        }
        
        public function delete_elimu_pillar($id){
            $query = $this->db->query("DELETE FROM elimu_pillar WHERE id = '$id' ");
            return $query;
        }
        
        // End of Elimu Pillar
        
        // Event
        
        public function display_event(){
            $query = $this->db->get('event')->result();
            return $query;
        }
        
        public function display_event_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('event')->result();
            return $query;
        }
        
        public function insert_event($data){
            $query = $this->db->insert('event', $data);
            return $query;
        }
        
        public function update_event($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('event', $data);
            return $query;
        }
        
        public function delete_event($id){
            $query = $this->db->query("DELETE FROM event WHERE id = '$id' ");
            return $query;
        }
        
        // Event posters
        
        public function display_event_poster(){
            $query = $this->db->get('event_poster')->result();
            return $query;
        }
        
        public function display_event_poster_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('event_poster')->result();
            return $query;
        }
        
        public function insert_event_poster($data){
            $query = $this->db->insert('event_poster', $data);
            return $query;
        }
        
        public function update_event_poster($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('event_poster', $data);
            return $query;
        }
        
        public function delete_event_poster($id){
            $query = $this->db->query("DELETE FROM event_poster WHERE id = '$id' ");
            return $query;
        }
        
        // End of Event posters
        
        // End of Event
        
        // Opportunity
        
        public function display_opportunity(){
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
        
        public function update_opportunity($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('opportunity', $data);
            return $query;
        }
        
        public function delete_opportunity($id){
            $query = $this->db->query("DELETE FROM opportunity WHERE id = '$id' ");
            return $query;
        }
        
        // End of Opportunity
        
        // Skill Centre
        
        public function display_skill_centre(){
            $query = $this->db->get('skill_centre')->result();
            return $query;
        }
        
        public function display_skill_centre_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('skill_centre')->result();
            return $query;
        }
        
        public function insert_skill_centre($data){
            $query = $this->db->insert('skill_centre', $data);
            return $query;
        }
        
        public function update_skill_centre($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('skill_centre', $data);
            return $query;
        }
        
        public function delete_skill_centre($id){
            $query = $this->db->query("DELETE FROM skill_centre WHERE id = '$id' ");
            return $query;
        }
        
        // End of Skill Centre
        
        // Home
        
        public function display_home(){
            $query = $this->db->get('home')->result();
            return $query;
        }
        
        public function display_home_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('home')->result();
            return $query;
        }
        
        public function insert_home($data){
            $query = $this->db->insert('home', $data);
            return $query;
        }
        
        public function update_home($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('home', $data);
            return $query;
        }
        
        public function delete_home($id){
            $query = $this->db->query("DELETE FROM home WHERE id = '$id' ");
            return $query;
        }
        
        // Home Supporter
        
        public function display_home_supporter(){
            $query = $this->db->get('home_supporter')->result();
            return $query;
        }
        
        public function display_home_supporter_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('home_supporter')->result();
            return $query;
        }
        
        public function insert_home_supporter($data){
            $query = $this->db->insert('home_supporter', $data);
            return $query;
        }
        
        public function update_home_supporter($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('home_supporter', $data);
            return $query;
        }
        
        public function delete_home_supporter($id){
            $query = $this->db->query("DELETE FROM home_supporter WHERE id = '$id' ");
            return $query;
        }
        
        // Home Supporter
        
        // End of Home
        
        // Testimonial 
        
        public function display_testimonial(){
            $query = $this->db->get('testimonial')->result();
            return $query;
        }
        
        public function display_testimonial_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('testimonial')->result();
            return $query;
        }
        
        public function insert_testimonial($data){
            $query = $this->db->insert('testimonial', $data);
            return $query;
        }
        
        public function update_testimonial($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('testimonial', $data);
            return $query;
        }
        
        public function delete_testimonial($id){
            $query = $this->db->query("DELETE FROM testimonial WHERE id = '$id' ");
            return $query;
        }
        
        // End of Testimonial 
        
        // Career Interest 
        
        public function display_career_interest(){
            $query = $this->db->get('career_interest')->result();
            return $query;
        }
        
        public function display_career_interest_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('career_interest')->result();
            return $query;
        }
        
        public function insert_career_interest($data){
            $query = $this->db->insert('career_interest', $data);
            return $query;
        }
        
        public function update_career_interest($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('career_interest', $data);
            return $query;
        }
        
        public function delete_career_interest($id){
            $query = $this->db->query("DELETE FROM career_interest WHERE id = '$id' ");
            return $query;
        }
        
        // End of Career Interest
        
        // Events 
        
        public function display_all_events(){
            $this->db->order_by('title', 'ASC');
            $query = $this->db->get('events')->result();
            return $query;
        }
        
        public function display_events_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('events')->result();
            return $query;
        }
        
        public function insert_events($data){
            $query = $this->db->insert('events', $data);
            return $query;
        }
        
        public function update_events($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('events', $data);
            return $query;
        }
        
        public function delete_events($id){
            $query = $this->db->query("DELETE FROM events WHERE id = '$id' ");
            return $query;
        }
        
        // End of Events 
        
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
            $this->db->where('membership', 'Visionary');
            $query = $this->db->get('users')->result();
            return $query;
        }
        
        public function display_visionary_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('users')->result();
            return $query;
        }
        
        public function insert_visionary($data){
            $query = $this->db->insert('users', $data);
            return $query;
        }
        
        public function update_visionary_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('users', $data);
            return $query;
        }
        
        public function update_visionary_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('users', $data);
            return $query;
        }
        
        public function delete_visionary($id){
            $query = $this->db->query("DELETE FROM users WHERE id = '$id' ");
            return $query;
        }
        
        // End of Visionary 
        
        // Role Model 
        
        public function display_role_model(){
            $this->db->where('membership', 'Role Model');
            $query = $this->db->get('users')->result();
            return $query;
        }
        
        public function display_role_model_by_id($id){
            $this->db->where('id', $id);
            $query = $this->db->get('users')->result();
            return $query;
        }
        
        public function insert_role_model($data){
            $query = $this->db->insert('users', $data);
            return $query;
        }
        
        public function update_role_model_info($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('users', $data);
            return $query;
        }
        
        public function update_role_model_image($id, $data){
            $this->db->where('id', $id);
            $query = $this->db->update('users', $data);
            return $query;
        }
        
        public function delete_role_model($id){
            $query = $this->db->query("DELETE FROM users WHERE id = '$id' ");
            return $query;
        }
        
        // End of Role Model 
        
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