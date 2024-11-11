<?php
	$nama_perlengkapan = $_POST['nama_perlengkapan'];
	$jumlah = $_POST['jumlah'];
	
	include '../config/koneksi.php';
	
	$tambah_perlengkapan = mysqli_query($koneksi,"INSERT INTO perlengkapan (nama_perlengkapan,jumlah)
											 VALUES('$nama_perlengkapan','$jumlah')");
											
		if($tambah_perlengkapan):
			echo "<script>alert('Berhasil tambah perlengkapan'); location.href='../home.php?q=p';</script>";
		else:
			echo "<script>alert('Gagal tambah perlengkapan'); window.history.go(-1)</script>";
			exit();
		endif;
		exit();
?>