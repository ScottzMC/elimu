<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>About Us || Admin || Elimu</title>

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
                        <h1 class="page-title">About Us</h1>
                        <ol class="breadcrumb page-breadcrumb">
                          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </div>

                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#About-all">View About Us</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#About-add">Add About Us</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#About-objective-add">Add About Objective</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#About-feature-add">Add About Feature</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    
                    <!-- Role Model -->
                    <div class="tab-pane active" id="About-all">
                        <script>
                        function delete_about(id){
                          var del_id = id;
                          if(confirm("Are you sure you want to delete this about")){
                          $.post('<?php echo base_url('admin/about/delete_about'); ?>', {"del_id": del_id}, function(data){
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
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php if($about){ foreach($about as $abt){ ?>
                                    <tr>
                                        <td><?php echo $abt->id; ?></td>
                                        <td class="w60">
                                            <img class="avatar" src="<?php echo base_url('uploads/about_us/'.$abt->image); ?>" alt="<?php echo $abt->title; ?>">
                                        </td>
                                        <td><span class="font-16"><?php echo $abt->title; ?></span></td>
                                        <td><?php echo $abt->body; ?></td>
                                        <td><a href="<?php echo site_url('admin/about/edit/'.$abt->id); ?>">Edit</a></td>
                                        <td><button type="button" onclick="delete_about(<?php echo $abt->id; ?>)">Delete</button></td>
                                    </tr>
                                  <?php } }else{ echo ''; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane show" id="About-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add About Us</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/about/add'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea id="summernote" name="body" class="form-control" aria-label="With textarea"></textarea>
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
                    <!-- End of Role Model -->
                    
                    <div class="tab-pane show" id="About-objective-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">About Us Objective</h3>
                            </div>
                            <?php if(!empty($about_objective)){ foreach($about_objective as $objective){ ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="form-group">
                                            <h5><?php echo $objective->mission_title; ?></h5>
                                        </div>
                                        <div class="form-group">
                                            <p><?php echo $objective->mission_body; ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="form-group">
                                            <h5><?php echo $objective->vision_title; ?></h5>
                                        </div>
                                        <div class="form-group">
                                            <p><?php echo $objective->vision_body; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <a href="<?php echo site_url('admin/about/edit_objective/'.$objective->id); ?>" class="btn btn-primary">EDIT</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <button type="button" onclick="delete_objective(<?php echo $col->id; ?>)" class="btn btn-primary">DELETE</button>
                                    </div>
                                </div>
                            </div>
                            <?php } } ?>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">About Objective</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/about/add_objective'); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Mission statement <span class="text-danger">*</span></label>
                                                <input type="text" name="mission_title" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Mission Description</label>
                                                <textarea id="summernote" name="mission_body" class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Vision statement <span class="text-danger">*</span></label>
                                                <input type="text" name="vision_title" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Vision Description</label>
                                                <textarea id="summernote" name="vision_body" class="form-control" aria-label="With textarea"></textarea>
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
                    
                    <div class="tab-pane show" id="About-feature-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">About Us Feature</h3>
                            </div>
                            <?php if(!empty($about_feature)){ foreach($about_feature as $feature){ ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="form-group">
                                            <h5><?php echo $feature->icon; ?></h5>
                                        </div>
                                        <div class="form-group">
                                            <h5><?php echo $feature->title; ?></h5>
                                        </div>
                                        <div class="form-group">
                                            <p><?php echo $feature->body; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <a href="<?php echo site_url('admin/about/edit_feature/'.$col->id); ?>" class="btn btn-primary">EDIT</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <button type="button" onclick="delete_feature(<?php echo $col->id; ?>)" class="btn btn-primary">DELETE</button>
                                    </div>
                                </div>
                            </div>
                            <?php } } ?>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">About Feature</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/about/add_feature'); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Icon <span class="text-danger">*</span></label>
                                                <input type="text" name="icon" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Body</label>
                                            <textarea id="summernote" name="body" class="form-control" aria-label="With textarea"></textarea>
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
                    
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('menu/admin/script'); ?>

</body>
</html>
