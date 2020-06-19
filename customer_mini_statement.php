<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mini Statement</title>
        
        <link rel="stylesheet" href="css/newcss.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}


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
<div class='content_customer_mini'>

           <?php include 'customer_navbar.php'?>
    <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
    
<?php    include 'conn/dbconn.php';
$sender_id=$_SESSION["login_id"];
$sql="SELECT * FROM passbook".$sender_id." LIMIT 10";
$result=  $conn->query($sql) or die(mysql_error()); ?>

    <br><br><br>
    <h3 style="text-align:center;color:#2E4372;"><u>Last 10 Transaction</u></h3>
    <table align="center">
                        
                        <th>Id</th>
                        <th>Transaction Date</th>
                        <th>Narration</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Balance Amount</th>
                        
                        <?php
                        while($rws=  mysqli_fetch_array($result)){
                            
                            echo "<tr>";
                            echo "<td>".$rws[0]."</td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "<td>".$rws[8]."</td>";
                            echo "<td>".$rws[5]."</td>";
                            echo "<td>".$rws[6]."</td>";
                            echo "<td>".$rws[7]."</td>";
                           
                            echo "</tr>";
                        } ?>
</table>
<div class="text-center" align= "center">
<button  class="button button2" onclick="window.open('pdf.php')">Export To PDF</button>

</div>
    </div>
    <div class="sticky-container">
<ul class="sticky">
<li>   <a  rel="_blank"  href="safeonlinebanking.php"target="_blank" >
    <img width="32" height="32" title="" alt="" src="images/share.png" />
<p>Imp link</p>
</a>
</li>
<li>  <a  href="add_beneficiary.php" >
    <img width="32" height="32" title="" alt="" src="images/beni.png" />
<p>Add Bene</p>
</a>
</li>
<li> <a  href="customer_transfer.php"> 
    <img width="32" height="32" title="" alt="" src="images/thumb.png" />
<p>Fund Trans</p>
</a>
</li>
</li>
</ul>


</div>

        <?php include 'footer.php'?>