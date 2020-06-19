

<?php 
if(isset($_REQUEST['submitBtn'])){
    include 'conn/dbconn.php';
    $username=$_REQUEST['uname'];
    $salt="@g26jQsG&nh*&#8v";
    $password=  sha1($_REQUEST['pwd'].$salt);
    
  
    $sql="SELECT email,password FROM customer WHERE email='$username' AND password='$password'";
    $result=$conn->query($sql) or die(mysql_error());
    $rws=  mysqli_fetch_array($result);
    
    $user=$rws[0];
    $pwd=$rws[1];    
    
    if($user==$username && $pwd==$password){
        session_start();
        $_SESSION['customer_login']=1;
        $_SESSION['cust_id']=$username;
    header('location:customer_account_summary.php'); 
	
    }
   
else{
    echo '<script>alert("Login Failed! Contact Admin!!! ");';
    echo 'window.location= "index.php";</script>';
    //header('location:index.php'); 
// echo "<div style = 'position : absolute ; top : 365px ; left : 144px'>Login Failed</div>"	;
}}
?>
<?php 
session_start();

if(isset($_SESSION['customer_login'])) 
    header('location:customer_account_summary.php');         
?>

<!DOCTYPE html>

<html>
    <head>
    <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
        
        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>    
        
        
        <meta charset="UTF-8">
        <title>Online Banking System</title>
        <link rel="stylesheet" href="css/newcss.css">
        <link rel="stylesheet" href="css/time.css">
        <link rel="stylesheet" href="css/sidebar.css">
    </head>
    <body onload="startTime()">
        <div class="wrapper">
            
        <div class="header">
            <img src="header.jpg" height="100%" width="100%"/>
            </div>
            <div class="navbar">
                
            <ul>
            <li><a href="index.php">Home </a></li>
			<li><a href="staff_login.php">Staff Login </a></li>
            <li><a href="adminlogin.php">Admin Login </a></li>
			<li id="last"><a href="loan.php">Loan</a></li>
            <li id="last"><a href="contact.php">Contact Us</a></li>
			
            <li id="last"><a href="about.php">About Us</a></li>
            <li id="txt"></li>
            </ul>
            
            </div>
            
        <div class="user_login">
            <form action='' method='POST'>
        <table align="left">
            <tr><td><span class="caption">Customer Login</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Username*:</td></tr>
            <tr><td><input type="text" name="uname" required></td> </tr>
            <tr><td>Password*:</td></tr>
            <tr><td><input type="password" name="pwd" required></td></tr>
            
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
           
        </table>
                </form>
            </div>
        
        <div class="image">
            <img src="images/img12.jpg" height="100%" width="100%"/>
            <div class="text">
                
                <a href="safeonlinebanking.php"><h3>Click to read safe online banking tips</h3></a>
    <a href="t&c.php"><h3>Terms and conditions</h3></a>
    <a href="phishing.php"><h3>About Phishing</h3></a>
    <a href="faq.php"><h3>FAQ'S</h3></a>

    
    
  </div>
            </div>
            <div class="sticky-container">
<ul class="sticky">
<li>   <a rel="_blank" href="https://www.facebook.com/" target="_blank">
    <img width="32" height="32" title="" alt="" src="images/fb2.png" />
<p>Facebook</p>
</a>
</li>
<li>  <a rel="_blank" href="https://twitter.com/" target="_blank">
    <img width="32" height="32" title="" alt="" src="images/tw1.png" />
<p>Twitter</p>
</a>
</li>
<li> <a rel="_blank" href="https://in.pinterest.com/" target="_blank"> 
    <img width="32" height="32" title="" alt="" src="images/pin1.png" />
<p>Pinterest</p>
</a>
</li>
<li> <a rel="_blank" href="https://in.linkedin.com/" target="_blank"> 
    <img width="32" height="32" title="" alt="" src="images/li1.png" />
<p>Linkedin</p>
</a>
</li>
</li>
</ul>
</div>
            <div class="left_panel">
                <p>Our internet banking portal provides personal banking services that gives you complete control over all your banking demands online.</p>
                <h3>Features</h3>
                <ul>
                    <li>Registration for online banking</li>
                    <li>Adding Beneficiary account</li>
                    <li>Funds Transfer</li>
                    <li>Last Login record</li>
                    <li>Mini Statement</li>
                    <li>ATM and Cheque Book</li>
                    <li>Staff approval Feature</li>
                    <li>Account Statement by date</li>
                    
                    
                </ul>
                </div>
            
            <div class="right_panel">
                
                    <h3>PERSONAL BANKING</h3>
                    <ul>
                        <li>Personal Banking application provides features to administer and manage non personal accounts online.</li>
                        <li>NEVER respond to any popup,email, SMS or phone call, no matter how appealing or official looking, seeking your personal information such as username, password(s), mobile number, ATM Card details, etc. Such communications are sent or created by fraudsters to trick you into parting with your credentials.</li>
                         <li>Mandatory fields are marked with an asterisk (*)</li>
                         <li>Do not provide your username and password anywhere other than in this page</li>
                         <li>Your username and password are highly confidential.Never part with them.Bank will never ask for this information.</li>
                    </ul>
                </div>
                <div class="header1">
           
            <a rel="_blank" href="https://www.onlinesbi.com/sbicollect/" target="_blank">
            <img src="header1.jpg" height="100%" width="100%"/>
</a>
                </div>
                    <?php include 'footer.php' ?>
