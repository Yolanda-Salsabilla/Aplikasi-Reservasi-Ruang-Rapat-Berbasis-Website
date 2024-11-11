<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass = md5($password);
	
	include("koneksi.php");

	$samakan = mysqli_query($koneksi,"SELECT id_user,username,level FROM user WHERE 
		                              username='$username' AND password='$pass'");
	if(mysqli_num_rows($samakan)>0):
		list($id_user,$username,$level)=mysqli_fetch_row($samakan);
		$_SESSION['sesi_id']=$id_user;
		$_SESSION['sesi_username']=$username;
		$_SESSION['level']=$level;
		
		echo "<Script>location.href='../home.php';</script>";
	else:
		echo "<script>alert('Username atau Password Salah');window.history.go(-1); </script>";
		exit();
	endif;
?>