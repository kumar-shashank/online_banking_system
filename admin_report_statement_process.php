<?php 
session_start();
        
        
if(!isset($_SESSION['admin_login'])) 
    header('location:admin_homepage.php');  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Account Statement</title>
              
        <link rel="stylesheet" href="css/newcss.css">
       
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}
.button {
  background-color: white; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
    </head>
        <?php include 'header.php' ?>
<div class='content_customer_date'>

          
   <?php include 'admin_navbar.php'?>
    <div class="customer_top_nav" width=75%>
             <div class="text">Welcome Admin</div>
            </div>        
    <table align="center">
                        
                        <th>Id</th>
                        <th>Transaction Date</th>
                        <th>Narration</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Balance Amount</th>
                        
                        <?php 
                         $acc_no=$_REQUEST['account_no'];
                         include 'conn/dbconn.php';
                         
                        
                        if(isset($_REQUEST['summary_date'])) {
                         $date1=$_REQUEST['date1'];
                         $date2=$_REQUEST['date2'];
                         
                         include 'conn/dbconn.php';
                         $sender_id=$acc_no;
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
                        } ?>
</table>
<br><br><br>
<div class="text-center" align= "center">
<button  class="button button2" onclick="window.print()">Export To PDF</button>

</div>
    </div>
        <?php include 'footer.php'?>

        