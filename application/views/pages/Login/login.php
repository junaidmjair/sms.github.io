<!doctype html>
<html lang="en">

<head>
    <script>
        BASE_URL = "<?php echo base_url(); ?>"
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <link href="<?php echo base_url() ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/all.min.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/custom.css' ?>">


</head>

<body>

    <div class="container">

        <div class="row" style="transform: translate(23%,24%);">
            <div class="jumbotron" style="width: 50%;">
                <div class="col-sm-12">
                    <div class="login-box">
                        <h2 class="text-center">Log In</h2>
                        <form action="<?php echo base_url('login/index')  ?>" class="login_form">
                            <div class="form-group ">
                                <label for="password">Email</label>
                                <input type="text" name="std_email" id="std_email" placeholder="Enter your Username" class="form-control">
                            </div>

                            <div class="form-group ">
                                <label for="password">Password</label>
                                <input type="password" name="std_password" id="std_password" placeholder="Enter your Password" class="form-control">
                            </div>

                            <div class="d-flex" style="justify-content: space-between;">
                                <button type="submit" name="login" class="btn btn-info">LOGIN</button>
                                <a href="" class="nav-link"> Forgot Password</a>
                            </div>
                            <div class="mt-4 d-flex">
                                <span>Create New Account</span><a href="<?php echo base_url('home/signup')  ?>" class="text-info ml-2 nav-link" style="margin-top: -8px;">Sign UP</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="<?php echo base_url('assets/jquery/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/all.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url()?>assets/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url('assets/custom/js/custom.js') ?>"></script>


</body>

</html>