<div class="container" style="background-color:white" id="tamu">
	<a class="waves-effect waves-light btn bg-success mt-3 text-light" href="home.php?q=jemput-add">Minta Jemput</a>
    
<?php
	$tampil_jadwal = mysqli_query($koneksi,"SELECT id_jj,tgl_jemput,jam_jemput
										   FROM jjemput
										   WHERE id_karyawan=(SELECT id_karyawan FROM karyawan WHERE id_user=$id_user)");
?>

<H3 class="text-center"> Penjemputan Tamu </H3>
<table class="table table-bordered responsive-table" style="background-color:white">
	<thead>
		<tr>
    		<th>No.</th>
        	<th>Tanggal Jemput</th>
        	<th>Jam Jemput</th>	
    	</tr>
    </thead>
    <tbody>
<?php
	$no=1;
    while(list($id_jj,$tgl_jemput,$jam_jemput)=mysqli_fetch_row($tampil_jadwal)):
?>
    	<tr>
        	<td><?php echo $no;?></td>
        	<td><?php echo date("d/F/Y",strtotime($tgl_jemput));?></td>
        	<td><?php echo $jam_jemput;?></td>
        </tr>
<?php
	$no++;
	endwhile;
?>
	</tbody>
</table>
</div>
