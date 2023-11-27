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
<script>
    function validateForm() {
        // Clear previous error messages
        clearErrorMessages();

        var isValid = true;

        // Validate full name - allow only alphabetic characters and spaces
        var fullName = document.getElementById('fullname').value;
        if (!/^[a-zA-Z\s]+$/.test(fullName)) {
            displayErrorMessage('fullname-error', 'Nama Lengkap hanya boleh mengandung huruf dan spasi.');
            isValid = false;
        }
  // Validate password - add your enhanced password validation rules here
  var password = document.getElementById('pass').value;

// Minimum length check
if (password.length < 8) {
	displayErrorMessage('pass-error', 'Password harus minimal 8 karakter.');
	isValid = false;
}

// At least one uppercase letter, one lowercase letter, one number, and one special character
if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]).*$/.test(password)) {
	displayErrorMessage('pass-error', 'Password harus mengandung setidaknya satu huruf kecil, satu huruf besar, satu angka, dan satu karakter khusus.');
	isValid = false;
}

        // Validate password confirmation
        var confirmPassword = document.getElementById('conf').value;
        if (password !== confirmPassword) {
            displayErrorMessage('conf-error', 'Password dan Konfirmasi Password harus sama.');
            isValid = false;
        }

        return isValid;
	}

    function displayErrorMessage(elementId, message) {
        var errorElement = document.getElementById(elementId);
        errorElement.innerHTML = message;
    }

    function clearErrorMessages() {
        var errorElements = document.getElementsByClassName('error-message');
        for (var i = 0; i < errorElements.length; i++) {
            errorElements[i].innerHTML = '';
        }
    }
</script>
<script type="text/javascript">
	function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
		url: "check_availability.php",
		data:'emailid='+$("#emailid").val(),
		type: "POST",
		success:function(data){
			$("#user-availability-status").html(data);
			$("#loaderIcon").hide();
		},
		error:function (){}
	});
	}
</script>
<head>
<body>
<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 
<section class="user_profile inner_pages">
  <div class="container">
      <div class="user_profile_info">
		<h6 align="center">Registrasi Member</h6>
		<div class="col-md-12 col-sm-10">
		<form method="post" name="theform" action="registact.php" id="theform" onSubmit="return validateForm();" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nama Lengkap" required="required">
        <div id="fullname-error" class="error-message"></div>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" name="mobileno" placeholder="Nomer Telepon" minlength="10" maxlength="15" required="required">
        <div id="mobileno-error" class="error-message"></div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Alamat Email" required="required">
        <span id="user-availability-status" style="font-size:12px;"></span>
        <div id="emailid-error" class="error-message"></div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="required">
        <div id="alamat-error" class="error-message"></div>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required="required">
        <div id="pass-error" class="error-message"></div>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="conf" name="conf" placeholder="Konfirmasi Password" required="required">
        <div id="conf-error" class="error-message"></div>
    </div>
    <div class="form-group">
        <input type="submit" value="Sign Up" class="btn btn-block">
    </div>
</form>
			<div class="modal-footer text-center">
			<p>Sudah punya akun? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Disini</a></p>
			</div>
			<br><center><p> <a href='https://www.instagram.com/studio09.id/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==' title='StokCoding.com' target='_blank'>Studio 09</a></p></center>
			

     </div>
	</div>
</div>
</section>
<!--/Profile-setting--> 

<<!--Footer -->
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
</html>