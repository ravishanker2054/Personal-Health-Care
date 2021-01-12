<html>
<head>
<title>Delete Doctor</title>
<style>
body{
	background-color: grey;
}
table,th,td{
	border:2px solid black;
	width:1100px;
	background-color: lightgreen;
}
.btn{
	width:10%;
	height: 5%;
	font-size: 22px;
	padding: 0px;
}
</style>
</head>
<body>
<center>
<h1>ENTER THE VALID INFORMATION<h1>
<div class="container">
<form action="" method="POST">
<input type="text" name="email" class="btn" placeholder="email"/>
<input type="text" name="address" class="btn" placeholder="Address"/>
<input type="text" name="specialist" class="btn" placeholder="specialist"/>
<input type="submit" name="delete"  class="btn" value="delete">
</form>


<?php
$con=mysqli_connect('localhost','root','','oosedb');
if(isset($_POST['Delete']))
{
	$email=$_POST['email'];
	$query="DELETE FROM `doctorregister` WHERE email='$email'";
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
}

?>

<h3>Click <a href="administration.html">here</a> to go back.</h3>
</center>
</div>
</body>
</html>