<?php
	$id_user = $_POST['id_user'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fixpass = md5($password);
	include '../config/koneksi.php';
	
	$sunting_karyawan = mysqli_query($koneksi,"UPDATE user SET
												username='$username',
												password='$fixpass'
											 WHERE id_user=$id_user");
	if($sunting_karyawan):
		echo "<script>alert('Berhasil edit karyawan'); location.href='../home.php?q=usb';</script>";
	else:
		echo "<script>alert('Gagal sunting User'); window.history.go(-1)</script>";
		exit();
	endif;
?>