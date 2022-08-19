<?php
include_once("db.php");
require_once '../config/config.php';
include_once INC_PHP_DIR.'obtenerRutaRelativa.php';
require_once INC_PHP_DIR.'Dashboard.class.php';

require FPDF_DIR . "fpdf.php";


class PDF extends FPDF
{
// Funcion encargado de realizar el encabezado
function Header()
{
// Logo
$this->Image('../app/assets/img/logo.png',10,-1,30);
$this->SetFont('Arial','B',13);
// Move to the right
$this->Cell(80);
// Title
$this->Cell(95,10,'Polimedic Reportes',1,0,'C');
// Line break
$this->Ln(20);
}
// Funcion pie de pagina
function Footer()
{
// Position at 1.5 cm from bottom
$this->SetY(-15);
// Arial italic 8
$this->SetFont('Arial','I',8);
// Page number
$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$db = new dbConexion();
$connString = $db->getConexion();
$display_heading = array('id'=>'ID', 'fullname'=> 'Nombre Completo', 'identification_number'=> 'Número de Documento', 'user'=> 'Usuario','gender'=> 'Genero', 'email'=> 'Email', 'birthdate'=> 'F. Nacimiento', 'role_id'=> 'Rol');

$result = mysqli_query($connString, "SELECT u.id, u.identification_type, u.identification_number, u.creation_date, u.fullname, u.user, u.gender, u.birthdate, u.email, u.role_id, r.name FROM user u inner join role r on u.role_id = r.id WHERE u.id = 5") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM user");




$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
// Declaramos el ancho de las columnas
$w = array(10, 60, 50, 30,30,40,25,35,20,70);
//Declaramos el encabezado de la tabla
$pdf->Cell(10,12,'ID',1);
$pdf->Cell(60,12,'NOMBRE',1);
$pdf->Cell(50,12,'TIPO DOC',1);
$pdf->Cell(30,12,'NUM DOC',1);
$pdf->Cell(30,12,'CREACION',1);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
//Mostramos el contenido de la tabla
foreach($result as $row)
{
$pdf->Cell($w[0],6,$row['id'],1);
$pdf->Cell($w[1],6,$row['fullname'],1);
$pdf->Cell($w[2],6,$row['identification_type'],1);
$pdf->Cell($w[3],6,$row['identification_number'],1);
$pdf->Cell($w[3],6,$row['creation_date'],1);
$pdf->Ln();
}
$pdf->Ln();

$pdf->SetFont('Arial','B',12);

$pdf->Cell(25,12,'USUARIO',1);
$pdf->Cell(25,12,'GENERO',1);
$pdf->Cell(35,12,'F. NACIMIENTO',1);
$pdf->Cell(65,12,'EMAIL',1);
$pdf->Cell(30,12,'ROLE',1);
$pdf->Ln();
$pdf->SetFont('Arial','',12);
//Mostramos el contenido de la tabla
foreach($result as $row)
{
$pdf->Cell($w[6],6,$row['user'],1);
$pdf->Cell($w[6],6,$row['gender'],1);
$pdf->Cell($w[7],6,$row['birthdate'],1);
$pdf->Cell(65,6,$row['email'],1);
$pdf->Cell(30,6,$row['role_id'],1);
$pdf->Ln();
}





$pdf->Output();

?>