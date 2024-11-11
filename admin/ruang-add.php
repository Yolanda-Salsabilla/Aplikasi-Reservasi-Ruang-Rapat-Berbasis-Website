<?php
	$nama_ruangan = $_POST['nama_ruangan'];
	$kapasitas = $_POST['kapasitas'];	
	include '../config/koneksi.php';
	
	$tambah_ruang = mysqli_query($koneksi,"INSERT INTO ruangan (nama_ruangan,kapasitas)
											 VALUES('$nama_ruangan','$kapasitas')");
		if($tambah_ruang):
			echo "<script>alert('Berhasil tambah ruangan'); location.href='../home.php?q=rj';</script>";
		else:
			echo "<script>alert('Gagal tambah ruangan'); window.history.go(-1)</script>";
			exit();
		endif;
?>