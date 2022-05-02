<?php 
    
    class Shop extends CI_Controller{
        
        public function index(){
          $data['color'] = $this->Admin_model->display_color();
          $data['size'] = $this->Admin_model->display_size();
          $data['shop'] = $this->Admin_model->display_shop();    
          $data['orders'] = $this->Admin_model->display_orders();    
            
          $this->load->view('admin/shop/view', $data);
        }
        
        public function add(){
           $data['color'] = $this->Admin_model->display_color(); 
           $data['size'] = $this->Admin_model->display_size();
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
        
        public function edit($id){
          $data['color'] = $this->Admin_model->display_color();
          $data['size'] = $this->Admin_model->display_size();
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
        
        public function edit_image($id){
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
        
        // Color 
        
        public function add_color(){
          $title = $this->input->post('title');

          $array = array(
            'title' => $title,
          );
          
          $added = $this->Admin_model->insert_color($array);
          
          if($added){ ?>
             <script>
                 alert('Added Color');
                 window.location.href="<?php echo site_url('admin/shop'); ?>";
             </script> 
     <?php }else{ ?>
            <script>
                alert('Failed');
                window.location.href="<?php echo site_url('admin/shop'); ?>";
            </script>  
     <?php }
          
        }
        
        public function edit_color($id){
          $data['color'] = $this->Admin_model->display_color_by_id($id);

          $this->load->view('admin/shop/color', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');

              $array = array(
                'title' => $title,
              );
              
              $updated = $this->Admin_model->update_shop_info($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
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
        
        public function delete_color(){
            $id = $this->input->post('del_id');
            $this->Admin_model->delete_color($id); 
        }
        
        // End of Color 
        
        // Size 
        
        public function add_size(){
          $title = $this->input->post('title');

          $array = array(
            'title' => $title,
          );
          
          $added = $this->Admin_model->insert_size($array);
          
          if($added){ ?>
             <script>
                 alert('Added Size');
                 window.location.href="<?php echo site_url('admin/shop'); ?>";
             </script> 
     <?php }else{ ?>
            <script>
                alert('Failed');
                window.location.href="<?php echo site_url('admin/shop'); ?>";
            </script>  
     <?php }
          
        }
        
        public function edit_size($id){
          $data['size'] = $this->Admin_model->display_size_by_id($id);

          $this->load->view('admin/shop/size', $data); 
          
          $btn_submit = $this->input->post('edit');
           
           if(isset($btn_submit)){
              $title = $this->input->post('title');

              $array = array(
                'title' => $title,
              );
              
              $updated = $this->Admin_model->update_size($id, $array);
              
              if($updated){ ?>
                 <script>
                     alert('Updated Successfully');
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
        
        public function delete_size(){
            $id = $this->input->post('del_id');
            $this->Admin_model->delete_size($id); 
        }
        
        // End of Size 
    }

?>