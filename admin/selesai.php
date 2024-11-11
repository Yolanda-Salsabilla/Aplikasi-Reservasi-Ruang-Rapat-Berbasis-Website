<?php
include "../config/koneksi.php";

$id_pesan=$_GET['id_pesan'];
$proses=$_GET['proses'];

if($proses=="proses")
	:

	$update_pesan=mysqli_query($koneksi,"UPDATE pesan set
										proses='selesai'
										WHERE id_pesan=$id_pesan");
										
										
										
	echo "<script>alert('Rapat Selesai');location.href='../home.php?q=lihat-permohonan';</script>";

else
	:
		echo "<script>alert('Anda Sudah Memilih Selesai');location.href='../home.php?q=lihat-permohonan';</script>";
endif;
?>