<?php $koneksi = mysqli_connect("localhost", "root", "", "ar3");

// Ambil data menu dari database
$konsumsi_query = mysqli_query($koneksi, "SELECT id_menu, nama_menu FROM menu");
$konsumsi_data = array();
while ($row = mysqli_fetch_assoc($konsumsi_query)) {
    $konsumsi_data[$row['id_menu']] = $row['nama_menu'];
}

// Ambil data pesanan dari database
$panggil = mysqli_query($koneksi, "SELECT d.username, a.waktu, a.waktu_selesai, a.tgl_pesan, a.tgl_selesai, a.tgl_input, a.jam_input, a.nama_acara, a.jumlah_peserta, b.nama_ruangan, a.id_pesan,a.snack_pagi,a.makan_siang,a.snack_siang,a.makan_malam,a.nama_hotel,a.tgl_datang,a.tgl_pulang
FROM pesan a
INNER JOIN ruangan b ON a.id_ruangan = b.id_ruangan
INNER JOIN jadwal c ON c.pukul_jadwal = a.waktu
INNER JOIN user d ON a.pemesanan = d.id_user
ORDER BY a.tgl_pesan");

$data = array();
while ($row = mysqli_fetch_assoc($panggil)) {
    $rowData = array(
        'No' => $row['id_pesan'],
        'Peminta' => $row['username'],
        'Tgl Acara/Waktu' => date("d/F/Y", strtotime($row['tgl_pesan'])) . '<br>Selesai &nbsp;: ' . date("d/F/Y", strtotime($row['tgl_selesai'])) . '<br>' . $row['nama_acara'] . '<br>Waktu :' . $row['waktu'] . ' - ' . $row['waktu_selesai'],
        'Tgl Input' => ($row['tgl_input'] != "0000-00-00") ? date("d/F/Y", strtotime($row['tgl_input'])) . " " . $row['jam_input'] : '',
        'Jumlah Peserta' => $row['jumlah_peserta'],
        'Snack Pagi' => $row['snack_pagi'],
        'Makan Siang' => $row['makan_siang'],
        'Snack Siang' => $row['snack_siang'],
        'Makan Malam' => $row['makan_malam'],
        'Nama Hotel' => $row['nama_hotel'],
        'Tgl Datang' => $row['tgl_datang'],
        'Tgl Pulang' => $row['tgl_pulang'],
        'Ruang Acara' => $row['nama_ruangan'],
        'Keterangan' => '' // Sesuaikan dengan kolom keterangan
    );

    // Cek konsumsi untuk setiap menu
    // foreach ($konsumsi_data as $id_menu => $nama_menu) {
    //     $panggil_pesan = mysqli_query($koneksi, "SELECT id_menu_pesan FROM menu_pesan WHERE id_menu='$id_menu' AND id_pesan='" . $row['id_pesan'] . "'");
    //     $panggil_pesan_q = mysqli_num_rows($panggil_pesan);
    //     $rowData[$nama_menu] = ($panggil_pesan_q > 0) ? 'Iya' : 'Tidak';
    // }

    $data[] = $rowData;
}

// Format respons JSON
$response = array(
    'data' => $data
);

// Mengirim respons dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
