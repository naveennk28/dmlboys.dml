
<!DOCTYPE html>
<html>
<?php
$this->load->library('session');
if (isset($this->session->userdata['user'])) {
    $username = ($this->session->userdata['user']['user']);
    $username = ucfirst($username);
    $dp=($this->session->userdata['user']['dp']);
    $last_login=($this->session->userdata['user']['last_login']);
} else {
    header("location: first");
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DML Boys User Pannel</title>
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
                    <i class="fa fa-user fa-3x"></i>
                </a>
                <!-- dropdown user-->
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url();?>index.php/home/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                            <div style="font-size:x-large;color: #f1d40f" >  <?php echo $username; ?> </div>
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
                    <a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard fa-fw"></i>Home</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>index.php/photos"><i class="fa fa-file fa-fw"></i> Photos</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/dramas"><i class="fa fa-file fa-fw"></i> Dramas</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/videos"><i class="fa fa-file fa-fw"></i> Videos</a>
                </li>

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
                <h1 class="page-header">Home</h1>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <p class="page-header" style="font-size: large;color: #d43f3a">Last Used : <?php echo $last_login;?></p>
            </div>


            <!--End Page Header -->
        </div>

        <div class="row">
            <!-- Welcome -->
            <div class="col-lg-12">
                <div class="alert alert-info">
                    <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b><?php echo $username; ?> </b>
                    <i class="fa  fa-pencil"></i> to<b>&nbsp;DML Boys </b>Web Site. &nbsp;
                </div>
            </div>
            <!--end  Welcome -->
        </div>


        <div class="row">
            <!--quick info section -->

            <!--end quick info section -->
        </div>

        <div class="col-sm-3 col-md-3"></div>
        <div class="col-sm-3 col-md-3">
        <form class="" action='' method="POST">
                <div >
                    <legend class="">Update Details</legend>
                </div>
            <form class="" action='userprofile/update_name' method="POST">
            <div class="form-group">
                    <!-- Username -->
                    <label class="control-label"  for="username">Name</label>
                    <div class="controls">
                        <input type="text"  name="name" placeholder="" value="<?php echo $name;?>" class="form-control">
                        <p class="help-block">Name can contains only numbers</p>
                        <div class="controls">
                            <button class="btn btn-success" act>Update</button>
                        </div>
                    </div>
                </div>
            </form>

                <div class="form-group">
                    <!-- E-mail -->
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input type="text" name="email" placeholder="" value="<?php echo $email;?>" class="form-control" readonly>
                        <p class="help-block">Email contains '@' and '.' must</p>
                    </div>
                </div>

                <div class="form-group">
                    <!-- E-mail -->
                    <label class="control-label" for="email">Mobile No</label>
                    <div class="controls">
                        <input type="text"  name="mobile" placeholder="" value="<?php echo $mobile;?>" class="form-control" readonly>
                        <p class="help-block">Mobile no contains only  10 Numbers</p>
                    </div>
                </div>

            <form class="" action='userprofile/update_password' method="POST">
            <div class="form-group">
                <!-- E-mail -->
                <label class="control-label" for="email">Password</label>
                <div class="controls">
                    <input type="text"  name="pass" placeholder="Change Password" class="form-control">
                    <p class="help-block">Mobile no contains only  10 Numbers</p>
                    <div class="controls">
                        <button class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
            </form>

            <form class="" action='userprofile/update_dp' method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <!-- Password-->
                    <label class="control-label" for="password">Change Dp</label>
                    <div class="controls">
                        <input type="file"  name="dp" placeholder="" value="<?php echo $dp;?>" class="form-control">
                        <p class="help-block">Select ur new Dp</p>
                        <div class="controls">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>

                </div>
            </form>


        </form>
        </div>


    </div>
    <!-- end page-wrapper -->

</div>

<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
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
