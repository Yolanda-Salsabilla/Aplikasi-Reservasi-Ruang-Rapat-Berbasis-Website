<?php
	$id_ruangan = $_POST['id_ruangan'];
	$nama_ruangan = $_POST['nama_ruangan'];
	$kapasitas = $_POST['kapasitas'];
	
	include '../config/koneksi.php';
	
	$edit = mysqli_query($koneksi,"UPDATE ruangan SET
												nama_ruangan='$nama_ruangan',
												kapasitas='$kapasitas'
											 WHERE id_ruangan=$id_ruangan");
	if($edit):
		echo "<script>alert('Berhasil Edit'); location.href='../home.php?q=rj';</script>";
	else: 
		echo "<script>alert('Gagal sunting User'); window.history.go(-1)</script>";
		exit();
	endif;
?>