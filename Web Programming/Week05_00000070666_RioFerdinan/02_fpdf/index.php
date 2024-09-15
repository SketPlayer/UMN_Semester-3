<?php
require('fpdf184/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont(family:'Arial',style:'',size:12);
$width_cell=array(20,50,50,70);

$pdf->Cell(190,10,'Data Mahasiswa',1,1,'C');

$pdf->Cell($width_cell[0],10,'No.',1,0,'');
$pdf->Cell($width_cell[1],10,'NIM',1,0,'');
$pdf->Cell($width_cell[2],10,'Nama',1,0,'');
$pdf->Cell($width_cell[3],10,'Prodi',1,1,'');

$pdf->Cell($width_cell[0],10,'1',1,0,'');
$pdf->Cell($width_cell[1],10,'001',1,0,'');
$pdf->Cell($width_cell[2],10,'John Thor',1,0,'');
$pdf->Cell($width_cell[3],10,'Informatika',1,1,'');

$pdf->Cell($width_cell[0],10,'2',1,0,'');
$pdf->Cell($width_cell[1],10,'002',1,0,'');
$pdf->Cell($width_cell[2],10,'John Wick',1,0,'');
$pdf->Cell($width_cell[3],10,'Sistem Informasi',1,1,'');

$pdf->Cell($width_cell[0],10,'3',1,0,'');
$pdf->Cell($width_cell[1],10,'003',1,0,'');
$pdf->Cell($width_cell[2],10,'John Doe',1,0,'');
$pdf->Cell($width_cell[3],10,'Teknik Komputer',1,1,'');

$pdf->Output();