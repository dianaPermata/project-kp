<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/format_rupiah.php');
include('includes/library.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
 ?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title><?php echo $pagedesc;?></title>
	<link rel="shortcut icon" href="img/S09-Removebg.png">

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
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
<script type="text/javascript">
function valid()
{
	if(document.laporan.akhir.value < document.laporan.awal.value)
	{
		alert("Tanggal akhir harus lebih besar dari tanggal awal!");
		return false;
	}
	return true;
}
</script>

</head>

<body>
	<?php include('includes/header.php');?>
	</section>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
						<h2 class="page-title">Semua Laporan </h2>
						<div class="panel panel-default">
							<div class="panel-body">
					        <form method="get" name="laporan" onSubmit="return valid();"> 
								<div class="form-group">
									<div class="col-sm-4">
										<label>Tanggal Awal</label>
										<input type="date" class="form-control" name="awal" placeholder="From Date(dd/mm/yyyy)" required>
									</div>
									<div class="col-sm-4">
										<label>Tanggal Akhir</label>
										<input type="date" class="form-control" name="akhir" placeholder="To Date(dd/mm/yyyy)" required>
									</div>
									<div class="col-sm-4">
										<label>&nbsp;</label><br/>
										<input type="submit" name="submit" value="Lihat Laporan" class="btn btn-primary">
									</div>
								</div>
							</form>
							</div>
						</div>
						<?php
							if(isset($_GET['submit'])){
								$no=0;
								$mulai 	 = $_GET['awal'];
								$selesai = $_GET['akhir'];
								$stt	 = "Sudah Dibayar";
								$stt1	 = "Selesai";
								$sqlsewa = $sqlsewa = "SELECT * FROM transaksi WHERE (stt_trx='$stt' OR stt_trx='$stt1') AND tgl_bayar BETWEEN '$awal' AND '$selesai'";
								$querysewa = mysqli_query($koneksidb,$sqlsewa);
							?>
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Laporan Tanggal <?php echo IndonesiaTgl($mulai);?> sampai <?php echo IndonesiaTgl($selesai);?></div>
							<div class="panel-body">
							<div class = "table-responsive">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Kode Booking</th>
											<th>Paket</th>
											<th>Tgl.take</th>
											<th>Jam</th>
											<th>Tanggal Booking</th>
											<th>Tanggal Bayar</th>
											<th>Member</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
									<?php
                    $i = 0;
                    $now = date('Y-m-d');
                    $sqlsewa = "SELECT transaksi.*,paket.*,member.* FROM transaksi, paket, member 
                    WHERE transaksi.id_paket=paket.id_paket AND transaksi.email=member.email
                    ORDER BY transaksi.id_trx DESC";
        
                    $querysewa = mysqli_query($koneksidb, $sqlsewa);
                    while ($result = mysqli_fetch_array($querysewa)) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo htmlentities($result['id_trx']); ?></td>
                            <td><?php echo htmlentities($result['nama_paket']); ?></td>
                            <td><?php echo IndonesiaTgl(htmlentities($result['tgl_take'])); ?></td>
                            <td><?php echo htmlentities($result['jam_take']); ?></td>
							<td><?php echo IndonesiaTgl(htmlentities($result['tgl_trx']));?></td>
							<td><?php echo IndonesiaTgl(htmlentities($result['tgl_bayar']));?></td>
                            <td><a href="#myModal" data-toggle="modal" data-load-id="<?php echo $result['email']; ?>" data-remote-target="#myModal .modal-body"><?php echo $result['nama_user']; ?></a></td>
                            <td><?php echo format_rupiah($result['harga']);?></td>
                        </tr>
                    <?php } ?>
										
									</tbody>
								</table>
							</div>	
							</div>
						</div>
							<div class="form-group">
									<a href="laporan_cetak.php?awal=<?php echo $mulai;?>&akhir=<?php echo $selesai;?>" target="_blank" class="btn btn-primary">Cetak</a>
							</div>
						<?php }?>

	<!-- Large modal -->
	<div class="modal fade bs-example-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<p>One fine body…</p>
				</div>
			</div>
		</div>
	</div>  

	<section>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#jumlah').terbilang({
				'style'			: 3, 
				'output_div' 	: "jumlah2",
				'akhiran'		: "Rupiah",
			});

			window.print();
		});
	</script>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
<?php } ?>
