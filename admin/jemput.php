<div class="container" style="background-color:white">
<?php
	$tampil_jadwal = mysqli_query($koneksi,"SELECT a.id_jj,a.tgl_jemput,a.jam_jemput,
													b.nama
										   FROM jjemput a, karyawan b
										   WHERE a.id_karyawan=b.id_karyawan");
	if(empty(mysqli_num_rows($tampil_jadwal))):
		echo "Jadwal Jemput Tidak Ada";
	else:
?>

<table>
	<thead>
		<tr>
    		<th>No.</th>
			<th>Nama </th>
        	<th>Tanggal Jemput</th>
        	<th>Jam Jemput</th>
			<th>Aksi</th>
    	</tr>
    </thead>
    <tbody>
<?php
	$no=1;
    while(list($id_jj,$tgl_jemput,$jam_jemput,$nama)=mysqli_fetch_row($tampil_jadwal)):
?>
    	<tr>
        	<td><?php echo $no;?></td>
			<td><?php echo $nama;?></td>
        	<td><?php echo $tgl_jemput;?></td>
        	<td><?php echo $jam_jemput;?></td>
			<td> <a class="waves-effect waves-light black btn" href="admin/jemput-delete.php?id=<?php echo $id_jj;?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">
                		Hapus
                	</a>
			</td>
        </tr>
<?php
	$no++;
	endwhile;
?>
	</tbody>
</table>
<?php endif;?>
</div>