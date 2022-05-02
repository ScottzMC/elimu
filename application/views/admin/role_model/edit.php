<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<?php
foreach($role_model as $role){}
?>
<title>Edit Role Model || Admin</title>

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
                        <h1 class="page-title">Edit Role Model</h1>
                        <ol class="breadcrumb page-breadcrumb">
                          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/role_model'); ?>">Role Model</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit <?php echo $role->fullname; ?></li>
                        </ol>
                    </div>

                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Role-edit">Edit Role Model</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Role-edit">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Visionary</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/role_model/edit/'.$role->id); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>FullName <span class="text-danger">*</span></label>
                                                <input type="text" name="fullname" class="form-control" value="<?php echo $role->fullname; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Occupation <span class="text-danger">*</span></label>
                                                <input type="text" name="occupation" class="form-control" value="<?php echo $role->fullname; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Career Interest <span class="text-danger">*</span></label>
                                                <input type="text" name="career_interest" class="form-control" value="<?php echo $role->career_interest; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Personal Interest <span class="text-danger">*</span></label>
                                                <input type="text" name="personal_interest" class="form-control" value="<?php echo $role->personal_interest; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Why are you signing up? <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="signing_up" rows="5" cols="5" placeholder="Why are you signing up?"><?php echo $role->signing_up; ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>What can you bring to the community?<span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="bring_to_community" rows="5" cols="5" placeholder="What can you bring to the community?"><?php echo $role->bring_to_community; ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Link to social media <span class="text-danger">*</span></label>
                                                <input type="text" name="social_url" class="form-control" value="<?php echo $role->social_url; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>What are you hoping to get?<span class="text-danger">*</span></label>
                                                <input type="checkbox" class="form-control" name="hoping_to_get[]" value="Become an ambassador"> Become an ambassador
                                                <br>
                                                <input type="checkbox" class="form-control" name="hoping_to_get[]" value="Deliver a Workshop"> Deliver a Workshop
                                                <br>
                                                <input type="checkbox" class="form-control" class="form-control" name="hoping_to_get[]" value="Mentor"> Mentor
                                                <br>
                                                <input type="checkbox" class="form-control" class="form-control" name="hoping_to_get[]" value="Share your skills"> Share your skills
                                                <br>
                                                <input type="checkbox" class="form-control" name="hoping_to_get[]" value="Attend events"> Attend events
                                                <br>
                                                <input type="checkbox" class="form-control" name="hoping_to_get[]" value="Become a fellow"> Become a fellow
                                                <br>
                                                <input type="checkbox" class="form-control" name="hoping_to_get[]" value="Gain entrepreneurship skills"> Gain entrepreneurship skills
                                                <br>
                                                <input type="checkbox" class="form-control" name="hoping_to_get[]" value="Mentor"> Mentor
                                                <br>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea id="summernote" name="description" class="form-control" aria-label="With textarea"><?php echo $role->description; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-right m-t-20">
                                            <button type="submit" name="edit" class="btn btn-primary">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                                
                                <form action="<?php echo base_url('admin/role_model/edit_image/'.$role->id); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Banner <span class="text-danger">*</span></label>
                                                <input type="file" name="userFiles1[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-right m-t-20">
                                            <button type="submit" name="edit_image" class="btn btn-primary">SAVE</button>
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
