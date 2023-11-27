<?php
include('includes/config.php');
error_reporting(0);
$id=$_POST['id'];
$nama=$_POST['nama'];

$sql 	= "UPDATE portofolio SET nama_portofolio='$nama' WHERE id_portofolio='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil ubah data.'); 
			document.location = 'gallery.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'gallery_edit.php?id=$id'; 
		</script>";
}
?>