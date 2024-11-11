<?php
	$nama_menu = $_POST['nama_menu'];
	include '../config/koneksi.php';
	
	$tambah_menu = mysqli_query($koneksi,"INSERT INTO menu (nama_menu)
											 VALUES('$nama_menu')");
											
		if($tambah_menu):
			echo "<script>alert('Berhasil tambah menu'); location.href='../home.php?q=menu';</script>";
		else:
			echo "<script>alert('Gagal tambah perlengkapan'); window.history.go(-1)</script>";
			exit();
		endif;
		exit();
?>