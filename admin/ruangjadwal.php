<!---------Bagian Ruangan--------->
<div class="container mt-3">
	<a class="modal-trigger waves-effect waves-light bg-success text-light btn mb-3" href="#modal13">Tambah Ruangan</a>
	
	
	<div id="modal13" class="modal w-50 h-50">
    	<form method="post" action="admin/ruang-add.php">
		<div class=" modal-content">
			<div class="row">
			<img class="col-lg-4 img-fluid" src="img/pln.png" alt="">
			<h4>Buat Data Ruangan</h4>
				<div class="input-field col s6">
					<input id="nama_ruangan" type="text" name="nama_ruangan" class="validate" required>
					<label for="nama_ruangan">Nama Ruangan</label>
				</div>
				<div class="input-field col s6">
					<input id="kapasitas" type="text" name="kapasitas" class="validate" required>
					<label for="kapasitas">Kapasitas</label>
				</div>
			</div>
			
        </div>
		<div class="modal-footer">
			<button  class="btn waves-effect waves-light red darken-4" type="submit" name="action">Tambah
			</button>
			<a href="#!" class="modal-action modal-close waves-effect btn ">Batal</a>
		</div>
		</form>
	</div>
    <table class="table table-bordered highlight responsive-table" style="background-color:white">
		<thead>
        	<tr>
            	<th>No.</th>
            	<th>Nama Ruangan</th>
            	<th>Kapasitas</th>
                <th colspan="3" style="text-align:center">Aksi</th>
            </tr>
        </thead>
    	<tbody>
		<?php
			$tampil_ruang = mysqli_query($koneksi,"SELECT id_ruangan,nama_ruangan,kapasitas
													FROM ruangan 
													WHERE id_ruangan=id_ruangan");
			$no=1;
			while(list($id_ruangan,$nama_ruangan,$kapasitas)=mysqli_fetch_row($tampil_ruang)):
		?>
        	<tr>
            	<td><?php echo $no;?></td>
            	<td><?php echo $nama_ruangan;?></td>
            	<td><?php echo $kapasitas;?></td>
        		<td width="100px">
            		<a class="waves-effect waves-light btn -3 bg-warning text-light" href="home.php?q=rj-edit&id=<?php echo $id_ruangan;?>">
                		Edit
                	</a>
            	</td>
            	<td width="100px">
            		<a class="waves-effect waves-light btn bg-danger text-light" href="home.php?q=rj-del&id=<?php echo $id_ruangan;?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">
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
</div>
<!-----------Akhir Ruangan----------->
<!-----------Bagian Jadwal----------->
<div class="container">
	<a class="modal-trigger waves-effect waves-light bg-light darken-4 btn" href="#modal1">Tambah Jadwal Acara</a>
	
	
	<div id="modal1" class="modal w-50 h-50">
    	<form method="post" action="admin/waktu-add.php">
		<div class="modal-content">
		<img class="col-lg-4" src="img/pln.png" alt="">
		<hr>
			<h4>Buat Waktu Acara</h4>
			<div class="row">
				<div class="input-field col s6">
					<input id="pukul_jadwal" type="text" name="pukul_jadwal" class="validate" required>
					<label for="pukul_jadwal">Waktu Acara</label>
				</div>
			</div>
			
        </div>
		<div class="modal-footer">
			<button  class="btn waves-effect waves-light red darken-4" type="submit" name="action">Tambah
			</button>
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Batal</a>
		</div>
		</form>
	</div>
    <table class="table table-bordered  highlight responsive-table" style="background-color:white">
		<thead>
        	<tr>
            	<th>No.</th>
            	<th>Waktu Acara</th>
                <th colspan="2" style="text-align:center">Aksi</th>
            </tr>
        </thead>
    	<tbody>
		<?php
			$tampil_waktu = mysqli_query($koneksi,"SELECT id_jadwal,pukul_jadwal
													FROM jadwal 
													WHERE id_jadwal=id_jadwal
													order by pukul_jadwal");
			$no=1;
			while(list($id_jadwal,$pukul_jadwal)=mysqli_fetch_row($tampil_waktu)):
		?>
        	<tr>
            	<td><?php echo $no;?></td>
            	<td><?php echo $pukul_jadwal;?></td>
            	<td width="100px">
            		<a class="waves-effect waves-light teal darken-1 btn" href="home.php?q=rjw-del&id=<?php echo $id_jadwal;?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">
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
</div>
<!-------------Akhir Jadwal----------->