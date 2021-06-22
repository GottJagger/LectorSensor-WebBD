<?php

require('FPDF/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0,10, 'Pagina ', $this->PageNo().'/{nb}', 0, 0,'C');
    }
}
?>