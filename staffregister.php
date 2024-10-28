<?php 
include 'connect.php';
session_start();
$staffnumber=$_POST['staffnumber'];

$sql="INSERT INTO staffnumber(staffnumber) VALUES('$staffnumber')";
$result=$conn->query($sql);
if($result==true){
	echo "records added successfully";
	
} 




?>