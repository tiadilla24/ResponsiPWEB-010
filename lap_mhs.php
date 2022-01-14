<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(250,7,'BIMBINGAN BELAJAR KALKULUS',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(250,7,'DAFTAR MAHASISWA',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(50,6,'NAMA SISWA',1,0);
$pdf->Cell(25,6,'J KEL',1,0);
$pdf->Cell(50,6,'ALAMAT',1,0);
$pdf->Cell(30,6,'TANGGAL LHR',1,0);
$pdf->Cell(60,6,'ASAL SEKOLAH',1,1);
$pdf->SetFont('Arial','',10);
include 'koneksi.php';
$mahasiswa = mysqli_query($con, "select * from mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)){
 $pdf->Cell(20,6,$row['nim'],1,0);
 $pdf->Cell(50,6,$row['nama'],1,0);
 $pdf->Cell(25,6,$row['jkel'],1,0);
 $pdf->Cell(50,6,$row['alamat'],1,0);
 $pdf->Cell(30,6,$row['tgllhr'],1,0);
 $pdf->Cell(60,6,$row['asal_sekolah'],1,1);
}
$pdf->Output();
?>