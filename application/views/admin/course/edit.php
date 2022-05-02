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
<title>Edit Course Content || Admin</title>

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
                        <h1 class="page-title">Edit Course Content</h1>
                        <ol class="breadcrumb page-breadcrumb">
                          <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
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
                                <form action="<?php echo base_url('admin/course/edit/'.$course->id); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
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
                                                <label>Video Url <span class="text-danger">(Copy the slug or text after the YouTube link. https://youtube.com/[abcedkoe])</span></label>
                                                <!--<input type="file" name="userFiles1[]" class="form-control">-->
                                                <input class="form-control" type="text" name="video_url" value="<?php echo $course->video_url; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Playlist Url <span class="text-danger">(Copy the slug or text after the YouTube Playlist link. https://youtube.com/[abcedkoe])</span></label>
                                                <input class="form-control" type="text" name="playlist" value="<?php echo $course->playlist; ?>">
                                            </div>
                                        </div>
                                        
                                        <!--<div class="col-md-4 col-sm-12">
                                          <div class="form-group">
                                              <label>Lesson</label>
                                              <select name="lesson" class="form-control">
                                               <option value="< ?php echo $course->lesson; ?>">< ?php echo $course->lesson; ?></option>
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
                                               <option value="< ?php echo $course->sub_lesson_no; ?>">< ?php echo $course->sub_lesson_no; ?></option>
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
                                                <input type="text" name="sub_lesson_title" class="form-control" value="< ?php echo $course->sub_lesson_title; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Body</label>
                                                <textarea id="summernote" name="body" class="form-control" aria-label="With textarea">< ?php echo $course->body; ?></textarea>
                                            </div>
                                        </div>-->
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-right m-t-20">
                                            <button type="submit" name="edit" class="btn btn-primary">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                                
                                <!--<form action="< ?php echo base_url('admin/edit_course_image/'.$course->id); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
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
                                </form>-->
                        </div>
                        
                        <!--<div class="card-body">        
                                <form action="< ?php echo base_url('admin/edit_course_video/'.$course->id); ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Video <span class="text-danger">*</span></label>
                                                <input type="file" name="userFiles1[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 text-right m-t-20">
                                            <button type="submit" name="edit_video" class="btn btn-primary">SAVE</button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>-->
                            
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
