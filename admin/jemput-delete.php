<?php
	$id_jj = $_GET['id'];
	include "../config/koneksi.php";
	
	$hapus_jjemput = mysqli_query($koneksi,"DELETE FROM jjemput WHERE id_jj=$id_jj");
										
	if($hapus_jjemput):
		echo "<script>alert('Berhasil hapus jadwal jemput'); location.href='../home.php?q=tamu';</script>";
	else:
		echo "<script>alert('Gagal hapus jadwal jemput'); window.history.go(-1);</script>";
		exit();
	endif;
?>