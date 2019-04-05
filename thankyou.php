<html>
	<head>
		<title>Thank you</title>
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
.outputbox
{  
border: solid 10px orange;
border-radius: 10px;
margin-left:auto;
margin-right: auto;
margin-top: 200px;
padding: 20px 50px;
width: 500px;
height: auto;
background-color:black;
box-shadow: 1px 1px 1px 1px orange;
color: darkorange;
}
 
</style>
	</head>
	<body>
        
        <div class="outputbox">
		<?php
		$mysqli_db = new mysqli('localhost', 'root', '', 'shushi_sachihiro');

		$query = 'SELECT * FROM feedback WHERE id=' . $_GET['id'];
		$myquery = $mysqli_db->query($query);

		$rows = $myquery->fetch_assoc();
		echo '<p align=center>Thank you for your feedback!<br><br>'. $rows['name'];
		echo '<p align=center><br>Your email is ' . $rows['email'];
           

		$mysqli_db->close();
		?>	
            <h2 align=center><br>Return to My Home Page</h2>
            <div style="text-align:center"><input type="button" id="button1" value="Click Here"  onclick="window.open('index.html')"></div>
            
        </div>
	</body>
</html>