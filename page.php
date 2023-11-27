<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title><?php echo $pagedesc; ?></title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="admin/img/S09-Removebg.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>
    <!-- Start Switcher -->
    <?php include('includes/colorswitcher.php'); ?>
    <!-- /Switcher -->

    <!--Header-->
    <?php include('includes/header.php'); ?>

    <section class="page-header aboutus_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Tentang Kami</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Tentang Kami</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>


    <!-- Content -->
    <section class="story">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/S09.png" class="responsive" alt="picture-company" width="600" height="400">
                </div>
                <div class="col-md-6">
                    <div class="story-content">
                        <h2>Studio 09</h2>
                        <h5 class="tagline">"Menangkap momen, menciptakan kenangan di setiap klik yang menceritakan sebuah cerita."</h6>
                            <p>Studio 09 merupakan studio foto dan perusahaan vendor yang bergerak dalam bidang jasa fotografi. Berdiri sejak tahun 2019 oleh Wira Uta Dianata, yang berlokasi di Madiun, Jawa Timur. Kami melayani pemotretan untuk seluruh wilayah Madiun dan kota sekitarnya, dengan menawarkan berbagai layanan fotografi, termasuk foto pernikahan, foto keluarga, foto maternity, foto prewedding, foto wisuda, photoshoot baby, serta foto studio baik dalam ruangan maupun di luar ruangan.</p>
                            <h6>Vision</h6>
                            <p>Menjadi perusahaan fotografi yang terpercaya dan berkualitas.</p>
                            <h6>Mission</h6>
                            <p>Memberikan pelayanan terbaik kepada customer, memberikan kepuasan hasil dan harga terhadap customer, meningkatkan sarana dan prasarana demi menunjang kualitas SDM dan teknologi sesuai dengan perkembangannya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Tim
                            <span>Kami</span>
                        </h3>
                        <p>Berikut adalah tim dari Studio 09 yang berkolaborasi secara maksimal
                            <br>guna mencapai tujuan perusahaan
                        </p>
                    </div>
                    <div class="tab-content">
                        <!--Start single tab content-->
                        <div class="team-members tab-pane fade in active row" id="ceo">
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="assets/images/03.png"  class="img-responsive" alt="team">
                                    <h6>Wira Uta Dianata</h6>
                                    <p>CEO</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="assets/images/02.png"class="img-responsive" alt="team">
                                    <h6>Rizky Erya Yunita</h6>
                                    <p>Manajer</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="team-person text-center">
                                    <img src="assets/images/01.png" class="img-responsive" alt="team">
                                    <h6>Rifaldy Dwi Arianto</h6>
                                    <p>Tim Kreatif</p>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container tab-content">
        <div class="team-members tab-pane fade in active row" id="doctor">
            <div class="col-md-4 col-sm-6">
                <div class="team-person text-center">
                    <span class="lingkaran" ><i class="fa fa-map-o fa-3x"></i></span>
                    <h6>Alamat</h6>
                    <p>Jl. Mayjend Panjaitan No.Rt.06/01, Nglandung Tiga, Nglandung, Kec. Geger, Kabupaten Madiun, Jawa Timur 63171</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-person text-center">
                    <span class="lingkaran"><i class="fa fa-phone fa-3x" ></i></span>
                    <h6>No. Telepon/Whatsapp</h6>
                    <p> 083115372269</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="team-person text-center">
                    <span class="lingkaran"><i class="fa fa-calendar-check-o fa-3x"></i></span>
                    <h6>Pemesanan Jasa</h6>
                    <p> Lakukan Pemesanan di Website ini <a href="paket.php">pilih paket</a></p>
                </div>
            </div>
        </div>
    </section>



    <!--Content-->

    <!--Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->

    <!--Login-Form -->
    <?php include('includes/login.php'); ?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php'); ?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php'); ?>
    <!--/Forgot-password-Form -->

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <!--Switcher-->
    <script src="assets/switcher/js/switcher.js"></script>
    <!--bootstrap-slider-JS-->
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->

</html>