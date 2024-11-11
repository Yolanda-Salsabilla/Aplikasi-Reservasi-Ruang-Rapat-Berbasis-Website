<?php
	$pukul_jadwal = $_POST['pukul_jadwal'];	
	include '../config/koneksi.php';
	
	$tambah_waktu = mysqli_query($koneksi,"INSERT INTO jadwal (pukul_jadwal)
											 VALUES('$pukul_jadwal')");
		if($tambah_waktu):
			echo "<script>alert('Berhasil tambah waktu'); location.href='../home.php?q=rj';</script>";
		else:
			echo "<script>alert('Gagal tambah waktu'); window.history.go(-1)</script>";
			exit();
		endif;
?>