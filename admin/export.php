<?php
error_reporting(E_ALL);
require_once '../config/koneksi.php';
require_once '../phpexcel/Classes/PHPExcel.php';

// Buat object PHPExcel
$objPHPExcel = new PHPExcel();
$sheet = $objPHPExcel->getActiveSheet();
$sheet->getStyle('E1')->getAlignment()->applyFromArray(
    array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,)
);
$sheet->getStyle('I1')->getAlignment()->applyFromArray(
    array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,)
);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(7);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(12);


//query mysql, ganti baris ini sesuai dengan query kamu 
			$panggil = mysqli_query($koneksi,"SELECT a.id_pesan,d.username,a.tgl_pesan,a.jumlah_peserta,b.nama_ruangan
													FROM pesan a,ruangan b,jadwal c,user d
													WHERE a.id_ruangan=b.id_ruangan
														  and a.id_jadwal=c.id_jadwal
														  and a.pemesanan=d.id_user
														  ");
														  
// Set properties, isi teks ini bisa anda lihat
//di file excel yang dihasilkan, klik kanan file tersebut
//dan pilih properties. 
$objPHPExcel->getProperties()->setCreator("Andio Ghazali")
      ->setLastModifiedBy("Andio Ghazali")
      ->setTitle("Office 2007 XLSX Test Document")
      ->setSubject("Office 2007 XLSX Test Document")
       ->setDescription("Laporan Rekap .")
       ->setKeywords("office 2007 openxml php");
	   
// Header dari tabel , data akan di simpan di kolom A, B dan C
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('E1:H1');
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('I1:K1')

       ->setCellValue('A1', 'No')
       ->setCellValue('B1', 'Peminta')
       ->setCellValue('C1', 'Tgl Acara')
       ->setCellValue('D1', 'Jumlah Peserta')	   
      ->setCellValue('E1', 'Konsumsi')
      ->setCellValue('E2', 'Snack Pagi')
      ->setCellValue('F2', 'Makan Siang')
      ->setCellValue('G2', 'Snack Sore')
      ->setCellValue('H2', 'Makan Malam')	  
       ->setCellValue('I1', 'Tamu')
      ->setCellValue('I2', 'Hotel')
      ->setCellValue('J2', 'Tgl Datang')
      ->setCellValue('K2', 'Tgl Pulang')
       ->setCellValue('L1', 'Ruang Acara')
       ->setCellValue('M1', 'Keterangan');
	$baris = 3;
	$no = 0;   
	while($row=mysqli_fetch_array($panggil)){
	$no = $no +1;
	$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris",$row['id_pesan'])
     ->setCellValue("B$baris",$row['username'])
     ->setCellValue("C$baris",$row['tgl_pesan'])
     ->setCellValue("D$baris",$row['jumlah_peserta'])
     ->setCellValue("E$baris") 
     ->setCellValue("F$baris")
     ->setCellValue("L$baris",$row['nama_ruangan'])
     ->setCellValue("M$baris");
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
