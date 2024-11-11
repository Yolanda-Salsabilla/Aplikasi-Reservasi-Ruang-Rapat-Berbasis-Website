<div class="container">
	<a id="background2" class="modal-trigger waves-effect waves-light grey darken-4 btn" href="#modal5">Tambah</a>

	<div id="modal5" class="modal">
    	<form method="post" action="admin/menukonsumsi-add.php">
		<div class="modal-content">
			<h4>Buat Menu</h4>
			<div class="row">
				<div class="input-field col s8">
				<i class="material-icons prefix">restaurant_menu</i>
					<input id="nama" type="text" name="nama_menu" class="validate" required>
					<label for="nama">Nama Menu</label>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn waves-effect waves-light green" type="submit" name="action">Tambah
				<i class="material-icons right">add</i>
			</button>
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Batal</a>
		</div>
		</form>
	</div>
    <table class="highlight responsive-table" id="background">
		<thead>
        	<tr>
            	<th>No.</th>
            	<th>Nama Menu</th>
            	<th>Aksi</th>
            </tr>
        </thead>
    	<tbody>
<?php 
			$tampil_menu = mysqli_query($koneksi,"SELECT *
													FROM menu");
			$no=1;
			while(list($id_menu,$nama_menu)=mysqli_fetch_row($tampil_menu)):
		?>
        	<tr>
            	<td><?php echo $no;?></td>
            	<td><?php echo $nama_menu;?></td>			
            	<td width="100px"> 
            		<a class="waves-effect waves-light red btn" href="home.php?q=menukonsumsi-delete&id=<?php echo $id_menu;?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">
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