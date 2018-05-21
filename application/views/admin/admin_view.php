
<!DOCTYPE html>
<html>
<?php
$this->load->library('session');
if (isset($this->session->userdata['user'])) {
    $username = ($this->session->userdata['user']['name']);
    $username = ucfirst($username);
    $dp=($this->session->userdata['user']['dp']);
    $last_login=($this->session->userdata['user']['last_login']);
} else {
    header("location: login");
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DML Boys Admin Pannel</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url();?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

</head>
<body>
<!--  wrapper -->
<div id="wrapper">
    <!-- navbar top -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <!-- navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.html">
                <img src="<?php echo base_url();?>assets/img/logo.png" alt="" />
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- navbar-top-links -->
        <ul class="nav navbar-top-links navbar-right">
            <!-- main dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                </a>
                <!-- dropdown-messages -->
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong><span class=" label label-danger">Raj Kumar</span></strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Hii dude whats up what u doing...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong><span class=" label label-info">Mukesh Sugumar</span></strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>hi da. wht r u dnig nw. dude...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong><span class=" label label-success">Tamil Selvan</span></strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>hi bro. hw r u...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- end dropdown-messages -->
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                </a>
                <!-- dropdown alerts-->
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i>New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i>Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>

                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- end dropdown-alerts -->
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-3x"></i>
                </a>
                <!-- dropdown user-->
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/admin/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                </ul>
                <!-- end dropdown-user -->
            </li>
            <!-- end main dropdown -->
        </ul>
        <!-- end navbar-top-links -->

    </nav>
    <!-- end navbar top -->

    <!-- navbar side -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <!-- sidebar-collapse -->
        <div class="sidebar-collapse">
            <!-- side-menu -->
            <ul class="nav" id="side-menu">
                <li>
                    <!-- user image section-->
                    <div class="user-section">
                        <div class="user-section-inner">
                            <img src="<?php echo base_url();?>dp_images/<?php echo $dp;?>" class="user-photo">
                        </div>
                        <div class="user-info">
                            <div style="font-size:x-large;color: #f1d40f"><?php echo $username; ?> </div>
                            <div class="user-text-online">
                                <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                            </div>
                        </div>
                    </div>
                    <!--end user image section-->
                </li>
                <li class="sidebar-search">
                    <!-- search section-->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                    <!--end search section-->
                </li>
                <li class="selected">
                    <a href="../index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-file fa-fw"></i> Uploads<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li data-toggle="modal" data-target="#upload_pics">
                            <a><i class="fa fa-file fa-fw"></i> Photos</a>
                        </li>
                        <li data-toggle="modal" data-target="#upload_dramas">
                            <a><i class="fa fa-file fa-fw"></i> Dramas</a>
                        </li>
                        <li data-toggle="modal" data-target="#upload_videos">
                            <a><i class="fa fa-file fa-fw"></i> Videos</a>
                        </li>
                    </ul>
                    <!-- second-level-items -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-file fa-fw"></i> View<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a data-toggle="modal" href="#view_users"><i class="fa fa-file fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a data-toggle="modal" href="#view_pics"><i class="fa fa-file fa-fw"></i> Photos</a>
                        </li>
                        <li>
                            <a data-toggle="modal" href="#view_dramas"><i class="fa fa-file fa-fw"></i> Dramas</a>
                        </li>
                        <li>
                            <a data-toggle="modal" href="#view_videos"><i class="fa fa-file fa-fw"></i> Videos</a>
                        </li>
                    </ul>
                    <!-- second-level-items -->
                </li>
                <li>
                    <a><i class="fa fa-comments fa-fw"></i> Chat</a>
                </li>

            </ul>
            <!-- end side-menu -->
        </div>
        <!-- end sidebar-collapse -->
    </nav>
    <!-- end navbar side -->
    <!--  page-wrapper -->

    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-6">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <p class="page-header" style="font-size: large;color: #d43f3a">Last Used : <?php echo $last_login;?></p>
            </div>
            <div class="modal fade" id="upload_pics">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Upload Images</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">

                            <form enctype="multipart/form-data" method="post" action="admin/upload_pics">
                                <div class="form-group">
                                <input name="pics" type="file" multiple>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-2">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>

                                    <div class="form-group col-sm-2">
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>


                    </div>
                </div>
            </div>

            <div class="modal fade" id="view_pics">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Manage Images</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <table>
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image Name</th>
                                    <th>Image</th>
                                    <th>Manage</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $display_pics=array_combine($images,$id_img);
//                                print_r($display_pics);
//                                exit;
                                foreach ($display_pics as $index => $key1){?>
                                <tr>
                                    <td><?php echo $key1;?></td>
                                    <td><?php echo $index;?></td>
                                    <td><img src='<?php echo base_url(); ?>upload/photos/<?php echo $index;?>' class="img-thumbnail rounded-float-left" style="width: 50px;height: 50px"  alt="" /></td>
                                    <td>
                                        <button type="submit" class="btn btn-danger" onclick="game_delete(<?php echo $key1;?>)">delete</button>

                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>


                    </div>
                </div>
            </div>

            <div class="modal -fade" id="view_videos">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Manage Videos</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <table>
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Video Name</th>
                                    <th>Video</th>
                                    <th>Manage</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $display_video=array_combine($videos,$id_vid);
                                //                                print_r($display_pics);
                                //                                exit;
                                foreach ($display_video as $index_vid => $key2){?>
                                    <tr>
                                        <td><?php echo $key2;?></td>
                                        <td><?php echo $index_vid;?></td>
                                        <td><video width="150px" height="150px" controls class="video_player" id="player">
                                                <source src='<?php echo base_url(); ?>upload/dramas/<?php echo $index_vid;?>' type="">
                                            </video></td>
                                        <td>
                                            <button type="submit" class="btn btn-danger" onclick="delete_video(<?php echo $key2;?>)">delete</button>

                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>


                    </div>
                </div>
            </div>

            <div class="modal -fade" id="view_dramas">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Manage Dramas</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <table>
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Drama Name</th>
                                    <th>Video</th>
                                    <th>Manage</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $display_drama=array_combine($dramas,$id_dram);
                                //                                print_r($display_pics);
                                //                                exit;
                                foreach ($display_drama as $index_dram => $key3){?>
                                    <tr>
                                        <td><?php echo $key3;?></td>
                                        <td><?php echo $index_dram;?></td>
                                        <td><video width="150px" height="150px" controls class="video_player" id="player">
                                                <source src='<?php echo base_url(); ?>upload/dramas/<?php echo $index_dram;?>' type="">
                                            </video></td>
                                        <td>
                                            <button type="submit" class="btn btn-danger" onclick="delete_drama(<?php echo $key3;?>)">delete</button>

                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>


                    </div>
                </div>
            </div>

            <div class="modal fade" id="upload_videos">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Upload Videos</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form enctype="multipart/form-data" method="post" action="admin/upload_videos">
                                <div class="form-group">
                                    <input name="up_video" type="file" multiple>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-2">
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </div>
                            </form>


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="upload_dramas">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Upload Dramas</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form enctype="multipart/form-data" method="post" action="admin/upload_dramas">
                                <div class="form-group">
                                    <input name="up_drama" type="file" multiple>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-2">
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                    <div class="form-group col-sm-2">
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </div>
                            </form>


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">
            <!-- Welcome -->
            <div class="col-lg-12">
                <div class="alert alert-info">
                    <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Naveen Kumar </b>
                    <i class="fa  fa-pencil"></i> to<b>&nbsp;DML Boys </b>Admin Pannel. &nbsp;
                </div>
            </div>
            <!--end  Welcome -->
        </div>


        <div class="row">
            <!--quick info section -->

            <!--end quick info section -->
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body red">
                        <i class="fa fa-thumbs-up fa-3x"></i>
                        <h3>2,700 </h3>
                    </div>
                    <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Users
                            </span>
                    </div>
                </div>
            </div>
                <div class="col-sm-3">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-picture-o fa-3x"></i>
                            <h3><?php echo $image; ?> </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Photos
                            </span>
                        </div>
                    </div>
                </div>
            <div class="col-sm-3">
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body red">
                        <i class="fa fa-video-camera fa-3x"></i>
                        <h3><?php echo $video; ?> </h3>
                    </div>
                    <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Videos
                            </span>
                    </div>
                </div>
            </div>
        <div class="col-sm-3">
            <div class="panel panel-primary text-center no-boder">
                <div class="panel-body red">
                    <i class="fa fa-video-camera fa-3x"></i>
                    <h3><?php echo $drama; ?> </h3>
                </div>
                <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Drama Videos
                            </span>
                </div>
            </div>
        </div>
        </div>
<div class="row">
        <div class="col-sm-9">

            <!-- Chat Panel Example-->
            <div class="chat-panel panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i>
                    Chat
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li>
                                <a href="#">
                                    <i class="fa fa-refresh fa-fw"></i>Refresh
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-check-circle fa-fw"></i>Available
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-times fa-fw"></i>Busy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-clock-o fa-fw"></i>Away
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sign-out fa-fw"></i>Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                    </small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i>13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i>15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                    </div>
                </div>

            </div>
            <!--End Chat Panel Example-->
        </div>


        </div>
    </div>
    <!-- end page-wrapper -->

</div>

<!-- end wrapper -->
<script>
    function game_delete($key1) {
// alert($key1);
        $.ajax({
            url: 'admin/delete_pics',
            type: 'POST',
            data: {id: $key1},
            success: function (data) {
//               $('#commandlist_'+$id).hide();
//                alert(data);
//                location.reload();
                $('.message').html(data);
                location.reload();
            }
        });
//        location.reload();

    }
</script>
<script>
    function delete_video($key2) {
// alert($key1);
        $.ajax({
            url: 'admin/delete_vid',
            type: 'POST',
            data: {id: $key2},
            success: function (data) {
//               $('#commandlist_'+$id).hide();
//                alert(data);
//                location.reload();
                $('.message').html(data);
                location.reload();
            }
        });
//        location.reload();

    }
</script>
<script>
    function delete_drama($key3) {
// alert($key1);
        $.ajax({
            url: 'admin/delete_dram',
            type: 'POST',
            data: {id: $key3},
            success: function (data) {
//               $('#commandlist_'+$id).hide();
//                alert(data);
//                location.reload();
                $('.message').html(data);
                location.reload();
            }
        });
//        location.reload();

    }
</script>
<!-- Core Scripts - Include with every page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="<?php echo base_url();?>assets/plugins/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>assets/plugins/pace/pace.js"></script>
<script src="<?php echo base_url();?>assets/scripts/siminta.js"></script>
<!-- Page-Level Plugin Scripts-->
<script src="<?php echo base_url();?>assets/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/morris/morris.js"></script>
<script src="<?php echo base_url();?>assets/scripts/dashboard-demo.js"></script>

</body>

</html>
