<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/logo/logo.png">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/admin/aset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/aset/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/aset/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/aset/fontawesome/css/solid.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/admin/aset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center ">
                <div class="sidebar-brand-icon rotate-n-15">
                    <a href="<?php echo base_url(); ?>"><img style="height: 50px; width:50px;" src="<?php echo base_url(); ?>assets/logo/logo.png" alt=""></a>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/showcontrol">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
            </li> -->

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/showProduct">
                    <i class="fa-solid fa-database"></i>
                    <span>Product</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/showinvoice">
                    <i class="fa-solid fa-inbox"></i>
                    <span>Invoice</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/showrecord">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>Record</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/showContact">
                    <i class="fa-solid fa-image"></i>
                    <span>Contact Us</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/showtestimoni">
                    <i class="fa-solid fa-comment-dots"></i>
                    <span>Testimoni</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Home
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><?= $user ?></b></span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>assets/admin/aset/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Product</h1>
                    <p class="mb-4">Data yang menampilkan sseluruh product yang dimiliki</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 grid" style="--bs-columns: 10; --bs-gap: 1rem;">
                            <h6 class="m-0 font-weight-bold text-primary g-col-6">DataProduct</h6>
                        </div>
                        <div class="card-body col-sm-8">
                            <?php echo form_open_multipart('admin/createProduct'); ?>
                            <div class="form-group row">
                                <label for="1" class="col-sm-2  col-form-label">Nama Product</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="1" name="name" placeholder="Tulis nama produk" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="2" class="col-sm-2  col-form-label">Kategory Product</label>
                                <div class="col-sm-5">
                                    <select class="form-select" aria-label="Default select example" name="category">
                                        <option selected>Select Category</option>
                                        <option value="MMT">MMT</option>
                                        <option value="Banner">Banner</option>
                                        <option value="Kalender">Kalender</option>
                                        <option value="Undangan">Undangan</option>
                                        <option value="Kartu_Nama">Kartu Nama</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="3" class="col-sm-2  col-form-label">Harga Product</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="3" name="price" placeholder="Masukkan harga produk" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="4" class="col-sm-2  col-form-label">Keterangan Product</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="3" name="describe" placeholder="Masukkan keterangan" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="4" class="col-sm-2  col-form-label">Gambar Product</label>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" id="3" name="picture" placeholder="Masukkan gambar" autocomplete="off" required>
                                </div>
                            </div>
                            <a href="<?= base_url('admin/showProduct'); ?>" class="btn btn-danger">Batal</a>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            <!-- </form> -->
                            <?php echo form_close(); ?>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Multikarya 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>admin/logout">Log out</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/aset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/aset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/admin/aset/js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstap/js/botstrap.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/admin/aset/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>assets/admin/aset/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/aset/js/demo/chart-pie-demo.js"></script>

</body>

</html>