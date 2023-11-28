<?php
include('includes/config.php');

$fotografer_name = $_POST['fotografer_name'];

$sql = "SELECT tgl_take FROM booking WHERE fotografer = '$fotografer_name'";
$result = mysqli_query($koneksidb, $sql);

$bookedDates = array();
while ($row = mysqli_fetch_assoc($result)) {
    $bookedDates[] = $row['tgl_take'];
}

echo json_encode($bookedDates);
?>