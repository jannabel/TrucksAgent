<?php
//Incluimos el fichero de conexion
require('../php/conexion.php');  
//Incluimos la libreria PDF
include_once('../vendor/setasign/fpdf/fpdf.php');

class PDF extends FPDF
{

// Funcion encargado de realizar el encabezado
function Header()
{
$this->SetFont('Arial','B',13);
$this->Cell(80);
$this->Cell(95,10,'Reporte de Camiones',1,0,'C');
$this->Ln(20);

}

function Footer()
{
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}


//error_reporting(0);
$id=$_GET["id"];
$gettruck = "SELECT * FROM $trucks Where IdCamion= $id";

if ($conexion->query($gettruck)) $row = mysqli_fetch_assoc($conexion->query($gettruck));
//else echo "ERROR " . $gettruck . "<br>" . $conexion->error;


$getwashing = "SELECT * FROM $washingmachine Where IdCamion= $id";

if ($conexion->query($getwashing)){
    $result = $conexion->query($getwashing);
    
    
    $rowmachine = array();
    $cont = 0;
    while ($getwashing = @mysqli_fetch_array($result)) {
       $rowmachine[$cont] = $getwashing;
       $cont++;
    }
}
//else echo "ERROR " . $getwashing . "<br>" . $conexion->error;
mysqli_close($conexion);



$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);

$w = array(15, 50, 20, 30,30);

$pdf->Cell(30,12,'Marca',1);
$pdf->Cell(30,12,'Modelo',1);
$pdf->Cell(20,12,'Color',1);
$pdf->Cell(30,12,'Comentario',1);
$pdf->Cell(15,12,'Cant.',1);
$pdf->Cell(30,12,'Valor Carga',1);
$pdf->Cell(30,12,'Peso Carga',1);
$pdf->Ln();
$pdf->SetFont('Arial','',12);


$pdf->Cell($w[3],6,$row['Marca'],1);
$pdf->Cell($w[3],6,$row['Modelo'],1);
$pdf->Cell($w[2],6,$row['Color'],1);
$pdf->Cell($w[3],6,$row['Comentario'],1);
$pdf->Cell($w[0],6,number_format($row['CantLavadoras']),1);
$pdf->Cell($w[3],6,number_format($row['ValorCarga']),1);
$pdf->Cell($w[3],6,number_format($row['PesoCarga']),1);
$pdf->Ln();
$pdf->AddPage();

$pdf->Cell(30,12,'Codigo',1);
$pdf->Cell(50,12,'Marca',1);
$pdf->Cell(50,12,'Modelo',1);
$pdf->Cell(30,12,'Valor',1);
$pdf->Cell(30,12,'Peso',1);
$pdf->Ln();
$pdf->SetFont('Arial','',12);

foreach($rowmachine as $rowm)
{
$pdf->Cell($w[3],6,$rowm['Codigo'],1);
$pdf->Cell($w[1],6,$rowm['Marca'],1);
$pdf->Cell($w[1],6,$rowm['Modelo'],1);
$pdf->Cell($w[3],6,number_format($rowm['Valor']),1);
$pdf->Cell($w[3],6,$rowm['Peso'],1);
$pdf->Ln();
}


$pdf->Output();
?>