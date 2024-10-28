<?php
include("connect.php");
$entry="";
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
$nlocation="";
$nuser="";
$ncontact="";
if(isset($_POST['submit'])){
	$entry=$_POST['entry'];
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
	$nlocation=$_POST['nlocation'];
	$nuser=$_POST['nuser'];
	$ncontact=$_POST['ncontact'];	
	$sql="INSERT INTO sutransfer(entry,name,model,serial,status,yom,ram,hdd,cpu,location,user,contact,nlocation,nuser,ncontact)values
	('$entry''$name','$model','$serial','$status','$yom','$ram','$hdd','$cpu', '$location','$user','$contact', '$nlocation','$nuser','$ncontact')";
	
	
}
 
?>