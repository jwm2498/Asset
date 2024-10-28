<?php 
include 'connect.php';
session_start();
$staffnumber=$_POST['staffnumber'];
$password=$_POST['password'];


$sql="SELECT * FROM staff WHERE staffnumber='$staffnumber' AND password='$password'";
$result=$conn->query($sql);
if (!$row =$result->fetch_assoc()){
echo"Your Staff Number or Password is incorrect please try again";	
}
else{
	$_SESSION['staffnumber']=$row['staffnumber'];
	header("Location: home.php");
	
	//echo"You are logged in";
}




 



?>