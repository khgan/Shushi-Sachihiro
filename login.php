<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Shushi Sachihiro Login Page</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />

<style>

.auto-style1 {
font-family: "Century Gothic";
font-size: xx-large;
font-weight: bold;
color: orangered;
margin-top: 35px;
margin-bottom: 40px;
}
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
    
}
input[type=text], input[type=password]{
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}

}
</style>
</head>
<body style="background-image: url('images/reslogin_2.jpg');background-size:cover;
             background-repeat:no-repeat;background-attachment:fixed;background-position:center;text-align: center;">
<img src="images/logo.png" class="user" style="width:600px;" >

<h1 class="auto-style1" = align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input id="button1" type="submit"  name="submit">						
</form>

 <!-- Error Message -->
<span style="color:darkorange;"><?php echo $error; ?></span>	

	</body>
</html>
