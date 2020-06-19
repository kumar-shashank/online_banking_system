<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Beneficiary</title>
        
        <link rel="stylesheet" href="css/newcss.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}
.content_customer td{
    
    
}

        </style>
    </head>
        <?php include 'header.php' ?>
<div class='content_customer_mini'>
            
           <?php include 'customer_navbar.php'?>
    <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
    <br><br>
    <form action='add_beneficiary_process.php' method='post'>
        <br><br>
        <h3 style="text-align:center;color:#2E4372;"><u>Add Beneficiary</u></h3>
        <table align="center">
            
            <tr><td><span class="heading">Payee Name: </span></td><td><input type='text' name='name' required></td></tr>
            <tr><td><span class="heading">Account No: </span></td><td><input type='text' name='account_no' required></td></tr>
            <tr><td><span class="heading">Select Branch: </span></td><td><select name='branch_select' required>
                        
                        <option value='PUNE'>PUNE</option>
                        <option value='DELHI'>Delhi</option>
                        <option value='BANGALORE'>Bangalore</option>
                        </select></td></tr>
            <tr><td><span class="heading">Ifsc Code: </span></td><td><input type='text' name='ifsc_code' required></td></tr> </table>
           <table align="center"> <tr><td><input type='submit' name='submitBtn' value='Add Beneficiary' class="addstaff_button">
        </table>
        
        </form>
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
           