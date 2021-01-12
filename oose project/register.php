<?php
$name=$_POST['name'];
$fathers_name=$_POST['fathers_name'];
$email_id=$_POST['email_id'];
$mobile_number=$_POST['mobile_number'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood_group']; 
$address=$_POST['address'];
$city=$_POST['city'];
$pin_code=$_POST['pin_code'];
$state=$_POST['state'];
$country=$_POST['country'];
$age=$_POST['age'];

$con=mysqli_connect('localhost','root','','oosedb');
$query="INSERT INTO `register` VALUES ('$name','$fathers_name','$email_id','$mobile_number','$gender','$blood_group','$address','$city','$pin_code','$state','$country','$age')";
$run=mysqli_query($con,$query);
if($run)
{
	echo "Register sucessfully";
	header("refresh:1;url=patient.html");
}
else
{
	echo "not inserted";
	
}
?>
