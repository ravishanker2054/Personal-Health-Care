<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile_number=$_POST['mobile_number'];
$disease=$_POST['disease'];
$way=$_POST['way']; 
$day=$_POST['day'];
$shift=$_POST['shift'];


$con=mysqli_connect('localhost','root','','oosedb');
$query="INSERT INTO `appointment` VALUES ('$name','$email','$mobile_number','$disease','$way','$day','$shift')";
$run=mysqli_query($con,$query);
if($run)
{
	echo " Appointed Sucessfully";
	header("refresh:1;url=appointment.html");
}
else
{
	echo "not inserted";
	
}
?>
