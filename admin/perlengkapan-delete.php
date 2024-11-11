<?php
	$id_perlengkapan = $_GET['id'];
	
	$hapus_perlengkapan = mysqli_query($koneksi,"DELETE FROM perlengkapan WHERE id_perlengkapan=$id_perlengkapan");
										
	if($hapus_perlengkapan):
		echo "<script>alert('Berhasil hapus'); location.href='home.php?q=p';</script>";
	else:
		echo "<script>alert('Gagal hapus '); window.history.go(-1);</script>";
		exit();
	endif;
?>