<div class="container-xl">
	<div class="row">
		<H3 class="text-center mt-3"> Rekap Data Reservasi</H3>
		<div class="border table-responsive rounded-2 m-2 p-2">
			<table id="table-data1" class="display responsive nowrap" style="width:100%">
				<thead>
					<tr>
						<th rowspan="2">No</th>
						<th rowspan="2">Peminta </th>
						<th rowspan="2">Tgl Acara/Waktu</th>
						<th rowspan="2">Tgl Input </th>
						<th rowspan="2">Jumlah Peserta</th>
						<?php
						$konsumsi = mysqli_query($koneksi, "SELECT id_menu,nama_menu FROM menu");
						$konsumsi_col = mysqli_num_rows($konsumsi);
						?>
						<th colspan="<?php echo $konsumsi_col; ?>"> Konsumsi</th>
						<th colspan="3">Tamu</th>
						<th rowspan="2"> Ruang Acara</th>
						<th rowspan="2"> Keterangan</th>
					</tr>

					<tr>
						<?php
						while (list($id_menu, $nama_menu) = mysqli_fetch_row($konsumsi)) :
							echo "<td>$nama_menu</td>";
						endwhile;
						?>
						<td>Hotel </td>
						<td>Tgl Datang </td>
						<td>Tgl Pulang </td>


					</tr>
				</thead>

				<tbody></tbody>
			</table>
		</div>
		<!-- <a class="waves-effect waves-light blue btn" href="phpexcel/exportexcel.php">
			Cetak EXCEL
		</a> -->
	</div>
</div>