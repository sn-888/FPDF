<?php
unlink('./white_paper.pdf');
require_once '../fpdf.php';

$pdf = new FPDF();

$pdf->AddPage();
$pdf->Image('a.jpg',null,null,185);
$pdf->Image('b.jpg',null,null,185);

for ($i=1;$i<=18;$i++) {
    $pdf->Image($i.'.jpg',null,null,185);
}

$pdf->Output('F', 'white_paper.pdf', true);