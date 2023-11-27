<?php
require('includes/config.php');

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $query = $koneksidb->query("SELECT * FROM member WHERE token='$code'");
    
    if ($query) {
        $result = $query->fetch_assoc();

        if ($result && isset($result['id_user'])) {
            $koneksidb->query("UPDATE member SET is_verified=1 WHERE id_user='" . $result['id_user'] . "'");
            echo "<script>alert('Verifikasi berhasil, Silahkan Login!');</script>";
            echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
        } else {
            echo "<script>alert('Kode verifikasi tidak valid!');</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam query!');</script>";
    }
} else {
    echo "<script>alert('Parameter \"code\" tidak ditemukan dalam URL!');</script>";
}
?>
