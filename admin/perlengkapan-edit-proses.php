<?php
	$id_perlengkapan = $_POST['id_perlengkapan'];
	$nama_perlengkapan = $_POST['nama_perlengkapan'];
	$jumlah = $_POST['jumlah'];
	
	include '../config/koneksi.php';
	
	$edit = mysqli_query($koneksi,"UPDATE perlengkapan SET
												nama_perlengkapan='$nama_perlengkapan',
												jumlah='$jumlah'
											 WHERE id_perlengkapan=$id_perlengkapan");
	if($edit):
		echo "<script>alert('Berhasil Edit'); location.href='../home.php?q=p';</script>";
	else:
		echo "<script>alert('Gagal Edit'); window.history.go(-1)</script>";
		exit();
	endif;
?>