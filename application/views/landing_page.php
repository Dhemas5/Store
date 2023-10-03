<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Dheemas | Store</title>
    <link rel="icon" href="<?= base_url() ?>assets/666-Store/images/logo.png" type="image/png">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/666-Store/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/666-Store/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/666-Store/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="<?= base_url() ?>assets/666-Store/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/666-Store/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="<?= base_url() ?>assets/666-Store/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="<?= base_url() ?>assets/666-Store/images/logo.png" alt="#" width="150" height="120" /></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html"> Home </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= site_url('index.php/auth/login') ?>">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="test_box">
                        <div class="text-bg">
                            <h1><span> Welcome to</span> <br>666 Store</h1>
                            <p>Dengan desain yang modern dan bahan berkualitas tinggi, baju-baju kami akan memberikan
                                kenyamanan dan kepercayaan diri yang tak tertandingi. Belanja sekarang dan
                                buktikan bahwa gaya yang
                                sempurna tak pernah begitu mudah!
                            </p>
                            <!-- <a class="read_more" href="#">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="banner1" class="carousel slide banner_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#banner1" data-slide-to="0" class="active"></li>
                            <li data-target="#banner1" data-slide-to="1"></li>
                            <!-- <li data-target="#banner1" data-slide-to="2"></li>
                        <li data-target="#banner1" data-slide-to="3"></li> -->
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="banner_img">
                                                    <figure><img src="<?= base_url() ?>assets/666-Store/images/benner_img.png" alt="#" /></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="banner_img">
                                                    <figure><img src="<?= base_url() ?>assets/666-Store/images/benner_img1.png" alt="#" /></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end banner -->
    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="<?= base_url() ?>assets/666-Store/images/about.png" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>About Us</h2>
                        <p>
                            Pakaian bukan sekadar penutup tubuh, tapi juga cerminan jati diri Anda.
                            Dengan baju-baju kami, Anda bisa mengungkapkan gaya dan kepribadian Anda dengan percaya diri.
                            Setiap jahitan, setiap detail, dirancang untuk menjadikan Anda pusat perhatian.
                            Jadi, siap-siaplah untuk menjadi ikon mode dengan koleksi baju kami yang memikat!
                        </p>
                        <!-- <a class="read_more" href="#">About More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- Our Juices -->
    <div class="juices ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Produk</h2>
                        <p>Transformasikan gaya Anda dengan koleksi baju produk kami!
                            Temukan pilihan baju trendi yang akan membuat Anda tampil memukau di setiap kesempatan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="our_main_box">
                        <div class="our_img">
                            <figure><img src="<?= base_url() ?>assets/666-Store/images/our1.png" alt="#" /></figure>
                        </div>
                        <div class="our_text">
                            <h4>Rp.<strong class="yellow">75.000</strong></h4>
                            <h3>Baju Branded</h3>
                            <!-- <p>is a long established fact that a reader will be</p> -->
                            <!-- <a class="read_more" href="#">Order Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="our_main_box">
                        <div class="our_img">
                            <figure><img src="<?= base_url() ?>assets/666-Store/images/our2.png" alt="#" /></figure>
                        </div>
                        <div class="our_text">
                            <h4>Rp.<strong class="yellow">75.000</strong></h4>
                            <h3>Baju Branded</h3>
                            <!-- <p>is a long established fact that a reader will be</p> -->
                            <!-- <a class="read_more" href="#">Order Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="our_main_box">
                        <div class="our_img">
                            <figure><img src="<?= base_url() ?>assets/666-Store/images/our3.png" alt="#" /></figure>
                        </div>
                        <div class="our_text">
                            <h4>Rp.<strong class="yellow">75.000</strong></h4>
                            <h3>Baju Branded</h3>
                            <!-- <p>is a long established fact that a reader will be</p> -->
                            <!-- <a class="read_more" href="#">Order Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 margin_top">
                    <div class="our_main_box">
                        <div class="our_img">
                            <figure><img src="<?= base_url() ?>assets/666-Store/images/our4.png" alt="#" /></figure>
                        </div>
                        <div class="our_text">
                            <h4>Rp.<strong class="yellow">75.000</strong></h4>
                            <h3>Baju Branded</h3>
                            <!-- <p>is a long established fact that a reader will be</p> -->
                            <!-- <a class="read_more" href="#">Order Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_main_box">
                        <div class="our_img">
                            <figure><img src="<?= base_url() ?>assets/666-Store/images/our5.png" alt="#" /></figure>
                        </div>
                        <div class="our_text">
                            <h4>Rp.<strong class="yellow">75.000</strong></h4>
                            <h3>Baju Branded</h3>
                            <!-- <p>is a long established fact that a reader will be</p> -->
                            <!-- <a class="read_more" href="#">Order Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Our Juices  section -->

    <!--  footer -->
    <footer id="contact">
        <div class="footer">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p text>Copyright 2023 All Right Reserved By 666 | Store</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?= base_url() ?>assets/666-Store/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/666-Store/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/666-Store/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/666-Store/js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="<?= base_url() ?>assets/666-Store/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url() ?>assets/666-Store/js/custom.js"></script>
</body>

</html>