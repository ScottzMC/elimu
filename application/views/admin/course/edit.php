<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<?php
foreach($course_content as $course){}
?>
<title>Edit Course Content || Admin || Spiela</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="<?php echo base_url('admin/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('admin/assets/plugins/dropify/css/dropify.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('admin/assets/plugins/sweetalert/sweetalert.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('admin/assets/plugins/datatable/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('admin/assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('admin/assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css'); ?>">


<!-- Core css -->
<link rel="stylesheet" href="<?php echo base_url('admin/assets/css/style.min.css'); ?>"/>
</head>

<body class="font-muli theme-cyan gradient">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    <!-- Start project content area -->
    <?php include('menu/nav.php'); ?>
    <div class="page">
        <!-- Start Page header -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title">Edit Course Content</h1>
                        <ol class="breadcrumb page-breadcrumb">
                          <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit <?php echo $course->title; ?></li>
                        </ol>
                    </div>

                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Course-Content-edit">Edit Course Content</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Course-Content-edit">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Course Content</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url('admin/edit_course/'.$course->id); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Title <span class="text-danger">*</span></label>
                                                <input type="text" name="title" class="form-control" value="<?php echo $course->title; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                          <div class="form-group">
                                              <label>Category</label>
                                              <select name="category" class="form-control">
                                               <option value="<?php echo $course->category; ?>"><?php echo $course->category; ?></option>
                                   			   <option value="Launchpad">Launchpad</option>
                                   			   <option value="Fellowship">Fellowship</option>
                                              </select>
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                          <div class="form-group">
                                              <label>Lesson</label>
                                              <select name="lesson" class="form-control">
                                               <option value="<?php echo $course->lesson; ?>"><?php echo $course->lesson; ?></option>
                                   			   <option value="01">01</option>
                                   			   <option value="02">02</option>
                                   			   <option value="03">03</option>
                                   			   <option value="04">04</option>
                                   			   <option value="05">05</option>
                                   			   <option value="06">06</option>
                                   			   <option value="07">07</option>
                                   			   <option value="08">08</option>
                                   			   <option value="09">09</option>
                                   			   <option value="10">10</option>
                                   			   <option value="11">11</option>
                                   			   <option value="12">12</option>
                                   			   <option value="13">13</option>
                                   			   <option value="14">14</option>
                                   			   <option value="15">15</option>
                                   			   <option value="16">16</option>
                                   			   <option value="17">17</option>
                                   			   <option value="18">18</option>
                                   			   <option value="19">19</option>
                                   			   <option value="20">20</option>
                                   			   <option value="21">21</option>
                                   			   <option value="22">22</option>
                                   			   <option value="23">23</option>
                                   			   <option value="24">24</option>
                                   			   <option value="25">25</option>
                                              </select>
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                          <div class="form-group">
                                              <label>Sub-Lesson Number</label>
                                              <select name="sub_lesson_no" class="form-control">
                                               <option value="<?php echo $course->sub_lesson_no; ?>"><?php echo $course->sub_lesson_no; ?></option>
                                   			   <option value="01">01</option>
                                   			   <option value="02">02</option>
                                   			   <option value="03">03</option>
                                   			   <option value="04">04</option>
                                   			   <option value="05">05</option>
                                   			   <option value="06">06</option>
                                   			   <option value="07">07</option>
                                   			   <option value="08">08</option>
                                   			   <option value="09">09</option>
                                   			   <option value="10">10</option>
                                   			   <option value="11">11</option>
                                   			   <option value="12">12</option>
                                   			   <option value="13">13</option>
                                   			   <option value="14">14</option>
                                   			   <option value="15">15</option>
                                   			   <option value="16">16</option>
                                   			   <option value="17">17</option>
                                   			   <option value="18">18</option>
                                   			   <option value="19">19</option>
                                   			   <option value="20">20</option>
                                   			   <option value="21">21</option>
                                   			   <option value="22">22</option>
                                   			   <option value="23">23</option>
                                   			   <option value="24">24</option>
                                   			   <option value="25">25</option>
                                              </select>
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Sub-Lesson Title <span class="text-danger">*</span></label>
                                                <input type="text" name="sub_lesson_title" class="form-control" value="<?php echo $course->sub_lesson_title; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Video URL <span class="text-danger">*</span></label>
                                                <input type="text" name="video_url" class="form-control" value="<?php echo $course->video_url; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Body</label>
                                                <textarea name="body" class="form-control" aria-label="With textarea"><?php echo $course->body; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-right m-t-20">
                                            <button type="submit" name="edit" class="btn btn-primary">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                                
                                <form action="<?php echo base_url('admin/edit_course_image/'.$course->id); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
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

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="<?php echo base_url('admin/assets/bundles/lib.vendor.bundle.js'); ?>"></script>

<!-- Start Plugin Js -->
<script src="<?php echo base_url('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('admin/assets/plugins/dropify/js/dropify.min.js'); ?>"></script>
<script src="<?php echo base_url('admin/assets/bundles/dataTables.bundle.js'); ?>"></script>
<script src="<?php echo base_url('admin/assets/plugins/sweetalert/sweetalert.min.js'); ?>"></script>

<!-- Start project main js  and page js -->
<script src="<?php echo base_url('admin/assets/js/core.js'); ?>"></script>
<script src="<?php echo base_url('admin/assets/js/form/dropify.js'); ?>"></script>
<script src="<?php echo base_url('admin/assets/js/page/dialogs.js'); ?>"></script>
<script src="<?php echo base_url('admin/assets/js/table/datatable.js'); ?>"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>-->

<script>
$(document).ready(function() {
      $('#summernote').summernote({
          tabsize: 2,
          height: 200
      });
  });
</script>

</body>
</html>
