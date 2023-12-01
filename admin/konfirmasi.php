<?php
include('includes/config.php');

$trxid = $_GET['trxid'];
$email = $_GET['email'];
$status = $_GET['status'];

$sql = "UPDATE transaksi SET stt_trx = ? WHERE id_trx = ? AND email = ?";
$stmt = $koneksidb->prepare($sql);
$stmt->bind_param("sss", $status, $trxid, $email);

if ($stmt->execute()) {
    // Redirect back to the previous page or display a success message
    header('Location: trx_menunggu_diterima.php');
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
?>