<?php
include('includes/config.php');
include('includes/format_rupiah.php');
include('includes/library.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="rental mobil">
	<meta name="author" content="">

	<title><?php echo $pagedesc;?></title>
	
	<link href="img/S09-Removebg.png" rel="icon" type="images/x-icon">

	<!-- Bootstrap Core CSS -->
	<link href="../assets/new/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../assets/new/offline-font.css" rel="stylesheet">
	<link href="../assets/new/custom-report.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../assets/new/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
	<script src="../assets/new/jquery.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<section id="header-kop">
		<div class="container-fluid">
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td rowspan="3" width="16%" class="text-center">
							<img src="img/S09-font-black.png" alt="logo-dkm" width="80" />
						</td>
						<td class="text-center"><h3>Studio 09	</h3></td>
						<td rowspan="3" width="16%">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center">Desa Nglandung, Geger, Madiun</td>
					</tr>
				</tbody>
			</table>
			<hr class="line-top" />
		</div>
	</section>

	<section id="body-of-report">
		<div class="container-fluid">
			<h4 class="text-center">Detail Laporan</h4>
    <br/>
    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Kode Booking</th>
                <th>Paket </th>
                <th>Member</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            // $now = date('Y-m-d');
            $sqlsewa = "SELECT transaksi.*,paket.*,member.* FROM transaksi, paket, member 
                        WHERE transaksi.id_paket=paket.id_paket AND transaksi.email=member.email 
                        ORDER BY transaksi.id_trx DESC";
            $querysewa = mysqli_query($koneksidb, $sqlsewa);
            while ($result = mysqli_fetch_array($querysewa)) {
                $i++;
            ?>
                <tr align="center">
                    <td><?php echo $i; ?></td>
                    <td><?php echo htmlentities($result['id_trx']); ?></td>
                    <td><?php echo htmlentities($result['nama_paket']); ?></td>
                    <td><a href="#myModal" data-toggle="modal" data-load-id="<?php echo $result['email']; ?>" data-remote-target="#myModal .modal-body"><?php echo $result['nama_user']; ?></a></td>
                </tr>
            <?php } ?>			
        </tbody>
    </table>
		</div><!-- /.container -->
	</section>
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
	<!-- Bootstrap Core JavaScript -->
	<script src="../assets/new/bootstrap.min.js"></script>
	<!-- jTebilang JavaScript -->
	<script src="../assets/new/jTerbilang.js"></script>

</body>
</html>