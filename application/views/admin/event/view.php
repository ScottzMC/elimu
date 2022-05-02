<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>Event || Admin || Elimu</title>

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
                        <h1 class="page-title">Event</h1>
                        <ol class="breadcrumb page-breadcrumb">
                          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event</li>
                        </ol>
                    </div>

                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Event-all">View Event</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Event-add">Add Event</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Event-poster-add">Add Event Posters</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    
                    <!-- Role Model -->
                    <div class="tab-pane active" id="Event-all">
                        <script>
                        function delete_event(id){
                          var del_id = id;
                          if(confirm("Are you sure you want to delete this event")){
                          $.post('<?php echo base_url('admin/event/delete_event'); ?>', {"del_id": del_id}, function(data){
                            alert('Deleted Successfully');
                            location.reload();
                            $('#cti').html(data)
                            });
                          }
                        }
                        
                        function delete_poster(id){
                          var del_id = id;
                          if(confirm("Are you sure you want to delete this poster")){
                          $.post('<?php echo base_url('admin/event/delete_poster'); ?>', {"del_id": del_id}, function(data){
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
                                  <?php if($event){ foreach($event as $eve){ ?>
                                    <tr>
                                        <td><?php echo $eve->id; ?></td>
                                        <td class="w60">
                                            <img class="avatar" src="<?php echo base_url('uploads/event/'.$eve->image); ?>" alt="<?php echo $eve->title; ?>">
                                        </td>
                                        <td><span class="font-16"><?php echo $eve->title; ?></span></td>
                                        <td><?php echo $eve->body; ?></td>
                                        <td><a href="<?php echo site_url('admin/event/edit/'.$eve->id); ?>">Edit</a></td>
                                        <td><button type="button" onclick="delete_event(<?php echo $eve->id; ?>)">Delete</button></td>
                                    </tr>
                                  <?php } }else{ echo ''; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane show" id="Event-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Event</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/event/add'); ?>" method="post" enctype="multipart/form-data">
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
                    
                    <div class="tab-pane show" id="Event-poster-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Event posters</h3>
                            </div>
                            <?php if(!empty($event_poster)){ foreach($event_poster as $poster){ ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="form-group">
                                            <img height="300" width="300" src="<?php echo base_url('uploads/event/'.$poster->image); ?>" alt="<?php echo $poster->title; ?>">
                                        </div>
                                        <div class="form-group">
                                            <h5><?php echo $poster->title; ?></h5>
                                        </div>
                                        <div class="form-group">
                                            <p><?php echo $poster->url; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <a href="<?php echo site_url('admin/event/edit_poster/'.$poster->id); ?>" class="btn btn-primary">EDIT</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <button type="button" onclick="delete_poster(<?php echo $poster->id; ?>)" class="btn btn-primary">DELETE</button>
                                    </div>
                                </div>
                            </div>
                            <?php } } ?>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Event Posters</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/event/add_poster'); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Event <span class="text-danger">*</span></label>
                                                <input type="text" name="mission_title" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Event URL</label>
                                                <input type="text" name="url" class="form-control" value="">
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
                    
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('menu/admin/script'); ?>

</body>
</html>
