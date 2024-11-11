<?php
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	
	include '../config/koneksi.php';
	
	$tambah_ol = mysqli_query($koneksi,"INSERT INTO admin (nama,jumlah)
											 VALUES('$nama','$jumlah')");
											
	if($tambah_ol):
		$tambah_oleh2=mysqli_query($koneksi,"INSERT INTO oleh2 (nama,jumlah)
											  VALUES((SELECT id_oleh2 FROM oleh2 WHERE nama='$nama'),
													 '$nama','$jumlah')");
		if($tambah_oleh2):
			echo "<script>alert('Berhasil masukan oleh-oleh'); location.href='../home.php?q=ol';</script>";
		else:
			echo "<script>alert('Gagal tambah user umum'); window.history.go(-1)</script>";
			exit();
		endif;
	else:
		echo "<script>alert('Gagal tambah user umum'); window.history.go(-1)</script>";
		exit();
	endif;
?>