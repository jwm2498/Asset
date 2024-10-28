<?php
include("connect.php");
$name="";
$model="";
$serial="";
$status="";
$yom="";
$ram="";
$hdd="";
$cpu="";
$location="";
$user="";
$contact="";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$model=$_POST['model'];
	$serial=$_POST['serial'];
	$status=$_POST['status'];
	$yom=$_POST['yom'];
	$ram=$_POST['ram'];
	$hdd=$_POST['hdd'];
	$cpu=$_POST['cpu'];
	$location=$_POST['location'];
	$user=$_POST['user'];
	$contact=$_POST['contact'];		
	$sql="INSERT INTO systemunit(name,model,serial,status,yom,ram,hdd,cpu,location,user,contact)values
	('$name','$model','$serial','$status','$yom','$ram','$hdd','$cpu', '$location','$user','$contact')";
	mysqli_query($conn,$sql);
header("location:pc.php");	
	
}
 
?>