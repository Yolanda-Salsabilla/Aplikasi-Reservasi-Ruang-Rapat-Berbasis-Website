<?php
	$nama = $_POST['nama'];
	$no_telp = $_POST['no_telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fixpass = md5($password);
	
	include '../config/koneksi.php';
	
	$tambah_userusb = mysqli_query($koneksi,"INSERT INTO user (username,password,level)
											 VALUES('$username','$fixpass','karyawan')");
											
	if($tambah_userusb):
		$tambah_karyawan=mysqli_query($koneksi,"INSERT INTO karyawan (id_user,nama,no_telp)
											  VALUES((SELECT id_user FROM user WHERE username='$username'),
													 '$nama','$no_telp')");
		if($tambah_karyawan):
			echo "<script>alert('Berhasil tambah user'); location.href='../home.php?q=usb';</script>";
		else:
			echo "<script>alert('Gagal tambah user'); window.history.go(-1)</script>";
			exit();
		endif;
	else:
		echo "<script>alert('Gagal tambah user karyawan'); window.history.go(-1)</script>";
		exit();
	endif;
?>