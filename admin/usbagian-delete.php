<?php
	$id_karyawan = $_GET['id'];
	
	$hapus_karyawan = mysqli_query($koneksi,"DELETE FROM karyawan WHERE id_karyawan=$id_karyawan");
										
	if($hapus_karyawan):
		echo "<script>alert('Berhasil hapus user'); location.href='home.php?q=usb';</script>";
	else:
		echo "<script>alert('Gagal hapus user'); window.history.go(-1);</script>";
		exit();
	endif;
?>