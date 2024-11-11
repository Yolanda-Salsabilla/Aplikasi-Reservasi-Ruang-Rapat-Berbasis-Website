<?php
	$id_pesan = $_POST['id_pesan'];
	$status = $_POST['status'];
	
	include '../config/koneksi.php';
	//echo mysqli_error($koneksi);
	//die();
	$konfirm = mysqli_query($koneksi,"UPDATE pesan SET status='$status'
									  WHERE id_pesan=$id_pesan");
											
	if($konfirm):
		echo "<script>alert('Berhasil konfirmasi'); location.href='../home.php?q=lihat-permohonan';</script>";
	else:
		echo "<script>alert('Gagal konfirmasi'); windows.history.go(-1)</script>";
		exit();
	endif;
?>