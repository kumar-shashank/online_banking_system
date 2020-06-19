
<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');
    ?>
    <?php

    if(isset($_REQUEST['summary_date'])) {
      $date1=$_REQUEST['date1'];
      $date2=$_REQUEST['date2'];   
include_once("conn/dbconn.php");
$sender_id=$_SESSION["login_id"];
$sql="SELECT * FROM passbook".$sender_id." WHERE transactiondate BETWEEN '$date1' AND '$date2'";
                         $result=  $conn->query($sql) or die(mysql_error());
                        while($rws=  mysqli_fetch_array($result)){
                            
                            echo "<tr>";
                            echo "<td>".$rws[0]."</td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "<td>".$rws[8]."</td>";
                            echo "<td>".$rws[5]."</td>";
                            echo "<td>".$rws[6]."</td>";
                            echo "<td>".$rws[7]."</td>";
                           
                            echo "</tr>";
                        }
                      }
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
while($rws=  mysqli_fetch_array($result)) {
$pdf->Cell(47,12,$field_info->name,1);
}
while($rws=  mysqli_fetch_array($result)) {
$pdf->SetFont('Arial','',12);
$pdf->Ln();
foreach($rows as $column) {
$pdf->Cell(47,12,$column,1);
}
}
$pdf->Output();
?>