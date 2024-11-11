<div class="container mt-5" id="edit-permintaan">
		<div class="row">

	<H3 class="text-center"> Lihat Pesanan Acara</H3>
    <table class="table table-bordered responsive-table" style="background-color:white">
		<thead>
        	<tr>
            	<th>No.</th>
            	<th>Nama Ruangan</th>
				<th>Waktu</th>
            	<th>Tanggal Pesanan</th>
				<th>Tanggal Input Pesanan</th>
            	<th>Status Konfirmasi</th>
            </tr>
        </thead>
    	<tbody>
		<?php 
			$no=1;
			include "../config/koneksi.php";
				$panggil = mysqli_query($koneksi,"SELECT 
							a.nama_ruangan,
							c.tgl_pesan,c.tgl_selesai,c.tgl_input,c.jam_input,
							c.status,
							c.id_pesan,
							c.waktu,
							c.waktu_selesai
							from ruangan a, jadwal b,pesan c
							where
							a.id_ruangan=c.id_ruangan
							and b.pukul_jadwal=c.waktu
							and c.pemesanan='$id_user'");
				while(list($nama_ruangan,$tgl_pesan,$tgl_selesai,$tgl_input,$jam_input,$status,$id_pesan,$waktu,$waktu_selesai)=mysqli_fetch_row($panggil))
				:
	
	?>
		
		
        	<tr>
            	<td><?php echo $no++;?></td>
            	<td><?php echo $nama_ruangan;?></td>
				<td><?php echo $waktu;?> <br><?php echo $waktu_selesai;?></td>
				<td>Mulai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo date("d/F/Y",strtotime($tgl_pesan)); ?> <br>Selesai &nbsp;: <?php echo date("d/F/Y",strtotime($tgl_selesai));?> </td>
				<td><?php if($tgl_input !="0000-00-00") echo date("d/F/Y",strtotime($tgl_input))." ".$jam_input; ?> </td>
				<td><?php echo $status;?></td>
				
            </tr>
			<?php endwhile;?>
        </tbody>
    </table>
	
		</div>
</div>