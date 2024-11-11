  <div class="container-fluid" id="edit-permintaan">
    <div class="row p-5 bordered">
      <table id="tabel-data">
        <thead>
          <th>Nomor</th>
          <th>Nama Pemohon</th>
          <th>Nama Acara</th>
          <th>Jumlah Peserta</th>
          <th>Nama Ruangan</th>
          <th>Waktu</th>
          <th>Tanggal Pesanan</th>
          <th>Tanggal Input Data</th>
          <th colspan="2" style="text-align: center">Status</th>
          <th>Proses</th>
          <th colspan="2">Aksi</th>
          <th>PDF</th>
        </thead>
        <tbody>
          <?php
          $tampil_permohonan = mysqli_query($koneksi, "SELECT a.id_pesan, d.username, a.nama_acara, a.jumlah_peserta, a.proses, b.nama_ruangan, a.waktu, a.waktu_selesai, a.tgl_pesan, a.tgl_selesai, a.tgl_input, a.jam_input, a.status, a.pdf
            FROM pesan a, ruangan b, jadwal c, user d
            WHERE a.id_pesan = a.id_pesan
            AND a.nama_acara = a.nama_acara
            AND a.jumlah_peserta = a.jumlah_peserta
            AND a.id_ruangan = b.id_ruangan
            AND c.pukul_jadwal = a.waktu
            AND a.pemesanan = d.id_user
            ORDER BY a.tgl_pesan DESC");

          $no = 1;
          while ($row = mysqli_fetch_assoc($tampil_permohonan)) {
            $id_pesan = $row['id_pesan'];
            $username = $row['username'];
            $nama_acara = $row['nama_acara'];
            $jumlah_peserta = $row['jumlah_peserta'];
            $proses = $row['proses'];
            $nama_ruangan = $row['nama_ruangan'];
            $waktu = $row['waktu'];
            $waktu_selesai = $row['waktu_selesai'];
            $tgl_pesan = $row['tgl_pesan'];
            $tgl_selesai = $row['tgl_selesai'];
            $tgl_input = $row['tgl_input'];
            $jam_input = $row['jam_input'];
            $status = $row['status'];
            $pdf = $row['pdf']; // tempat peng inisialisasian variabel
          ?>

            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $username; ?></td>
              <td><?php echo $nama_acara; ?></td>
              <td><?php echo $jumlah_peserta; ?></td>
              <td><?php echo $nama_ruangan; ?></td>
              <td>Mulai: <?php echo $waktu; ?><br>Selesai: <?php echo $waktu_selesai; ?></td>
              <td>Mulai: <?php echo date("d/F/Y", strtotime($tgl_pesan)); ?> <br>Selesai: <?php echo date("d/F/Y", strtotime($tgl_selesai)); ?></td>
              <td><?php if ($tgl_input != "0000-00-00") echo date("d/F/Y", strtotime($tgl_input)) . " " . $jam_input; ?></td>
              <td>
                <form action="admin/lihat-usb-konfirmasi.php" method="post">
                  <div class="input-field col s12">
                    <input type="hidden" value="<?php echo $id_pesan; ?>" name="id_pesan">
                    <select name="status">
                      <option value="" disabled selected>Tindakan</option>
                      <option value="ya">YA</option>
                      <option value="tidak">TIDAK</option>
                    </select>
                    <button class="btn waves-effect waves-light black" type="submit" name="action">Kirim</button>
                  </div>
                </form>
              </td>
              <td> <?php echo $status; ?></td>
              <td><?php echo $proses; ?>|<a href="admin/selesai.php?id_pesan=<?php echo $id_pesan; ?>&proses=<?php echo $proses; ?>">Selesai</a></td>
              <td width="100px">
                <a class="waves-effect waves-light blue btn" href="home.php?q=permohonan-edit&id=<?php echo $id_pesan; ?>">
                  Edit
                </a>
              </td>
              <td width="100px">
                <a class="waves-effect waves-light red btn" href="home.php?q=permohonan-delete&id=<?php echo $id_pesan; ?>" onclick="javascript: return confirm('Anda yakin ingin hapus?');">
                  Hapus
                </a>
              </td>
              <td>
                <a href="user/uploads/<?php echo $pdf; ?>" download>
                  <?php echo $pdf; ?>
                </a>
              </td>
              
            </tr>
            
          <?php
          }
          ?>
          
        </tbody>

      </table>
    </div>
  </div>
