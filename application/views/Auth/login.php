<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Multi Karya - Login</title>
    <link rel="icon" type="image/png" href="<?= base_url()?>assets/logo/logo.png">

    
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/admin/aset/login/css.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="wrapper">
        <div class="logo">
            <img src="<?php echo base_url(); ?>assets/logo/logo.png" alt="">
        </div>
        <div class="alert alert-success" role="alert">
            <p style="color: red;"><?php echo $this->session->flashdata('message'); ?></p>
        </div>
        <div class="row">
            <div class="text-center col-lg-12 mt-4 name">
                Multikarya - login
            </div>
        </div>
        <form class="p-3 mt-3" method="POST" action="<?php echo base_url(); ?>login/validate" autocomplete="off">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <!-- <div class="text-center fs-6">
            <a href="#">Forget password?</a>
        </div> -->
    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/aset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/aset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/admin/aset/js/sb-admin-2.min.js"></script>

</body>

</html>