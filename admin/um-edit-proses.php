<?php
	$id_umum = $_POST['id_umum'];	
	$nama_um = $_POST['nama_um'];
	$alamat_um = $_POST['alamat_um'];
	$email_um = $_POST['email_um'];
	$no_telp = $_POST['no_telp'];
	
	include '../config/koneksi.php';
	
	$sunting_umum = mysqli_query($koneksi,"UPDATE umum SET
												nama='$nama_um',
												alamat='$alamat_um',
												email='$email_um',
												no_telp='$no_telp'
											 WHERE id_umum=$id_umum");
	if($sunting_umum):
		echo "<script>alert('Berhasil sunting user umum'); location.href='../home.php?q=um';</script>";
	else:
		echo "<script>alert('Gagal sunting User umum'); window.history.go(-1)</script>";
		exit();
	endif;
?>