<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php foreach($launchpad as $launch){} ?>
    <title>Launchpad <?php echo str_replace('-', ' ', $launch->title); ?> Content || Elimu</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/elimu-logo-3.png'); ?>">

    <!-- CSS
	============================================ -->

    <?php $this->load->view('menu/member/style'); ?>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

    <?php foreach($profile as $prof){} ?>

<body>

    <div class="main-wrapper">

        <!-- Login Header Start -->
        <div class="section login-header">
            <!-- Login Header Wrapper Start -->
            <div class="login-header-wrapper navbar navbar-expand">

                <!-- Header Logo Start -->
                <div class="login-header-logo">
                    <a href="#"><img style="height: 90px; width: auto;" src="<?php echo base_url('assets/images/elimu-logo-3.png'); ?>" alt="Logo"></a></li>
                </div>
                <!-- Header Logo End -->

                <!-- Header Search Start -->
                <div class="login-header-search dropdown">
                </div>
                <!-- Header Search End -->

                <!-- Header Action Start -->
                <div class="login-header-action ml-auto">

                    <a class="action author" href="#">
                        <img height="60" width="80" src="<?php echo base_url('uploads/profile/'.$prof->image); ?>" alt="Author">
                    </a>

                    <div class="dropdown">
                        <button class="action more" data-bs-toggle="dropdown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="" href="<?php echo site_url('members/profile'); ?>"><i class="icofont-user"></i> Profile</a></li>
                            <li><a class="" href="<?php echo site_url('members/message'); ?>"><i class="icofont-user"></i> Message</a></li>
                            <li><a class="" href="<?php echo site_url('logout'); ?>"><i class="icofont-logout"></i> Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Action End -->

            </div>
            <!-- Login Header Wrapper End -->
        </div>
        <!-- Login Header End -->

        <!-- Courses Enroll Start -->
        <div class="section">

            <!-- Courses Enroll Wrapper Start -->
            <div class="courses-enroll-wrapper">

                <!-- Courses Video Player Start -->
                <div class="courses-video-player">

                    <!-- Courses Video Container Start -->
                    <div class="vidcontainer">
                        <iframe height="690" style="width: 100%;" src="https://www.youtube.com/embed/<?php echo $launch->video_url; ?>?autoplay=1&loop=1&list=<?php echo $launch->playlist; ?>&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <!--<div class="video-play-bar">
                            <div class="topControl">
                                <div class="progress">
                                    <span class="bufferBar"></span>
                                    <span class="timeBar"></span>
                                </div>
                                <div class="time">
                                    <span class="current"></span> /
                                    <span class="duration"></span>
                                </div>
                            </div>

                            <div class="controllers">
                                <div class="controllers-left">
                                    <button class="prevvid disabled" title="Previous video"><i class="icofont-ui-previous"></i></button>
                                    <button class="btnPlay" title="Play/Pause video"></button>
                                    <button class="nextvid" title="Next video"><i class="icofont-ui-next"></i></button>
                                    <button class="sound sound2" title="Mute/Unmute sound"></button>
                                    <div class="volume" title="Set volume">
                                        <span class="volumeBar"></span>
                                    </div>
                                </div>

                                <div class="controllers-right">
                                    <button class="btnspeed" title="Video speed"><i class="fa fa-gear"></i></button>
                                    <ul class="speedcnt">
                                        <li class="spdx50">1.5</li>
                                        <li class="spdx25">1.25</li>
                                        <li class="spdx1 selected">Normal</li>
                                        <li class="spdx050">0.5</li>
                                    </ul>
                                    <button class="btnFS" title="full screen"></button>
                                </div>
                            </div>
                        </div>

                        <div class="bigplay" title="play the video">
                            <i class="fa fa-play"></i>
                        </div>

                        <div class="loading">
                            <div class="spinner-border spinner">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>-->

                    </div>
                    <!-- Courses Video Container End -->

                    <!-- Courses Enroll Content Start -->
                    <div class="courses-enroll-content">

                        <!-- Courses Enroll Title Start -->
                        <div class="courses-enroll-title">
                            <h2 class="title"><?php echo str_replace('-', ' ', $launch->title); ?></h2>
                        </div>
                        <!-- Courses Enroll Title End -->
                        
                        <script>
                            function backDashboard(){
                                window.location.href="<?php echo site_url('members/dashboard'); ?>";
                            }
                        </script>

                        <!-- Courses Enroll Tab Start -->
                        <div class="courses-enroll-tab">
                            <div class="enroll-tab-menu">
                                <ul class="nav">
                                    <li><button type="button" onclick="backDashboard()">Back to Dashboard</button></li>
                                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Overview</button></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Courses Enroll Tab End -->

                        <!-- Courses Enroll Tab Content Start -->
                        <div class="courses-enroll-tab-content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">

                                    <!-- Overview Start -->
                                    <div class="overview">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="enroll-tab-title">
                                                    <h3 class="title">Course Details</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="enroll-tab-content">
                                                    <p><?php echo $launch->body; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Overview End -->

                                </div>
                            
                            </div>
                        </div>
                        <!-- Courses Enroll Tab Content End -->

                    </div>
                    <!-- Courses Enroll Content End -->
                </div>
                <!-- Courses Video Player End -->

                <!-- Courses Video Playlist Start 
                <div class="courses-video-playlist">
                    <div class="playlist-title">
                        <h3 class="title">Course Content</h3>
                        <span>Lessons</span>
                    </div>

                    <!-- Video Playlist Start 
                    <div class="video-playlist">
                        <div class="accordion" id="videoPlaylist">

                            <!-- Accordion Items Start 
                            < ?php 
                            $query_launchpad = $this->db->query("SELECT DISTINCT(lesson) FROM course WHERE category = '$launch->category' ")->result();
                            foreach($query_launchpad as $qry_launch){ 
                            ?>
                            <div class="accordion-item">
                                <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse< ?php echo $qry_launch->lesson; ?>">
                                    <p>Lesson < ?php echo $qry_launch->lesson; ?></p>
                                    <!--<span class="total-duration">01 hour 15 minutes</span>
                                </button>

                                <div id="collapse< ?php echo $qry_launch->lesson; ?>" class="accordion-collapse collapse" data-bs-parent="#videoPlaylist">
                                    <nav class="vids">
                                        < ?php 
                                        $query = $this->db->query("SELECT DISTINCT(lesson) FROM course WHERE category = '$launch->category' ")->result();
                                        foreach($query as $qry){} 
                                        
                                        $sequel = $this->db->query("SELECT * FROM course WHERE lesson = '$qry->lesson' AND category = '$launch->category' AND title = '$launch->title' 
                                        ORDER BY sub_lesson_no ASC")->result();
                                        foreach($sequel as $sql){
                                        ?>
                                        <a class="link" href="< ?php echo base_url('uploads/video/'.$sql->video_url); ?>">
                                            <p>< ?php echo $sql->sub_lesson_no; ?> < ?php echo $sql->sub_lesson_title; ?></p>
                                    <span class="total-duration">01 hour 15 minutes</span>
                                        </a>
                                        
                                        < ?php } ?>
                                    </nav>
                                </div>
                            </div>
                            < ?php } ?>
                            <!-- Accordion Items End  
                        
                        </div>
                    </div>
                    <!-- Video Playlist End 

                </div>
                <!-- Courses Video Playlist End -->

            </div>
            <!-- Courses Enroll Wrapper End -->

        </div>
        <!-- Courses Enroll End -->

        <?php $this->load->view('menu/member/footer'); ?>

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>

    <!-- JS
    ============================================ -->

    <?php $this->load->view('menu/member/script'); ?>

</body>

</html>