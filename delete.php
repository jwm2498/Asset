<?php
include("connect.php");
$serial=$_GET['serial'];

$query="Delete from systemunit where serial='$serial'";
$data=mysqli_query($conn,$query);
if($data){
echo "<font color='green'>System unit removed successfully",header("Location: viewpc.php");

}
else{
echo "<font color='red'>System unit remove failed";
}

?>