<!----------------Awal Tamu---->

<div class="container mt-3" style="background-color: Dark Cyan">
<div class="row-fluid" id="backhead">
<h3 align="center" id="font">Jadwal Tamu</h3>
</div>
<table class="table table-bordered responsive-table" >
	<thead>
		<tr>
    		<th>No.</th>
			<th>Nama Peminta </th>
			<th>Nama Tamu </th>
			<th>No Telp</th>
        	<th>Nama Hotel</th>
        	<th>Tanggal Datang</th>
			<th>Tanggal Pulang</th>
			<th>Aksi</th>
    	</tr>
    </thead>
    <tbody>

	
<?php
			$panggil = mysqli_query($koneksi,"SELECT a.id_pesan,b.username,a.nama_tamu,a.no_telp,a.nama_hotel,a.tgl_datang,a.tgl_pulang
													FROM pesan a,user b
													WHERE a.pemesanan=b.id_user
														  ");
			$no=1;
			while(list($id_pesan,$username,$nama_tamu,$no_telp,$nama_hotel,$tgl_datang,$tgl_pulang)=mysqli_fetch_row($panggil)):
?>
    	<tr>	
    		<?php if(!empty($nama_hotel)):?>
        	<td><?php echo $no;?></td>
			<td><?php echo $username;?></td>
			<td><?php echo $nama_tamu;?></td>
			<td><?php echo $no_telp;?></td>
			<td><?php echo $nama_hotel?></td>
        	<td><?php echo date("d/F/Y",strtotime($tgl_datang));?></td>
        	<td><?php echo date("d/F/Y",strtotime($tgl_pulang));?></td>
			<td> <a class="waves-effect waves-light bg-danger btn text-light" href="admin/tamu-delete.php?id=<?php echo $id_pesan;?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">Hapus</a>
			</td>
			<?php endif;?>
        </tr>
<?php
	$no++;
	endwhile;
?>
	</tbody>
</table>

</div>



<!-------->
<div class="container" style="background-color:white">
<?php
	$tampil_jadwal = mysqli_query($koneksi,"SELECT a.id_jj,a.tgl_jemput,a.jam_jemput,b.nama
										   FROM jjemput a, karyawan b
										   WHERE a.id_karyawan=b.id_karyawan");
?>
<div class="row-fluid" id="backhead">
<h3 align="center" id="font">Jemput Tamu</h3>
</div>
<table class="table table-bordered responsive-table" >
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
        	<td><?php echo date("d/F/Y",strtotime($tgl_jemput));?></td>
        	<td><?php echo $jam_jemput;?></td>
		<td> <a class="waves-effect waves-light bg-danger btn text-light" href="admin/jemput-delete.php?id=<?php echo $id_jj;?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">Hapus</a>
		</td>
        </tr>
<?php
	$no++;
	endwhile;
?>
</tbody>
</table>
</div>

