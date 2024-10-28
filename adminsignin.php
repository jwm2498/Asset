<?php 
include 'connect.php';
session_start();
$user=$_POST['user'];
$password=$_POST['password'];


$sql="SELECT * FROM admin WHERE user='$user' AND password='$password'";
$result=$conn->query($sql);
if (!$row =$result->fetch_assoc()){
echo"Your Admin Number or Password is incorrect please try again";	
}
else{
	$_SESSION['user']=$row['user'];
	header("Location: adminhome.php");
	
	//echo"You are logged in";
}