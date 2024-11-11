<?php
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fixpass = md5($password);
	
	include '../config/koneksi.php';
	
	$tambah_userum = mysqli_query($koneksi,"INSERT INTO user (username,password,level)
											 VALUES('$username','$fixpass','umum')");
											
	if($tambah_userum):
		$tambah_umum=mysqli_query($koneksi,"INSERT INTO umum (id_user,nama,alamat,email,no_telp)
											  VALUES((SELECT id_user FROM user WHERE username='$username'),
													 '$nama','$alamat','$email','$no_telp')");
		if($tambah_umum):
			echo "<script>alert('Berhasil tambah user umum'); location.href='../home.php?q=um';</script>";
		else:
			echo "<script>alert('Gagal tambah user umum'); window.history.go(-1)</script>";
			exit();
		endif;
	else:
		echo "<script>alert('Gagal tambah user umum'); window.history.go(-1)</script>";
		exit();
	endif;
?>