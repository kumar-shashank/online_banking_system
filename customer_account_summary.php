<?php 
session_start();
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<?php
                $cust_id=$_SESSION['cust_id'];
                include 'conn/dbconn.php';
                $sql="SELECT * FROM customer WHERE email='$cust_id'";
                $result=  $conn->query($sql) or die(mysql_error());
                $rws=  mysqli_fetch_array($result);
                
                
                $name= $rws[1];
                $account_no= $rws[0];
                $branch=$rws[10];
                $branch_code= $rws[11];
                $last_login= $rws[12];
                $acc_status=$rws[13];
                $address=$rws[6];
                $acc_type=$rws[5];
                
                $gender=$rws[2];
                $mobile=$rws[7];
                $email=$rws[8];
                
                $_SESSION['login_id']=$account_no;
                $_SESSION['name']=$name;
                ?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Home - Online Banking</title>
        
        <link rel="stylesheet" href="css/newcss.css">
        <link rel="stylesheet" href="css/sidebar.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content_customer_home'>
            
           <?php include 'customer_navbar.php'?>
            <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
            
            
            <?php
                
                $sql="SELECT * FROM passbook".$_SESSION['login_id'] ;
                $result=  $conn->query($sql) or die(mysql_error());
                while($rws=  mysqli_fetch_array($result))
                {
                $balance=$rws[7];
                }            
?>
            <div class="customer_body">
                <div class="content1">
            <p><span class="heading">Account No: </span><?php echo $account_no;?></p>
            <p><span class="heading">Branch: </span><?php echo $branch;?></p>
            <p><span class="heading">Branch Code: </span><?php echo $branch_code;?></p>
            </div>
            
            <div class="content2">
            <p><span class="heading">Balance: INR </span><?php echo $balance;?></p>
            <p><span class="heading">Account status: </span><?php echo $acc_status;?></p>
            <p><span class="heading">Last Login: </span><?php echo $last_login;?></p>
           </div>
            
            
        </div>
        <div class="sticky-container">
<ul class="sticky">
<li>   <a   rel="_blank"  href="safeonlinebanking.php" target="_blank" >
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
    
               <?php include 'footer.php';?>
            
    </body>
</html>