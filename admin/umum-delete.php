<?php
	$id_umum = $_GET['id'];
	
	$hapus_umum = mysqli_query($koneksi,"DELETE FROM umum WHERE id_umum=$id_umum");
										
	if($hapus_umum):
		echo "<script>alert('Berhasil hapus user umum'); location.href='home.php?q=um';</script>";
	else:
		echo "<script>alert('Gagal hapus user umum'); window.history.go(-1);</script>";
		exit();
	endif;
?>