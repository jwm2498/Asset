<?php 
include 'connect.php';
session_start();
$staffnumber=$_POST['staffnumber'];
$password=$_POST['password'];

$query="SELECT * FROM staffnumber WHERE staffnumber='$staffnumber'";
$result=$conn->query($query);
if (!$row =$result->fetch_assoc()){
echo"You are not authorized";
header("Location: signup.php");	
}
else{
$sql="INSERT INTO staff (staffnumber,password) VALUES('$staffnumber', '$password')";
$result=$conn->query($sql);
if($result==true){
	echo "records added successfully";
	header("Location: login.php");	
} 
else{
	echo"Seek assistance from Admin";
	header("Location: signup.php");
}

}

?>