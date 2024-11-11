<?php
	$id_user = $_POST['id_user'];
	$tgl_jemput = $_POST['tgl_jemput'];
	$jam_jemput = $_POST['jam_jemput'];	
	include '../config/koneksi.php';
	
	$minta_jemput = mysqli_query($koneksi,"INSERT INTO jjemput (id_karyawan,tgl_jemput,jam_jemput)
											 VALUES((SELECT id_karyawan FROM karyawan WHERE id_user=$id_user),
											 '$tgl_jemput','$jam_jemput')");
		if($minta_jemput):
			echo "<script>alert('Berhasil masukan data'); location.href='../home.php?q=jemput';</script>";
		else:
			echo "<script>alert('Gagal simpan data jadwal jemput'); window.history.go(-1)</script>";
			exit();
		endif;
?>