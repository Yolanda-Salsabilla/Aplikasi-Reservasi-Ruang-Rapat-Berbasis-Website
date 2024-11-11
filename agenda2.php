<?php 
	$host="localhost"; //hostname
	$user="root"; //username
	$pass="qwerty@kitsbs"; //password
	$database="ar3"; // database name
	$ar3 = mysql_connect($host,$user,$pass) or die; 
	mysql_select_db($database,$ar3) or die; 
	
	$today = date("Y-m-d");
	$query = mysql_query("select * from pesan x, ruangan y where ('$today' between x.tgl_pesan and x.tgl_selesai) and x.id_ruangan = y.id_ruangan ORDER BY x.waktu ASC");
	$c		= mysql_num_rows($query);
	if($c>0){
		while($row=mysql_fetch_array($query)){
			echo "<span style='font-weight:bold'>".$row['nama_ruangan']." :</span>";	
			echo "<br>".$row['nama_acara'];	
			echo " (".$row['waktu']."-".$row['waktu_selesai'].")";	
			echo "<h5 style='border-bottom:1px solid #ccc;margin:0.3em'></h5>";
		}
	}
	else{ echo "<p style='text-align:left'>Tidak ada agenda.</p>";}
	
?> 