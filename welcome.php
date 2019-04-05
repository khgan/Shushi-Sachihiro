<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shushi Sachihiro</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/slider.css" />
<style type="text/css">
    body{
    background-image:  url("images/background.jpg");
    background-color:black;  
    background-size:cover;                      
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-position:center;
    
}
</style>
</head>

<body>

<div class="trademark">
    <a href="index.html"><img src="images/logo.png"></a>
    <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
        <button type="submit" value="submit"><i>Go</i></button>
    </form>
  </div>
    
    </div>

<nav class="navigation-bar">
  <li><a href="index.html">Home</a></li>
  <li><a href="reservation.html">Reservation</a></li>
  <li><a href="catering.html">Catering</a></li>
  <li><a href="promotion.html">Promotion</a></li>
  <li><a href="about.html">About Us</a></li>
  <li><a href="contact.html">Contact Us</a></li>
</nav>    

   
    <ul id=welcome>
    
        <div class="loginbanner">
            <li class="loginbox"><?php echo "Welcome"."<br>"?>
            <input type="button" id="logintab" value="Sign Out"
	     onclick="window.location.href='login.php'">
            </li>
            <div class="welcometext"><marquee><h1>Welcome to Shushi Sachihiro</h1></marquee></div>
        </div>
   
    </ul>
    

    <ul class="menubox">
        <li class="menu01"><h2>SUSHI MENU</h2><input type="button" id="button1" value="Click Here" onclick="window.open('sushi_menu.html')"></li>
        <li class="menu02"><h2>LUNCH MENU</h2><input type="button" id="button2" value="Click Here" onclick="window.open('lunch_menu.html')"></li>
        <li class="menu03"><h2>DINNER MENU</h2><input type="button" id="button3" value="Click Here" onclick="window.open('dinner_menu.html')"></li> 
    </ul>
    
    <ul class="menubox">
        <li class="caption1"><h2>PROMOTION</h2><input type="button" id="button1" value="Click Here" onclick="location.href='promotion.html'";></li>
        <li class="caption2"><h2>RESERVATION</h2><input type="button" id="button2" value="Click Here" onclick="location.href='reservation.html'";></li>
        <li class="caption3"><h2>CATERING</h2><input type="button" id="button3" value="Click Here" onclick="location.href='catering.html'";></li> 
    </ul>
    
    
    <ul class="info-banner"><h1>OUR OUTLET</h1>
        <div class="wrapperbanner">
        <div class="allboxes">
            <div class="box-1"><br><h2>Kuala Lumpur</h2><br><p>B2-2-5, Solaris Dutamas<br> No.1 Jalan Dutamas <br> 150480 Kuala Lumpur, Malaysia <br><br>Tel: +603-6205-5530/31 <br><br>Fax: +603-6205-5532 <br><br>contactus@res.com.my</p></div>    
            <div class="box-2"><br><h2>Singapore</h2><br><p>32 Tai Seng Street <br>#07-01 RE&S Building <br>Singapore 533972 <br><br>Tel: +65-6252-0810 <br><br>Fax: +65-6253-4202 <br><br> contactus@res.com.sg</p></div>
            <div class="box-3"><br><h2>Osaka</h2><br><p>#203 2-6-21 Minamisenba,<br> Chuo-ku Osaka <br>542-0081 Japan<br><br> Tel: +81-66-263-0689<br><br> Fax: +81-66-260-0188 <br><br>contactus@resj.jp</p></div>
        </div>
        </div>
    </ul>
    
    
    <div id="footer">
        <div><h1>Stay Connected</h1><br></div>
        <div><a href="https://business.facebook.com/Shushi-Sachihiro-Restaurant-235493976855472/?business_id=1324491024294511" target="_blank"><img class="fb" src="images/fb.png"></a>
             <a href="https://www.instagram.com/Shushi_Sachihiro/?hl=en" target="_blank"><img class="insta" src="images/insta.png"></a>
        </div>
        <div><img class="qrcode" src="images/qrcode.png">
        </div>
        <div><p style="padding-top: 15px">Let your friend scan this QR Code to load this mobile web on his/her mobile device.</p></div>
        <div><p style="padding-top: 15px">SHUSHI SACHIHIRO JAPANESE RESTAURANT  ©  All Rights Reserved.</p></div>
    
    
    </div>
    </body>
</html> 


    