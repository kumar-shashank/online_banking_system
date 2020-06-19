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
</head>

    <body  onload="startTime()">
        <div class="wrapper">
            
        <div class="header">
            <img src="header.jpg" height="100%" width="100%"/>
            </div>
            <div class="navbar">
                
            <ul>
            <li><a href="index.php">Home</a></li>
            
			<li><a href="staff_login.php">Staff Login </a></li>
            <li><a href="adminlogin.php">Admin Login </a></li>
				<li id="last"><a href="loan.php">Loan</a></li>
            <li id="last"><a href="contact.php">Contact Us</a></li>
			<li id="last"><a href="about.php">About Us</a></li>
          
            <li id="txt"></li>
            </ul>
            </div>
            