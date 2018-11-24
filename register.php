<?php
	
		define('DB_NAME','info');
		define('DB_USER','root');
		define('DB_PASSWORD',"");
		define('DB_HOST','localhost');
/*
		$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
		if(!$db){
	die('Could not connect: '.mysql_error());
}
		$db_selected = mysqli_select_db($db,DB_NAME);

		if(!$db_selected){
	die('Cannot use: '.DB_NAME. ': '.mysqli_error($db));
}


		$name=$_POST['fullname'];
		$par_name=$_POST['parname'];
		$email=$_POST['email'];
		$phone=$_POST['phoneno'];
		$address=$_POST['address'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$hobbyarr=implode(' , ',$_POST['hobby']);

		$query="INSERT INTO `details`(fullname,parname,email,phoneno,addres,age,gender,hobbies) VALUES ('$name','$par_name','$email','$phone','$address','$age','$gender','$hobbyarr')";
		if(!mysqli_query($db,$query)){
			die();
		}
		else{//mysql_close($db_selected);
		header("Location: details.php");
		exit(1);}*/
		$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " .     mysql_error());
		$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
		
		
		$name=$_POST['fullname'];
		$par_name=$_POST['parname'];
		$email=$_POST['email'];
		$phone=$_POST['phoneno'];
		$address=$_POST['address'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$hobbyarr=implode(' , ',$_POST['hobby']);

		$query="INSERT INTO `details`(fullname,parname,email,phoneno,addres,age,gender,hobbies) VALUES ('$name','$par_name','$email','$phone','$address','$age','$gender','$hobbyarr')";
		$data = mysql_query ($query)or die(mysql_error());
		if($data)
		{
		echo "YOUR REGISTRATION IS COMPLETED...";
		header("location: register1.php");
		}
		else
		{
		echo "Unknown Error!";
		header("location: register.php");
		}
?>