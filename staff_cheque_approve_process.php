<?php 
session_start();
        
if(!isset($_SESSION['staff_login'])) 
    header('location:staff_login.php');   
?>
<?php
if(isset($_REQUEST['submit_id']))
{
    include 'conn/dbconn.php';
    $id=$_REQUEST['customer_id'];
    
    $sql="SELECT * FROM cheque_book WHERE id='$id'";
    $result=  $conn->query($sql) or die(mysql_error());
    $rws=  mysqli_fetch_array($result);
    $num2 = (rand(100,999));
    $num3 = (rand(100,999));
    $cheque_book_no = $num2 . $num3;
                
    if($rws[3]=="PENDING")
    $sql="UPDATE cheque_book SET cheque_book_status='ISSUED',cheque_book_no='$cheque_book_no' WHERE id='$id'";
    
    $conn->query($sql) or die(mysql_error());
    
    echo '<script>alert("Cheque Book Issued");';
    echo 'window.location= "staff_cheque_approve.php";</script>';
}