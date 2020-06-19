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
    
    
    $sql="SELECT * FROM atm WHERE id='$id'";
    $result=  $conn->query($sql) or die(mysql_error());
    $rws=  mysqli_fetch_array($result);
    $num0 = (rand(10000000000000000,999999999));
    $start = strtotime("10 September 2020");
    $end = strtotime("22 July 2030");
    $timestamp = mt_rand($start, $end);
    $num1 = date("m-Y", $timestamp);
    $num2 = (rand(100,999));
    $num3 = (rand(100,999));
    $salt="@g26jQsG&nh*&#8v";
    $card_no = $num0 . $num2 . $num3 .$salt;
    $cvv= $num2 .$salt;
    $expiry= $num1 .$salt;
    if($rws[3]=="PENDING")
    $sql="UPDATE atm SET atm_status='ISSUED',card_no='$card_no',cvv='$cvv',expiry='$expiry' WHERE id='$id'";
    $conn->query($sql) or die(mysql_error());
   
  
   echo '<script>alert("ATM Card Issued");';
   echo 'window.location= "staff_atm_approve.php";</script>';
}