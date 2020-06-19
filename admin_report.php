<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:admin_homepage.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Report</title>
        
        <link rel="stylesheet" href="css/newcss.css">
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
    </head>
        <?php include 'header.php' ?>
<div class='content_customer_mini'>

           <?php include 'admin_navbar.php'?>
    
    
<div class="customer_top_nav">
             <div class="text">Welcome Admin</div>
            </div>

    <br><br><br><br>
    <h3 style="text-align:center;color:#2E4372;"><u>Report</u></h3>
    

    <form action="admin_report_statement.php" action="pdf1.php" method="POST">
    <table align="center">

    <tr><td><span class="heading">Account No: </span></td><td><input type='text' name='account_no' required></td></tr>

    <table align="center"> <tr><td><input type='submit' name='submitBtn' value='Show Details' class="addstaff_button">
        </table>

        </form
    


        <h3 ><h3  style="text-align:center;color:#2E4372;"><u>Report by Date</u></h3>

    <form action="admin_report_statement_process.php" action="pdf1.php" method="POST">
    <table align="center">

    <tr><td><span class="heading">Account No: </span></td><td><input type='text' name='account_no' required></td></tr>
        <tr><td>Start Date [mm/dd/yyyy] </td><td>
        <input type="date" name="date1" required></td></tr>
        
        <tr><td>End Date [mm/dd/yyyy] </td><td>
        <input type="date" name="date2" required></td></tr>
     </table>
    
        <table align="center"><tr><td colspan="2" align='center' ><input type="submit" name="summary_date" value="Show Details" class="addstaff_button"/></td>
        </tr>
        </table>
          </form>  
    
    </div>
        <?php include 'footer.php'?>