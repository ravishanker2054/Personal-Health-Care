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
$qualificaion=$_POST['qualificaion'];
$specialist=$_POST['specialist'];
$experiance=$_POST['experiance'];
$hospital_name=$_POST['hospital_name'];

$con=mysqli_connect('localhost','root','','oosedb');
$query="DELETE FROM `register` WHERE `name`='$name'";
$run=mysqli_query($con,$query);
if($run)
{
	echo "DELETE sucessfully";
	header("refresh:1;url=doctorregistration.html");
}
else
{
	echo "not inserted";
	
}
?>
