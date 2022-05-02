<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>Shop || Admin || Elimu</title>

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
                        <h1 class="page-title">Dashboard</h1>
                        <ol class="breadcrumb page-breadcrumb">
                          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </div>

                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Shop-all">View Shop</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Shop-add">Add Shop</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Color-add">Add Color</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Size-add">Add Size</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Order-all">View Orders</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    
                    <!-- Shop -->
                    <div class="tab-pane active" id="Shop-all">
                        <script>
                        function delete_shop(id){
                          var del_id = id;
                          if(confirm("Are you sure you want to delete this shop")){
                          $.post('<?php echo base_url('admin/shop/delete_shop'); ?>', {"del_id": del_id}, function(data){
                            alert('Deleted Successfully');
                            location.reload();
                            $('#cti').html(data)
                            });
                          }
                        }
                        
                        function delete_color(id){
                          var del_id = id;
                          if(confirm("Are you sure you want to delete this color")){
                          $.post('<?php echo base_url('admin/shop/delete_color'); ?>', {"del_id": del_id}, function(data){
                            alert('Deleted Successfully');
                            location.reload();
                            $('#cti').html(data)
                            });
                          }
                        }
                        
                        function delete_size(id){
                          var del_id = id;
                          if(confirm("Are you sure you want to delete this size")){
                          $.post('<?php echo base_url('admin/shop/delete_size'); ?>', {"del_id": del_id}, function(data){
                            alert('Deleted Successfully');
                            location.reload();
                            $('#cti').html(data)
                            });
                          }
                        }
                        
                        function delete_order(id){
                          var del_id = id;
                          if(confirm("Are you sure you want to delete this order")){
                          $.post('<?php echo base_url('admin/shop/delete_order'); ?>', {"del_id": del_id}, function(data){
                            alert('Deleted Successfully');
                            location.reload();
                            $('#ctj').html(data)
                            });
                          }
                        }
                        
                        </script>

                        <p id='cti'></p>
                        <p id='ctj'></p>

                        <div class="table-responsive">
                          <table class="table table-hover table-vcenter text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php if($shop){ foreach($shop as $shp){ ?>
                                    <tr>
                                        <td><?php echo $shp->id; ?></td>
                                        <td class="w60">
                                            <img class="avatar" src="<?php echo base_url('uploads/shop/'.$shp->image); ?>" alt="">
                                        </td>
                                        <td><span class="font-16"><?php echo str_replace('-', ' ', $shp->title); ?></span></td>
                                        <td>&pound;<?php echo $shp->price; ?></td>
                                        <td><?php echo $shp->color; ?></td>
                                        <td><?php echo $shp->size; ?></td>
                                        <td><a href="<?php echo site_url('admin/shop/edit/'.$shp->id); ?>">Edit</a></td>
                                        <td><button type="button" onclick="delete_shop(<?php echo $shp->id; ?>)">Delete</button></td>
                                    </tr>
                                  <?php } }else{ echo ''; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane show" id="Shop-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Shop</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/shop/add'); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Price <span class="text-danger">*</span></label>
                                                <input type="text" name="price" class="form-control" value="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                          <div class="form-group">
                                              <label>Color</label>
                                              <select name="color" class="form-control">
                                               <option>-- Select --</option>
                                   			   <?php if(!empty($color)){ foreach($color as $col){ ?>
                                   			   <option value="<?php echo $col->title; ?>"><?php echo $col->title; ?></option>
                                   			   <?php } }else{ ?>
                                   			   <option>No color</option>
                                   			   <?php } ?>
                                              </select>
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                          <div class="form-group">
                                              <label>Size</label>
                                              <select name="size" class="form-control">
                                               <option>-- Select --</option>
                                   			   <?php if(!empty($size)){ foreach($size as $siz){ ?>
                                   			   <option value="<?php echo $siz->title; ?>"><?php echo $siz->title; ?></option>
                                   			   <?php } }else{ ?>
                                   			   <option>No size</option>
                                   			   <?php } ?>
                                              </select>
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Banner <span class="text-danger">*</span></label>
                                                <input type="file" name="userFiles1[]" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Body</label>
                                                <textarea name="body" class="form-control" aria-label="With textarea"></textarea>
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
                    
                    <div class="tab-pane show" id="Color-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Color</h3>
                            </div>
                            <?php if(!empty($color)){ foreach($color as $col){ ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <h5><?php echo $col->title; ?></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <a href="<?php echo site_url('admin/shop/edit_color/'.$col->id); ?>" class="btn btn-primary">EDIT</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <button type="button" onclick="delete_color(<?php echo $col->id; ?>)" class="btn btn-primary">DELETE</button>
                                    </div>
                                </div>
                            </div>
                            <?php } } ?>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Color</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/shop/add_color'); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control" value="">
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
                    
                    <div class="tab-pane show" id="Size-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Size</h3>
                            </div>
                            <?php if(!empty($size)){ foreach($size as $siz){ ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <h5><?php echo $siz->title; ?></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <a href="<?php echo site_url('admin/shop/edit_size/'.$siz->id); ?>" class="btn btn-primary">EDIT</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <button type="button" onclick="delete_size(<?php echo $col->id; ?>)" class="btn btn-primary">DELETE</button>
                                    </div>
                                </div>
                            </div>
                            <?php } } ?>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Size</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/shop/add_size'); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control" value="">
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
                    
                    <!-- Orders -->
                    <div class="tab-pane show" id="Order-all">

                        <div class="table-responsive">
                          <table class="table table-hover table-vcenter text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                <thead>
                                    <tr>
                                        <th>FullName</th>
                                        <th>Email</th>
                                        <th>Telephone Number</th>
                                        <th>Address</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php if($orders){ foreach($orders as $ord){ ?>
                                    <tr>
                                        <td><?php echo $ord->fullname; ?></td>
                                        <td><?php echo $ord->email; ?></td>
                                        <td><?php echo $ord->telephone; ?></td>
                                        <td><?php echo $ord->address; ?></td>
                                        <td class="w60">
                                            <img class="avatar" src="<?php echo base_url('uploads/shop/'.$ord->image); ?>" alt="">
                                        </td>
                                        <td><span class="font-16"><?php echo str_replace('-', ' ', $ord->title); ?></span></td>
                                        <td>&pound;<?php echo $ord->price; ?></td>
                                        <td><?php echo $ord->quantity; ?></td>
                                        <td><?php echo $ord->color; ?></td>
                                        <td><?php echo $ord->size; ?></td>
                                        <td><?php echo $ord->status; ?></td>
                                        <td><a href="<?php echo site_url('admin/shop/edit/'.$ord->id); ?>">Edit</a></td>
                                        <td><button type="button" onclick="delete_order(<?php echo $ord->id; ?>)">Delete</button></td>
                                    </tr>
                                  <?php } }else{ echo ''; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- End of Orders -->

                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('menu/admin/script'); ?>

</body>
</html>
