<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
 


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <script src="main.js"></script>
</head>
    <style>
    .output{  
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
}
    </style>
<body style="background-image: url('images/reslogin_2.jpg');background-size:cover;
             background-repeat:no-repeat;background-attachment:fixed;background-position:center;text-align: center;">
   <label class="res-banner2"> <div class="output"> <h1>Reserved successful</h1>

    
    
    <!--body php start-->
   <?php

function Conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shushi_sachihiro";
    $conn = new mysqli($servername, $username, $password, $dbname);
    return $conn;
}
function MyCommandInsertId($sql)
{
    $conn = Conn();
    if(mysqli_query($conn,$sql))
    {
        $lastid = mysqli_insert_id($conn);
        return $lastid;
    }else{
        $err = mysqli_error($conn);
        return $err;
    }

}
function Insert()
{       $name = $_POST['Name']; // 'John';
        $phone = $_POST['PhoneNumber'];
        $date = $_POST['Date'];
        $number = $_POST['size'];
        $sql = "INSERT INTO ordering_table (Name,PhoneNumber,Date,NoOfPeople) VALUES ('" . $name . "','" . $phone . "','" . $date . "'," . $number . ")";
        $st_insert_id = MyCommandInsertId($sql);

        echo "<strong> Reservation No. "  . $st_insert_id . "<br> Phone Number: " . $phone . "<br> Date: " . $date . "<br> Number Of People: " . $number . " <br></strong>";
}
Insert();




    

$conn->close();
?>
    
    
   </div> </label>
    
    
    
</body>
</html>

