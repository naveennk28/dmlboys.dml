<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- link to Font Awesome CSS -->
    <!-- link to Simple Line Icons CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>styles/admin4b.min.css">
    <title>DML Videos</title>
</head>
<body>

<div class="app">
    <div class="app-body">
        <div class="app-sidebar sidebar-slide-left">

            <!-- Header -->

            <div class="sidebar-header">
                <img src="<?php echo base_url();?>dp_images/gent.png" class="user-photo">
                <p class="username">Naveen</p>
            </div>

            <!-- Navigation -->

            <div id="sidebar-nav" class="sidebar-nav" data-children=".sidebar-nav-group">
                <div class="sidebar-nav-btn">
                    <a href="page.html" class="btn btn-block btn-outline-light">
                        SETTINGS
                    </a>
                </div>
                <div class="sidebar-nav-group">
                    <a href="<?php echo site_url('home'); ?>" class="sidebar-nav-link"><i class="icon-home"> HOME</i></a>
                </div>
                <div class="sidebar-nav-group">
                    <a href="<?php echo site_url('photos'); ?>" class="sidebar-nav-link"><i class="icon-fire"> PHOTOS</i></a>
                </div>
                <div class="sidebar-nav-group">
                    <a href="<?php echo site_url('dramas'); ?>" class="sidebar-nav-link"><i class="icon-link"> DRAMAS</i></a>
                </div>
                <div class="sidebar-nav-group">
                    <a href="<?php echo site_url('videos'); ?>" class="sidebar-nav-link"><i class="icon-doc"> VIDEOS</i></a>
                </div>
            </div>

            <!-- Footer -->

            <div class="sidebar-footer">
                <a href="#" data-toggle="tooltip" title="GitHub">
                    <i class="fa fa-github"></i>
                </a>

                <a href="#" data-toggle="tooltip" title="Logout">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>

        </div>
        <div class="app-content">

            <!-- Content -->

            <nav class="navbar navbar-expand navbar-light bg-white">
                <div class="navbar-brand">DML Admin</div>
            </nav>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Dramas</li>
                </ol>
            </nav>
            <div class="gallery">
                <div class="img-w">

                    <div class="row">
                        <?php foreach ($ans as $key) { ?>
                            <div class="col-sm-6">
                                <video width="320px" height="240px" controls class="video_player" id="player">
                                    <source src='<?php echo base_url(); ?>upload/dramas/<?php echo $key;?>' type="">
                                </video>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- script to jQuery -->
<!-- script to Popper -->

<script src="<?php echo base_url(); ?>styles/admin4b.min.js"></script>
</body>
</html>