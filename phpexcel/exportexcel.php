<?php
error_reporting(E_ALL);
require_once '../config/koneksi.php';
require_once 'Classes/PHPExcel.php';

// Buat object PHPExcel
$objPHPExcel = new PHPExcel();

//Atur Lebar Width Kolom
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(7);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(16);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(14);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(16);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(12);
//Mengatur Kolom Ke Tengah
$objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	
//query mysql, ganti baris ini sesuai dengan query kamu 
$panggil = mysqli_query($koneksi,"SELECT d.username,a.waktu,a.waktu_selesai,a.tgl_pesan,a.tgl_selesai,a.nama_acara,a.jumlah_peserta,b.nama_ruangan,a.id_pesan,a.snack_pagi,a.makan_siang,a.snack_siang,a.makan_malam,a.pointer,a.proyektor
													FROM pesan a,ruangan b,jadwal c,user d
													WHERE a.id_ruangan=b.id_ruangan
														  and c.pukul_jadwal=a.waktu
														  and a.pemesanan=d.id_user
														  order by a.tgl_pesan ");
														  


					

														  
// Set properties, isi teks ini bisa anda lihat
//di file excel yang dihasilkan, klik kanan file tersebut
//dan pilih properties. 
$objPHPExcel->getProperties()->setCreator("PLN KITSBS")
      ->setLastModifiedBy("PLN KITSBS")
      ->setTitle("Office 2007 XLSX Test Document")
      ->setSubject("Office 2007 XLSX Test Document")
       ->setDescription("Laporan Rekap .")
       ->setKeywords("office 2007 openxml php");
	   
//Merge Cell (menggabungkan kolom)
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C1:F1');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('I1:L1');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('M1:O1')
// Header dari tabel , data akan di simpan di kolom
       ->setCellValue('A1', 'No')
       ->setCellValue('B1', 'Peminta')
       ->setCellValue('C1', 'Tgl Acara')
	   ->setCellValue('C2', 'Tgl Mulai')
   	   ->setCellValue('D2', 'Tgl Selesai')
	   ->setCellValue('E2', 'Waktu Mulai')
	   ->setCellValue('F2', 'Waktu Selesai')
 	   ->setCellValue('G1', 'Nama Acara')
       ->setCellValue('H1', 'Jumlah Peserta')	   
	   ->setCellValue('I1', 'Konsumsi')
      ->setCellValue('I2', 'Snack Pagi')
      ->setCellValue('J2', 'Makan Siang')
      ->setCellValue('K2', 'Snack Sore')
      ->setCellValue('L2', 'Makan Malam')	  
       ->setCellValue('M1', 'Tamu')
      ->setCellValue('M2', 'Hotel')
      ->setCellValue('N2', 'Tgl Datang')
      ->setCellValue('O2', 'Tgl Pulang')
       ->setCellValue('P1', 'Ruang Acara')
       ->setCellValue('Q1', 'Keterangan')
       ->setCellValue('R1', 'Pointer')
       ->setCellValue('S1', 'Proyektor');	   
	   
	$baris = 3;
	$no = 0;   
	while($row=mysqli_fetch_array($panggil)){
	$no = $no +1;
	$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris",$no)
     ->setCellValue("B$baris",$row['username'])
     ->setCellValue("C$baris",$row['tgl_pesan'])
	 ->setCellValue("D$baris",$row['tgl_selesai'])
	 ->setCellValue("E$baris",$row['waktu'])
	 ->setCellValue("F$baris",$row['waktu_selesai'])
	 ->setCellValue("G$baris",$row['nama_acara'])
     ->setCellValue("H$baris",$row['jumlah_peserta'])
     ->setCellValue("I$baris",$row['snack_pagi'])
	 ->setCellValue("J$baris",$row['makan_siang'])
	 ->setCellValue("K$baris",$row['snack_siang'])
	 ->setCellValue("L$baris",$row['makan_malam'])
     ->setCellValue("M$baris")
     ->setCellValue("P$baris",$row['nama_ruangan'])
     ->setCellValue("Q$baris")
	 ->setCellValue("R$baris",$row['pointer'])
	 ->setCellValue("S$baris",$row['proyektor']);
	 $baris = $baris + 1;
}
// output file dengan nama file 'contoh.xls'
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="RekapData.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>