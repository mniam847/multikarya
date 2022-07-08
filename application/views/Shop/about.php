<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/logo/logo.png">
    <title>CV Multi Karya</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets/shop/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url("assets/shop/lib/owlcarousel/assets/owl.carousel.min.css") ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url("assets/shop/css/style.css") ?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5 ">
            <div class="col-lg-12 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-4 d-none d-lg-block">
                <a href="<?= base_url() ?>" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">CV</span>Multi Karya</h1>
                </a>
            </div>
            <div class="col-lg-5 col-5 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">

            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
                            <a href="<?= base_url("product") ?>" class="nav-item nav-link">Product</a>
                            <a href="<?= base_url("profil") ?>" class="nav-item nav-link active">About</a>
                            <a href="<?= base_url("contact") ?>" class="nav-item nav-link">Contact Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">About</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">About</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class=" border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="<?= base_url() ?>assets/logo/logo.png?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?= $company ?></h3>
                <div class="row px-xl-5">
                    <div class="col">
                        <div class="nav nav-tabs justify-content-start border-secondary mb-4">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Struktur Kepegawaian</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews (<?= count($testimoni) ?>)</a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <h4 class="mb-3">Visi dan Misi</h4>
                                <p><?= $vm ?></p>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-2">
                                <h4 class="mb-3">Struktur Kepegawaian</h4>
                                <p>Berikut struktur Kepegawaian yang di CV MULTI KARYA Ungaran.</p>
                                <div class="row">
                                    <img style="height: 500px; width:500px;" src="<?= base_url() ?>uploads/kepegawaian.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="mb-4"><?= count($testimoni) ?> review (<i class="fas fa-star"></i><?= $percentfeedback?>)</h4>
                                        <?php foreach ($testimoni as $testimoni) : ?>
                                            <div class="media mb-4">
                                                <!-- <img src="<?= base_url("assets/shop/img/user.jpg") ?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;"> -->
                                                <div class="media-body">
                                                    <h6><?= $testimoni['name'] ?></h6>
                                                    <div class="text-primary mb-2">
                                                        (<?= $testimoni['star']?>)
                                                        <?php for ($x = 1; $x <= $testimoni['star'] ; $x++) { ?>
                                                            <i class="fas fa-star"></i>
                                                        <?php } ?>
                                                    </div>
                                                    <p><?= $testimoni['message'] ?>.</p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="mb-4">Leave a review</h4>
                                        <small>Your email address will not be published. Required fields are marked *</small>

                                        <form method="POST" action="<?php echo base_url(); ?>profil/createTestimoni">
                                            <div class="form-group">
                                                <label for="message">Your Review *</label>
                                                <textarea id="message" cols="30" rows="5" class="form-control" name="message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Your Name *</label>
                                                <input type="text" class="form-control" id="name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Your Email *</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Your Rating *</label>
                                                <select class="form-select" aria-label="Default select example" name="star">
                                                    <option selected>Select Your Rating</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">

                                                <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Leave Your Review</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Shop Detail End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">CV</span><?= $company?></h1>
                </a>

                <p><?= $foreword; ?>.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><?= $address; ?></p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><?= $email; ?></p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i><?= $telp; ?></p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="<?= base_url(); ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="<?= base_url("product") ?>"><i class="fa fa-angle-right mr-2"></i>Product</a>
                            <a class="text-dark mb-2" href="<?= base_url("profil") ?>"><i class="fa fa-angle-right mr-2"></i>About</a>
                            <a class="text-dark mb-2" href="<?= base_url("contact") ?>"><i class="fa fa-angle-right mr-2"></i>Contact us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit" disabled>Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#"><?= $company?></a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url("assets/shop/lib/easing/easing.min.js") ?>"></script>
    <script src="<?= base_url("assets/shop/lib/owlcarousel/owl.carousel.min.js") ?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?= base_url("assets/shop/mail/jqBootstrapValidation.min.js") ?>"></script>
    <script src="<?= base_url("assets/shop/mail/contact.js") ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url("assets/shop/js/main.js") ?>"></script>
</body>

</html>