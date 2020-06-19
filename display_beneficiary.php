<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Display Beneficiary</title>
        
        <link rel="stylesheet" href="css/newcss.css">
        <style>
            .content_customer_display table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}
        </style>
        </head>
        <?php include 'header.php' ?>
<div class='content_customer_display'>
            
           <?php include 'customer_navbar.php'?>
    <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
    
            <?php
include 'conn/dbconn.php';
$sender_id=$_SESSION["login_id"];
$sql="SELECT * FROM beneficiary1 WHERE sender_id='$sender_id'";
$result=  $conn->query($sql) or die(mysql_error());
?>
     <br><br><br>
        <h3 style="text-align:center;color:#2E4372;"><u>Added Beneficiary</u></h3>
    <form action="delete_beneficiary.php">
<table align="center">
                        
                        <th>Id</th>
                        <th>Name</th>
                        <th>Beneficiary Account No</th>
                        <th>status</th>
                        
                        <?php
                        while($rws=  mysqli_fetch_array($result)){
                            
                            echo "<tr><td><input type='radio' name='customer_id' value=".$rws[0];
                            echo ' checked';
                            echo " /></td>";
                            echo "<td>".$rws[4]."</td>";
                            echo "<td>".$rws[3]."</td>";
                            echo "<td>".$rws[5]."</td>";
                           
                            echo "</tr>";
                        } ?>
</table>
    <table align="center"><tr><td><input type="submit" name="submit_id" value="DELETE BENEFICIARY" class='addstaff_button'/></td></tr></table>
    </form>
</div>
        <?php include 'footer.php'?>