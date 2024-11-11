<div class="container mt-3">
    <table class="table table-bordered highlight responsive-table" id="background">
		<thead>
        	<tr>
            	<th>No.</th>
            	<th>Nama Pemohon </th>
				<th>Nama Acara</th>
				<th>Tanggal Acara </th>
				<th>Pointer </th>
				<th>Proyektor </th>
				
            </tr>
        </thead>
    	<tbody>
		<?php 
			$tampil_perlengkapan = mysqli_query($koneksi,"SELECT a.pemesanan,a.nama_acara,a.tgl_pesan,a.tgl_selesai,a.pointer,a.proyektor,b.username
			FROM pesan a, user b
			WHERE a.pemesanan=b.id_user
			ORDER BY a.tgl_pesan DESC");
			$no=1;
			while(list($pemesanan,$nama_acara,$tgl_pesan,$tgl_selesai,$pointer,$proyektor,$username,$pdf)=mysqli_fetch_row($tampil_perlengkapan)):
			if($pointer!=null or $proyektor!=null) {
		?>
        	<tr>
            	<td><?php echo $no;?></td>
            	<td><?php echo $username;?></td>
            	<td><?php echo $nama_acara; ?></td>
				<td><?php echo $tgl_pesan; ?> sd <?php echo $tgl_selesai; ?></td>
				<td><?php echo $pointer; ?></td>
        		<td><?php echo $proyektor; ?></td>
            </tr>
			
		<?php
			$no++;
			}
			endwhile;
		?>
        </tbody>
    </table>
</div>