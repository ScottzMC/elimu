<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>Members || Admin</title>

<?php $this->load->view('menu/admin/style'); ?>

</head>

<body class="font-muli theme-cyan gradient">

<div id="main_content">
    <!-- Start project content area -->
    <?php $this->load->view('menu/admin/nav'); ?>
    <div class="page">
        <!-- Start Page header -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title">Members</h1>
                        <ol class="breadcrumb page-breadcrumb">
                          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Members</li>
                        </ol>
                    </div>

                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Members-all">View Members</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Members-add">Add Members</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    
                    <!-- Shop -->
                    <div class="tab-pane active" id="Members-all">
                        <script>
                        function delete_member(id){
                          var del_id = id;
                          if(confirm("Are you sure you want to delete this members")){
                          $.post('<?php echo base_url('admin/member/delete_member'); ?>', {"del_id": del_id}, function(data){
                            alert('Deleted Successfully');
                            location.reload();
                            $('#cti').html(data)
                            });
                          }
                        }
                        
                        </script>

                        <p id='cti'></p>

                        <div class="table-responsive">
                          <table class="table table-hover table-vcenter text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Membership</th>
                                        <th>Occupation</th>
                                        <th>Career Interest</th>
                                        <th>Personal Interest</th>
                                        <th>Why are you signing up?</th>
                                        <th>What are you hoping to get?</th>
                                        <th>What can you bring to the community?</th>
                                        <th>Social Link</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php if($member){ foreach($member as $mem){ ?>
                                    <tr>
                                        <td><?php echo $mem->id; ?></td>
                                        <td class="w60">
                                            <img class="avatar" src="<?php echo base_url('uploads/profile/'.$mem->image); ?>" alt="<?php echo $mem->fullname; ?>">
                                        </td>
                                        <td><span class="font-16"><?php echo $mem->fullname; ?></span></td>
                                        <td><span class="font-16"><?php echo $mem->email; ?></span></td>
                                        <td><?php echo $mem->role; ?></td>
                                        <td><?php echo $mem->membership; ?></td>
                                        <td><?php echo $mem->occupation; ?></td>
                                        <td><?php echo $mem->career_interest; ?></td>
                                        <td><?php echo $mem->personal_interest; ?></td>
                                        <td><?php echo $mem->signing_up; ?></td>
                                        <td><?php echo $mem->hoping_to_get; ?></td>
                                        <td><?php echo $mem->bring_to_community; ?></td>
                                        <?php if(!empty($mem->social_url)){ ?>
                                        <td><a href="<?php echo $mem->social_url; ?>">Click Link</a></td>
                                        <?php }else{ ?>
                                        <td></td>
                                        <?php } ?>
                                        <td><a href="<?php echo site_url('admin/member/edit/'.$mem->id); ?>">Edit</a></td>
                                        <td><button type="button" onclick="delete_member(<?php echo $mem->id; ?>)">Delete</button></td>
                                    </tr>
                                  <?php } }else{ echo ''; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane show" id="Members-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Members</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/member/add'); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>FullName <span class="text-danger">*</span></label>
                                                <input type="text" name="fullname" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Email Address <span class="text-danger">*</span></label>
                                                <input type="email" name="email" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <input type="password" name="password" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Career Interest <span class="text-danger">*</span></label>
                                                <input type="text" name="career_interest" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Personal Interest <span class="text-danger">*</span></label>
                                                <input type="text" name="personal_interest" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Occupation <span class="text-danger">*</span></label>
                                                <input type="text" name="occupation" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                          <div class="form-group">
                                              <label>Membership</label>
                                              <select name="membership" class="form-control">
                                               <option>-- Select --</option>
                                   			   <option value="Role Model">Role Model</option>
                                   			   <option value="Visionary">Visionary</option>
                                              </select>
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>What are you hoping to get? (Role Model) <span class="text-danger">*</span></label>
                                                <br>
                                                <input type="checkbox" name="role_hoping_to_get[]" value="Become an ambassador"> Become an ambassador
                                                <br>
                                                <input type="checkbox" name="role_hoping_to_get[]" value="Deliver a Workshop"> Deliver a Workshop
                                                <br>
                                                <input type="checkbox" name="role_hoping_to_get[]" value="Mentor"> Mentor
                                                <br>
                                                <input type="checkbox" name="role_hoping_to_get[]" value="Share your skills"> Share your skills
                                                <br>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>What are you hoping to get? (Visionary) <span class="text-danger">*</span></label>
                                                <br>
                                                <input type="checkbox" name="vision_hoping_to_get[]" value="Become an ambassador"> Become an ambassador
                                                <br>
                                                <input type="checkbox" name="vision_hoping_to_get[]" value="Deliver a Workshop"> Deliver a Workshop
                                                <br>
                                                <input type="checkbox" name="vision_hoping_to_get[]" value="Mentor"> Mentor
                                                <br>
                                                <input type="checkbox" name="vision_hoping_to_get[]" value="Share your skills"> Share your skills
                                                <br>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Why are you signing up?</label>
                                                <textarea id="summernote" name="signing_up" class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>What can you bring to the community?</label>
                                                <textarea id="summernote" name="bring_to_community" class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Link to social media <span class="text-danger">*</span></label>
                                                <input type="text" name="social_url" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Image <span class="text-danger">*</span></label>
                                                <input type="file" name="userFiles1[]" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-right m-t-20">
                                            <button type="submit" name="add" class="btn btn-primary">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End of Shop -->
                    
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('menu/admin/script'); ?>

</body>
</html>
