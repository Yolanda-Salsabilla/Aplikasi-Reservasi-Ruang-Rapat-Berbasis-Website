<?php
date_default_timezone_set('Asia/Jakarta');

// // Validasi input
// $required_fields = ['ruangan', 'nama_acara', 'tgl_permohonan', 'tgl_selesai', 'jumlah_peserta', 'nama_tamu', 'no_telp', 'id_user'];
// $waktu = $_POST['waktu'];
// $waktu_selesai = $_POST['waktu_selesai'];
// foreach ($required_fields as $field) {
//     if (empty($_POST[$field])) {
//         echo "Semua kolom harus diisi.";
//         exit();
//     }
// }

$ruangan = $_POST['ruangan'];
$nama_acara = $_POST['nama_acara'];
$waktu = $_POST['waktu'];
$waktu_selesai = $_POST['waktu_selesai'];
$tgl_permohonan = $_POST['tgl_permohonan'];
$tgl_selesai = $_POST['tgl_selesai'];
$jumlah_peserta = $_POST['jumlah_peserta'];
$nama_tamu = $_POST['nama_tamu'];
$no_telp = $_POST['no_telp'];
$nama_hotel= $_POST['nama_hotel'];
$tgl_datang = $_POST['tgl_datang'];
$tgl_pulang = $_POST['tgl_pulang'];	
$id_user = $_POST['id_user'];
$snack_pagi = $_POST['snack_pagi'];
$makan_siang = $_POST['makan_siang'];
$snack_siang = $_POST['snack_siang'];
$makan_malam = $_POST['makan_malam'];
$pointer= $_POST['pointer'];
$proyektor= $_POST['proyektor'];

// Keamanan unggahan berkas PDF
$uploadDir = 'uploads/'; //tempat menyimpan pdfnya
$uploadedFile = $uploadDir . basename($_FILES['pdf_file']['name']);
$fileType = strtolower(pathinfo($uploadedFile, PATHINFO_EXTENSION)); 

if ($fileType !== 'pdf') { // tipe file yang di izinkan hanya pdf
    echo "Hanya file PDF yang diizinkan.";
    exit();
}

if (!move_uploaded_file($_FILES['pdf_file']['tmp_name'], $uploadedFile)) {
    echo "Gagal mengunggah file.";
    exit();
}

$pdf = $_FILES['pdf_file']['name']; //inisialisasi variabel pdf untuk penyimpanan pdf

include "../config/koneksi.php";

$panggil_waktu = mysqli_query($koneksi,"SELECT pukul_jadwal FROM jadwal where id_jadwal='$waktu'");
	
list($waktu1)=mysqli_fetch_row($panggil_waktu);

$panggil_waktus = mysqli_query($koneksi,"SELECT pukul_jadwal FROM jadwal where id_jadwal='$waktu_selesai'");

list($waktu2)=mysqli_fetch_row($panggil_waktus);
$data = mysqli_query($koneksi,"SELECT * FROM pesan WHERE id_ruangan='$ruangan'
                                                            
                and tgl_pesan<='$tgl_selesai'and tgl_selesai>='$tgl_permohonan'
                and waktu<='$waktu2' and waktu_selesai>='$waktu1'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    echo "<script>alert('Bokingan Penuh');window.history.go(-1);</script>";
    exit();
} else {
    $tgl_input = date("Y-m-d");
    $jam_input = date("H:i:s");

    $simpan = mysqli_query($koneksi, "INSERT INTO pesan SET 
        pemesanan='{$_POST['id_user']}',
        id_ruangan='$ruangan',
        nama_acara='$nama_acara',
        waktu='$waktu1',
        waktu_selesai='$waktu2',
        tgl_pesan='{$_POST['tgl_permohonan']}',
        tgl_selesai='{$_POST['tgl_selesai']}',
        jumlah_peserta='{$_POST['jumlah_peserta']}',
        nama_tamu='{$_POST['nama_tamu']}',
        no_telp='{$_POST['no_telp']}',
        nama_hotel='{$_POST['nama_hotel']}',
        tgl_datang='{$_POST['tgl_datang']}',
        tgl_pulang='{$_POST['tgl_pulang']}',
        snack_pagi='{$_POST['snack_pagi']}',
        makan_siang='{$_POST['makan_siang']}',
        snack_siang='{$_POST['snack_siang']}',
        makan_malam='{$_POST['makan_malam']}',
        pointer='{$_POST['pointer']}',
        proyektor='{$_POST['proyektor']}',
        tgl_input='$tgl_input',
        jam_input='$jam_input',
        pdf='$pdf'
    ");  // Simpan nama file ke dalam database

    // Validasi simpan
    if ($simpan) {
        $tampil_pesan = mysqli_query($koneksi, "SELECT id_pesan FROM pesan WHERE pemesanan='{$_POST['id_user']}' ORDER BY id_pesan DESC");
        list($id_pesan) = mysqli_fetch_row($tampil_pesan);

        echo "<script>alert('Berhasil tambah pesanan');location.href='../home.php?q=lp';</script>";
    } else {
        echo "<script>alert('Gagal simpan');window.history.go(-1);</script>";
        exit();
    }
}
?>
