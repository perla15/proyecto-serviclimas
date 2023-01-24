<?php

require "../sql/conexion.php";
require "../pdf/fpdf.php";

$pdf =new FPDF("P","mm","Letter");
$pdf->AddPage();
$pdf->SentFont("Arial","B",12);
$pdf->Cell(10,10,"");
$pdf->Output;