<html>
<head>
<title>View Appointment</title>
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

<div class="container">
<form action="" method="POST">
 
<input type="text" name="address" class="btn" placeholder="Address"/>
<input type="text" name="specialist" class="btn" placeholder="specialist"/>
<input type="submit" name="view"  class="btn" value="view">
</form>
<table>
<tr>
<td>NAME</td></tr><tr>
<td>FATHER'S NAME</td></tr><tr>
<td>EMAIL ID</td></tr><tr>
<td>MOBILE NUMBER</td></tr><tr>
<td>GENDER</td></tr><tr>
<td>BLOOD GROUP</td></tr><tr>
<td>ADDRESS</td></tr><tr>
<td>CITY</td></tr><tr>
<td>PIN CODE</td></tr><tr>
<td>STATE</td></tr><tr>
<td>COUNTARY</td></tr><tr>
<td>AGE</td></tr><tr>
<td>QUALIFICATION</td></tr><tr>
<td>SPECIALIST</td></tr><tr>
<td>EXPERIENCE</td></tr><tr>
<td>HOSPIAL NAME</td>
</tr>

<?php
$con=mysqli_connect('localhost','root','','oosedb');
if(isset($_POST['view']))
{
	$address=$_POST['address'];
	$query="select * from doctorregister where address='$address'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run))
	{
		?>
		   
		
		
		  <tr><td> <?php echo $row['name'] ?></td></tr><tr>
		  <td> <?php echo $row['fathers_name'] ?></td></tr><tr>
		  <td> <?php echo $row['email_id'] ?></td></tr><tr>
		  <td> <?php echo $row['mobile_number'] ?></td></tr><tr>
		  <td> <?php echo $row['gender'] ?></td></tr><tr>
		  <td> <?php echo $row['blood_group'] ?></td></tr><tr>
		  <td> <?php echo $row['address'] ?></td></tr><tr>
		  <td> <?php echo $row['city'] ?></td></tr><tr>
		  <td> <?php echo $row['pin_code'] ?></td></tr><tr>
		  <td> <?php echo $row['state'] ?></td></tr><tr>
		  <td> <?php echo $row['country'] ?></td></tr><tr>
		  <td> <?php echo $row['age'] ?></td></tr><tr>
		  <td> <?php echo $row['qualificaion'] ?></td></tr><tr>
		  <td> <?php echo $row['specialist'] ?></td></tr><tr>
		  <td> <?php echo $row['experiance'] ?></td></tr><tr>
		  <td> <?php echo $row['hospital_name'] ?></td>
		
		</tr>
		<?php 
	}		
}

?>
</table>
<h3>Click <a href="appointment.html">here</a> to go back.</h3>
</center>
</div>
</body>
</html>