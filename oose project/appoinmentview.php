<html>
<head>
<title>View APPoinment</title>
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
<input type="text" name="email" class="btn" placeholder="Email id"/>
<input type="text" name="address" class="btn" placeholder="Address"/>
<input type="text" name="disease" class="btn" placeholder="disease"/>
<input type="submit" name="view"  class="btn" value="view">
</form>
<table>
<tr>
<td>NAME</td>
<td>EMAIL</td>
<td>PHONE_NO</td>
<td>DISEASE</td>
<td>WAY</td>
<td>DAY</td>
<td>SHIFT</td>
</tr>

<?php
$con=mysqli_connect('localhost','root','','oosedb');
if(isset($_POST['view']))
{
	$email=$_POST['email'];
	$query="select * from appointment where email='$email'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run))
	{
		?>
		<br><br>
		<tr>
		  <td> <?php echo $row['name'] ?></td>
		  <td> <?php echo $row['email'] ?></td>
		  <td> <?php echo $row['mobile_number'] ?></td>
		  <td> <?php echo $row['disease'] ?></td>
		  <td> <?php echo $row['way'] ?></td>
		  <td> <?php echo $row['day'] ?></td>
		    <td> <?php echo $row['shift'] ?></td>
		</tr>
		<?php 
	}		
}

?>
</table>
<h3>Click <a href="patient.html">here</a> to go back.</h3>
</center>
</div>
</body>
</html>