<?php
	$id_peminjaman = $_GET['id'];
	include "../config/koneksi.php";
	
	$hapus_peminjaman = mysqli_query($koneksi,"DELETE FROM peminjaman WHERE id_peminjaman=$id_peminjaman");
										
	if($hapus_peminjaman):
		echo "<script>alert('Berhasil hapus'); location.href='../home.php?q=lihat-pm';</script>";
	else:
		echo "<script>alert('Gagal hapus'); window.history.go(-1);</script>";
		exit();
	endif;
?>