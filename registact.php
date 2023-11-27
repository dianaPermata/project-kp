<?php
session_start();
error_reporting(0);

// Include file for database connection
include('includes/config.php');

$fname = $_POST['fullname'];
$email = $_POST['emailid'];
$mobile = $_POST['mobileno'];
$alamat = $_POST['alamat'];
$pass = $_POST['pass'];
$conf = $_POST['conf'];
$code = md5($email . date('Y-m-d'));

// Load Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                       // Disable debug output
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'studio09.madiun@gmail.com';      
    $mail->Password   = 'zadn roqu tvpf ifmt';                            
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                  

    // Recipients
    $mail->setFrom('studio09.madiun@gmail.com', 'Studio09');
    $mail->addAddress($email, $fname);

    // Content
    $mail->isHTML(true);                                 
    $mail->Subject = 'Email Verification from Web Studio 09';
    $mail->Body    = '<h2>You Have Registered with Studio 09</h2>
                      <h5>Verify your email address to login with the below given link</h5>
                      <br><br><a href="http://localhost/kp-Studio09/verify-email.php?code=' . $code . '">Click Verification</a>';
   
    // Check if email is sent successfully
    if ($mail->send()) {
        if ($conf != $pass) {
            echo "<script>alert('Password tidak sama!');</script>";
            echo "<script type='text/javascript'> document.location = 'regist.php'; </script>";			
        } else {
            $sqlcek = "SELECT email FROM member WHERE email='$email'";
            $querycek = mysqli_query($koneksidb, $sqlcek);
            
            if (mysqli_num_rows($querycek) > 0) {
                echo "<script>alert('Email sudah terdaftar, silahkan gunakan email lain!');</script>";
                echo "<script type='text/javascript'> document.location = 'regist.php'; </script>";			
            } else {
                $password = md5($_POST['pass']);
                $sql1 = "INSERT INTO member(nama_user,email,telp,password,alamat,token) VALUES('$fname','$email','$mobile','$password','$alamat','$code')";
                $lastInsertId = mysqli_query($koneksidb, $sql1);

                if ($lastInsertId) {
                    echo "<script>alert('Registrasi berhasil. silahkan cek email anda untuk verifikasi akun.');</script>";
                    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
                } else {
                    echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
                    echo "<script type='text/javascript'> document.location = 'regist.php'; </script>";
                }
            }	
        }
    } else {
        echo "<script>alert('Gagal mengirim email verifikasi. Silahkan coba lagi.');</script>";
        echo "<script type='text/javascript'> document.location = 'regist.php'; </script>";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
