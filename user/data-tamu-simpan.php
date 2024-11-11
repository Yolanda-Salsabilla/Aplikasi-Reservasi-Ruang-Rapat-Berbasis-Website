<?php
	$id_user = $_POST['id_user'];
	$nama_hotel = $_POST['nama_hotel'];
	$tgl_datang = $_POST['tgl_datang'];
	$tgl_pulang = $_POST['tgl_pulang'];
	include '../config/koneksi.php';
	
	$data = mysqli_query($koneksi,"INSERT INTO tamu (id_karyawan,nama_hotel,tgl_datang,tgl_pulang)
											 VALUES((SELECT id_karyawan FROM karyawan WHERE id_user=$id_user),
											 '$nama_hotel','$tgl_datang','$tgl_pulang')");
		if($data):
			echo "<script>alert('Berhasil masukan data'); location.href='../home.php?q=jemput';</script>";
		else:
			echo "<script>alert('Gagal simpan data jadwal jemput'); window.history.go(-1)</script>";
			exit();
		endif;
?>