<?php 			
	$id_pesan = $_GET['id'];
	include "../config/koneksi.php";
	//echo mysqli_error($koneksi);
	//die();
	$hapus_tamu = mysqli_query($koneksi,"UPDATE pesan SET
	nama_tamu =null,nama_hotel = null,tgl_datang = null,tgl_pulang = null
	WHERE id_pesan=$id_pesan");
										
	if($hapus_tamu):
		echo "<script>alert('Berhasil hapus '); location.href='../home.php?q=tamu';</script>";
	else:
		echo "<script>alert('Gagal hapus'); window.history.go(-1);</script>";
		exit();
	endif;
?>