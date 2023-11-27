<?php 
session_start();
include('includes/config.php');
include('includes/format_rupiah.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title><?php echo $pagedesc;?></title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!-- <link href="assets/css/slick.css" rel="stylesheet"> -->
<link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">

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
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section>
  
<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url(assets/images/content-image/17.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <p class="tag-text mb-5">Temukan keindahan dalam setiap frame bersama kami</p>
                        <a href="paket.php" class="btn btn-main btn-white">Pesan Sekarang</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(assets/images/content-image/26.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start-->
                    <div class="content style text-center">
                        <p class="tag-text">Mari saling berbagi tawa dan keceriaan, kami akan menangkapnya</p>
                        <a href="paket.php" class="btn btn-main btn-white">Pesan Sekarang</a>
                    </div>
                    <!-- Slide Content End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(assets/images/content-image/36.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content text-center style">
                        <p class="tag-text mb-5">Mengabadikan keceriaan si kecil, sejak awal kehidupan</p>
                        <a href="paket.php" class="btn btn-main btn-white">Pesan Sekarang</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--====  End of Page Slider  ====-->
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section>
    
<section class="cta">
    <div class="container">
    <h3 class="text-center">Cara Melakukan Pemesanan Jasa
						</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                    <img src="assets/icons/1-circle.svg" alt="" width="40">
                        <h2>Daftar Akun</h2>
                        <p>Lakukan registrasi dan login akun</p>
                    </div>
                    <div class="top-doctor item">
                    <img src="assets/icons/2-circle.svg" alt="" width="40">
                        <h2>Pilih Paket</h2>
                        <p>Memilih dan memesan paket yang tersedia pada Studio 09</p>
                    </div>
                    <div class="working-time item">
                    <img src="assets/icons/3-circle.svg" alt="" width="40">
                        <h2>Pembayaran</h2>
                        <p>Melakukan transfer ke rekening 38895647899/Bri/studio09</p>
                    </div>
                    <div class="top-doctor-1 item">
                    <img src="assets/icons/4-circle.svg" alt="" width="40">
                        <h2>Upload Bukti Bayar</h2>
                        <p>Jangan lupa upload bukti pembayaran</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--about section-->
<section class="feature-section section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Mengapa Harus 
							<span>Memilih Studi 09 ?</span>
						</h3>
						<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis <br>
							nam error officia vero tempora alias? Sunt?</p> -->
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
                                        <img src="assets/icons/camera.svg" alt="" width="40">
										</a>
									</figure>
								</div>
								<h6>Layanan Fotografi Lengkap</h6>
								<p>Berbagai opsi layanan fotografi tersedia, sesuaikan dengan kebutuhan Anda.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
                                        <img src="assets/icons/magic.svg" alt="" width="40">
										</a>
									</figure>
								</div>
								<h6>Pengeditan Foto Tanpa Batas</h6>
								<p>Foto diedit dengan luar biasa untuk mendapatkan hasil foto terbaik</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
                                        <img src="assets/icons/cash.svg" alt="" width="40">
										</a>
									</figure>
								</div>
								<h6>Harga Terjangkau</h6>
								<p>Memesan jasa fotografi dengan mudah dengan tarif harga terjangkau.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
                                        <img src="assets/icons/telephone.svg" alt="" width="40">
										</a>
									</figure>
								</div>
								<h6>Gratis Berkonsultasi</h6>
								<p>Jika bingung memilih layanan dan paket kami, dapatkan konsultasi gratis melalui whatsapp atau isi kontak form kami akan segera membalasnya.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->


<!--Service Section-->
<div class="container-fluid bg-ligt">
<section class="service-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Layanan
                <span>Kami</span>
            </h3>
            <p>Kami menyediakan layanan jasa foto wisuda, photoshoot bayi, foto Prewedding, foto studio dan sebagainya 
                <br> dengan harga yang cukup terjangkau dan hasil foto yang berkualitas.</p>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="paket.php">
                            <img src="assets/images/content-image/42.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <!-- <span>Better Service At Low Cost</span> -->
                        <a href="paket.php">
                            <h6>Foto Prewedding</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="paket.php">
                        <img src="assets/images/content-image/43.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="paket.php">
                            <h6>Foto Wedding</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="paket.php">
                            <img src="assets/images/content-image/06.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="paket.php">
                            <h6>Photoshoot Bayi</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="paket.php">
                            <img src="assets/images/content-image/03.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="paket.php">
                            <h6>Foto Wisuda</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="paket.php">
                            <img src="assets/images/content-image/02.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                     <a href="paket.php">
                            <h6>Foto Produk/Endorse</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="paket.php">
                            <img src="assets/images/content-image/18.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="paket.php">
                            <h6>Foto Personal Outdoor</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="paket.php">
                            <img src="assets/images/content-image/38.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="paket.php">
                            <h6>Foto Studio</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!--End Service Section-->

</section>
<!-- /Resent Cat --> 

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
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
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>