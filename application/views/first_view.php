<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DML Boys</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>first/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>first/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>first/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>first/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top" style="font-size: x-large">DML Boys</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a data-toggle="modal" data-target="#modal_sign">Sign In</a>
                </li>

                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <p id="homeHeading" style="font-size: 35px">Welcome To &nbsp;
                &nbsp;&nbsp;<strong style="font-size:50px">DML BOYS</strong>&nbsp;&nbsp;&nbsp; Web Portal</p>
            <hr>
            <p>Here you can see the Pics taken by the dml boys and also you can watch videos,dramas also you can download it by using this site. </p>
            <a data-toggle="modal" data-target="#login" class="btn btn-primary btn-xl page-scroll">LOG IN</a><br><br>
            <h4>New user
                <a data-toggle="modal" data-target="#modal_sign">Sign Up</a>
                here..</h4>
        </div>
    </div>
</header>


<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">LOGIN</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                <form method="post" action="login/login">
                    <div class="form-group">
                        <input class="form-control" placeholder="Email-Id" name="user" type="text" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                        </label>
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <button type="submit" class="btn btn-lg btn-success "><span>Login</span></button>
                    <button type="reset" class="btn btn-lg btn-success "><span>Reset</span></button>
                </form>
                </div>
                <div class="col-sm-3"></div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal_sign">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">SIGNIN</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form method="post" action="first/signin" enctype="multipart/form-data">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email-Id" name="email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Mobile No" name="mobile" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Select Dp</label>
                            <input class="form-control" placeholder="Select dp" name="dp" type="file" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="pass" type="password" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Confirm Password" name="con_pass" type="password" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button type="submit" class="btn btn-lg btn-success "><span>Signin</span></button>
                        <button type="submit" class="btn btn-lg btn-success "><span>Reset</span></button>
                    </form>
                </div>
                <div class="col-sm-3"></div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

            </div>

        </div>
    </div>
</div>






<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x sr-contact"></i>
                <p>978944-5528</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:your-email@your-domain.com">naveennkr28@gmail.com</a></p>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="<?php echo base_url();?>first/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>first/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>first/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="<?php echo base_url();?>first/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme JavaScript -->
<script src="<?php echo base_url();?>first/js/creative.min.js"></script>

</body>

</html>
