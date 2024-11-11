<div class="container" id="tamu">	
    <table class="highlight responsive-table" style="background-color:white">
		<thead>
        	<tr>
            	<th>No</th>
            	<th>Nama</th>
				<th>Peralatan </th>
				<th>Banyak </th>
				<th>Aksi</th>
			</tr>
        </thead>
    	<tbody>
		<?php
			$tampil_peminjaman = mysqli_query($koneksi,"SELECT
								 a.id_peminjaman,b.username,c.nama_perlengkapan,a.banyak
								 FROM peminjaman a,user b,perlengkapan c,pesan d
								 WHERE a.id_pesan=d.id_pesan
								 and d.pemesanan=b.id_user
								 and a.id_perlengkapan=c.id_perlengkapan
								 order by b.username
								 ");
			$no=1;
			while(list($id_peminjaman,$username,$nama_perlengkapan,$banyak)=mysqli_fetch_row($tampil_peminjaman)):
			//echo mysqli_error ($koneksi);
			//die();
		?>
        	<tr>
            	<td><?php echo $no++;?></td>
            	<td><?php echo $username;?></td>
            	<td><?php echo $nama_perlengkapan;?></td>
            	<td><?php echo $banyak;?></td>				
				<td> <a class="waves-effect waves-light black btn" href="admin/peminjaman-delete.php?id=<?php echo $id_peminjaman;?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">Hapus</a>
				</td>
            </tr>
			
			
		<?php
			endwhile;
		?>
        </tbody>
    </table>
</div>