<?php
require('fpdf/fpdf.php');
require 'functions.php';

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(190, 10, 'Daftar Transaksi', 0, 1, 'C');
        $this->Ln(5);

        $this->SetFont('Arial', 'B', 12);
        $this->Cell(10, 10, 'ID', 1, 0, 'C');
        $this->Cell(40, 10, 'Nominal', 1, 0, 'C');
        $this->Cell(40, 10, 'Jenis', 1, 0, 'C');
        $this->Cell(60, 10, 'Tanggal', 1, 0, 'C');
        $this->Ln();
    }

    function Content()
    {
        global $conn;

        $sql = "SELECT * FROM Transaksi";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $this->SetFont('Arial', '', 12);
                $this->Cell(10, 10, $row['ID'], 1, 0, 'C');
                $this->Cell(40, 10, $row['Nominal'], 1, 0, 'C');
                $this->Cell(40, 10, $row['Jenis'], 1, 0, 'C');
                $this->Cell(60, 10, $row['Tanggal'], 1, 0, 'C');
                $this->Ln();
            }
        } else {
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(190, 10, 'Tidak ada data transaksi.', 1, 0, 'C');
            $this->Ln();
        }
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->Content();
$pdf->Output('transaksi.pdf', 'D');
?>
