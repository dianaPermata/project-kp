<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
{
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql1="INSERT INTO contactus (nama_visit,email_visit,telp_visit,pesan) VALUES('$name','$email','$contactno','$message')";
$lastInsertId = mysqli_query($koneksidb, $sql1);
if($lastInsertId){
	$msg="Pesan Terkirim. Kami akan menghubungi anda secepatnya.";
}else{
	$error="Terjadi Kesalahan! Silahkan coba lagi.";
}
}
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
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Hubungi Kami</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Hubungi Kami</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Contact-us-->
<section class="section contact">
    <!-- container start -->
    <div class="container">
    <h3 class="text-center">Ada Pertanyaan?</h3>
              <h6 class="text-center">Silahkan isi form di bawah ini atau kirim melalui email</h6>
              <div class="row">
            <div class="col-md-4 ">
                <!-- address start -->
                <div class="address-block">
                <h3>Informasi Kontak</h3>
                <?php 
$pagetype=$_GET['type'];
$sql1 = "SELECT * from contactusinfo";
$query1 = mysqli_query($koneksidb,$sql1);
if(mysqli_num_rows($query1)>0)
{
while($result = mysqli_fetch_array($query1))
{
?>
                    <!-- Location -->
                    <div class="media">
                        <i class="fa fa-map-o"></i>
                        <div class="media-body">
                            <h4>Location</h4>
                            <p><?php   echo htmlentities($result['alamat_kami']); ?></p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="media">
                        <i class="fa fa-envelope-o"></i>
                        <div class="media-body">
                            <h4>Email</h4>
                            <p>
                            <a href="mailto:<?php echo htmlentities($result['email_kami']); ?>"><?php echo htmlentities($result['email_kami']); ?></a>
                            </p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h4>No. Telepon/Whatsapp</h4>
                            <p>
                            <a href="https://wa.me/<?php echo htmlentities($result['telp_kami']); ?>"><?php echo htmlentities($result['telp_kami']); ?></a>
                        </p>
                        </div>
                    </div>
                    <!-- Instagram -->
                    <div class="media">
                        <i class="fa fa-instagram"></i>
                        <div class="media-body">
                            <h4>Instagram</h4>
                            <p>
                            <a href=<?php echo htmlentities($result['instagram_url']); ?>><?php echo htmlentities($result['instagram_kami']); ?></a>
                            </p>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
                <!-- address end -->
            </div>
            <div class="col-md-8">
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                    <!-- contact form start -->
                    <form method="post" class="row">
                        <!-- name -->
                        <div class="col-md-6">
                        <div class="form-group">
              <input type="text" name="fullname" class="form-control main" id="fullname" placeholder="Nama" required>
            </div>
                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                        <div class="form-group">
              <input type="email" name="email" class="form-control main" id="emailaddress" placeholder="Email" required>
            </div>
                        </div>
                        <!-- phone -->
                        <div class="col-md-12">
                        <div class="form-group">
              <input type="text" name="contactno" class="form-control main" id="phonenumber" placeholder="No. Telepon" required>
            </div>
                        </div>
                        <!-- message -->
                        <div class="col-md-12">
                        <div class="form-group">
              <textarea class="form-control main" name="message" rows="15" placeholder="Pesan" required></textarea>
            </div>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                        <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Kirim <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<div class="container-fluid">
  <div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.851780337444!2d111.52014927444714!3d-7.699050876248241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bd8fbe444979%3A0xac61ba04d9ac364b!2sStudio%2009!5e0!3m2!1sid!2sid!4v1700235643065!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
    <!-- Google Map -->
</div>
<!-- /Contact-us--> 


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

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->
</html>
