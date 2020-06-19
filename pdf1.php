<?php
require('fpdf/fpdf.php');
require('conn/dbconn.php');

session_start();
  

class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',20);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		// $this->Image('logo-small.png',10,10,10);
		
		$this->Cell(100,10,'Account Statement',0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',11);
		
		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(20,5,'Id',1,0,'',true);
		$this->Cell(50,5,'Transaction Date',1,0,'',true);
		$this->Cell(50,5,'Narration',1,0,'',true);
		$this->Cell(20,5,'Credit',1,0,'',true);
		$this->Cell(20,5,'Debit',1,0,'',true);
		$this->Cell(39,5,'Balance',1,1,'',true);
		
	}
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
		
		
	}
}


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);


$sender_id=$_SESSION["login_id"];
$query=$conn->query( "SELECT transactionid,transactiondate,narration,credit,debit,amount FROM passbook".$sender_id."",$conn);
while($data=mysqli_fetch_array($query)){
	$pdf->Cell(20,5,$data[0],1,0);
	$pdf->Cell(50,5,$data[1],1,0);
	$pdf->Cell(50,5,$data[2],1,0);
	$pdf->Cell(20,5,$data[3],1,0);
	$pdf->Cell(20,5,$data[4],1,0);
	$pdf->Cell(39,5,$data[5],1,0);
	
	if($pdf->GetStringWidth($data[2]) > 65){
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(65,5,$data[2],'LR',0);
		$pdf->SetFont('Arial','',9);
	}else{
		$pdf->Cell(65,5,$data[2],'LR',0);
	}
	$pdf->Cell(60,5,$data[5],'LR',1);
}
$pdf->Output();
?>
