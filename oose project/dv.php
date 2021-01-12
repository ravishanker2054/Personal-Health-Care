<html>
<head>
<title>View Appointment</title><style>
body{
	background-color: #e81038;
}
table,th,td{
	border:2px solid black;
	width:600px;
	background-color: #23dbc3;
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
<input type="text" name="email_id" class="btn" placeholder="Email id"/>
<input type="text" name="address" class="btn" placeholder="Address"/>
<input type="text" name="specialist" class="btn" placeholder="specialist"/>
<input type="submit" name="view"  class="btn" value="view">
</form>
</center>
<center>
<table>

<tr><td></td>
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
		
		
		<td>Doctor Name
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;
		  <?php echo ":"; echo $row['name']?>
		  ADDRESS
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <?php echo ":"; echo $row['specialist'] ?>
		  SPECIALIEST
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <?php echo ":"; echo$row['country'] ?>
		
		  EXPERIENCE
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;
				  
		  <?php echo ":"; echo $row['experiance'] ?>
		  HOSPITAL NAME
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;
		  <?php echo ":"; echo $row['hospital_name'] ?>
	
		
		  
		  COUNTRY
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;
		  <?php echo ":"; echo $row['country'] ?>
		  	
		  CITY
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <?php echo ":"; echo $row['city'] ?>
		 
	
	
           BLOOD GROUP
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          &nbsp;
		  <?php echo ":"; echo $row['blood_group'] ?></td>
		  
		<?php 
	}		
}

?>
</tr>
</table>
<h1>Click <a href="administration.html">here</a> to go back.</h1>

</center>
</body>
</html>