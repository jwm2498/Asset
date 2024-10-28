
<?php
include ("connect.php");

$staffnumber="";
$password_1="";
$password_2="";
if(isset($_POST['submit'])){
	$staffnumber=$_POST['staffnumber'];  
	$password_1=$_POST['password_1'];
	$password_2=$_POST['password_2'];
	$password=md5($password);
	$checkUsername="SELECT * From staff where staffnumber='$staffnumber'";
	$results=$conn->query($checkUsername);
	if($results->num_rows>0){
	echo "Username already taken, Try a new username";	
	
	}

	if($password_1!=$password_2){
	echo "Passwords do not match";
	
	}
	else{
		$insertQuery="INSERT INTO staff(staffnumber,password)values	('$staffnumber','$password_1')";
		if($conn->query($insertQuery)==TRUE){
			header("location:login.php");
		}
		else{
			echo "Action Failed:".$conn->error;
		}
	}
	}

?>
<?php

if(isset($_POST['login'])){
	$result="";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	$sql="(SELECT * FROM staff WHERE staffnumber='$staffnumber' and password='$password')";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		session_start();
		$row=$results->fetch_assoc(); 
		$_SESSION['staffnumber']=$row['staffnumber'];
	header("Location:grid.html");
		exit();
	}
	else{
		echo "Not Found, Incorrect Username or Password";
	}
}
?>