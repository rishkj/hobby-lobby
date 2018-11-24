<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
<?php
    define('DB_NAME','info');
    define('DB_USER','root');
    define('DB_PASSWORD',"");
    define('DB_HOST','localhost');

/*
//create connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$sql = mysqli_query($connection,"SELECT * FROM details");
$result = mysql_query($sq1);
$row = mysql_fetch_array($result);
echo "Name :" . row['fullname'] . ;

*/
//showing property

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " .     mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



$userName = $_POST['fullname'];
$password =  $_POST['phoneno'];
$query = "SELECT * FROM `details` WHERE fullname = '$userName' and phoneno = '$password';";
$data = mysql_query ($query)or die(mysql_error());
$row = mysql_fetch_array($data);
echo "Name :" . $row['fullname'] . "<br>";
echo "Parents Name :" . $row['parname'] . "<br>";
echo "Email:" . $row['email'] . "<br>";
echo "Phone Number :" . $row['phoneno'] . "<br>";
echo "Address :" . $row['addres'] . "<br>";
echo "Age :" . $row['age'] . "<br>";
echo "Gender :" . $row['gender'] . "<br>";
echo "Hobbies :" . $row['hobbies'] . "<br>";


?>
 </p>
<br><br><br>
<a href="home.html"><button>Home</button></a>
<!-- <p style="color: white;font-family: Lato; font-size: 30px;"><?php
// if($sum==0)
// echo "Your cart is empty!"
?></p> -->
 



</body>
</html>
