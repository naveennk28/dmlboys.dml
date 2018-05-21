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
    <title>DML Settings</title>
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
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </nav>
            <nav class="navbar navbar-expand navbar-light bg-white">
                <div class="navbar-brand">Change Details</div>
            </nav>
            <div class="nav-tabs-responsive">
                <ul class="nav nav-tabs mb-4">
                    <li class="nav-item">
                        <a href="#account" class="nav-link active" data-toggle="tab">
                            <i class="icon-lock"></i> Password Change
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#personal" class="nav-link" data-toggle="tab">
                            <i class="icon-user"></i> Personal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#payment" class="nav-link" data-toggle="tab">
                            <i class="icon-credit-card"></i> Payment
                        </a>
                    </li>
                </ul>
                <form id="formOrder" class="tab-content">
                    <div id="account" class="tab-pane show active">
                        <div class="mb-3">
                            <a href="#account-collapse" data-toggle="collapse">
                                <i class="icon-lock"></i> Account
                            </a>
                        </div>
                        <div id="account-collapse" class="collapse show" data-parent="#formOrder">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="personal" class="tab-pane">
                        <div class="mb-3">
                            <a href="#personal-collapse" data-toggle="collapse">
                                <i class="icon-user"></i> Personal
                            </a>
                        </div>
                        <div id="personal-collapse" class="collapse" data-parent="#formOrder">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label>Full name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option>Female</option>
                                                    <option>Male</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Date of birth</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Phone number</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Zip code</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label>Home address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="payment" class="tab-pane">
                        <div class="mb-3">
                            <a href="#payment-collapse" data-toggle="collapse">
                                <i class="icon-credit-card"></i> Payment
                            </a>
                        </div>
                        <div id="payment-collapse" class="collapse" data-parent="#formOrder">
                            <div class="row">
                                <div class="col-12 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label>Card number</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>CVC</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <div class="form-group">
                                        <label>Card holder name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <label>Expiry month</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <label>Expiry year</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-block d-md-flex">
                        <div class="d-block d-md-inline ml-auto mb-3">
                            <button type="submit" class="btn btn-success btn-block">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- script to jQuery -->
<!-- script to Popper -->

<script src="<?php echo base_url(); ?>styles/admin4b.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
</body>
</html>