<?php

include('claseReporte.php');
require('../database.php');


    $gsent = $conn->prepare('SELECT nombre, dato, fecha, hora from sensor_datos d, sensores s where id_sensor = s.id');

    $gsent->execute();

    $res = $gsent->fetchAll();
    $longitud=count($res);

if ($longitud>0) {

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell(30);
    $pdf->Cell(120,10, 'REPORTE DE DATOS DE LOS SENSORES', 0,0,'C');

    $pdf->Ln(20);

	$pdf->SetFillColor(225,225,225);
	$pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(50,15, 'SENSOR', 1,0,'C',1);
    $pdf->Cell(45,15, 'ESTADO', 1,0,'C',1);
    $pdf->Cell(45,15, 'FECHA', 1,0,'C',1);
	$pdf->Cell(45,15, 'HORA', 1,1,'C',1);

	$pdf->SetFont('Arial', '', 10);

	for ($i=0; $i <$longitud; $i++) {

        $pdf->Cell(50,15, $res[$i]['nombre'], 1,0,'C');
        $pdf->Cell(45,15, $res[$i]['dato'], 1,0,'C');
        $pdf->Cell(45,15, $res[$i]['fecha'], 1,0,'C');
        $pdf->Cell(45,15, $res[$i]['hora'] , 1,1,'C');
    }

	$pdf->Output();
}
