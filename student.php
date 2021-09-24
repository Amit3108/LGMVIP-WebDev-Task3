<?php
	include 'connect.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LGM-Student Portal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin-top: 5%;
            background: url('./bg.jpg');
			width:100%;
			height:1000px;
			background-size: 100%;
		}
		table{
			font-size: 18px;
			margin-top: 3%;
			border: 1px solid #000000;
			width: 40%;
            background-color:white;
		}
		th{
			font-family: times new roman;
			border: 1px solid #000000;
			padding:5px;
			text-align: center;
		}
		td{
			font-family: arial, san-serif;
			border: 1px solid #000000;
			padding:5px;
			text-align: center;
		}
		th:first-child{
			text-align: left;
			font-style: bold;
		}
		
	</style>
	  
</head>
</head>
<body align="center">
	<nav>
		<nav class="nav justify-content-center fixed-top bg-primary">
   			 <div class="container">
				<h1 style="color: aliceblue; margin-left:250px;">LGM COLLEGE FINAL EXAM RESULT 2021</h1>
</div>
	<form class="">
	<a class="btn btn-primary" href="logout.php" role="button"><h3>Logout</h3></a>
</form>
</nav>
</nav>


<?php
$roll=$_SESSION['username'];


$result="SELECT * FROM `students` WHERE `roll`='$roll'";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);
	
	while($res = mysqli_fetch_array($query)){
?><br>
<center><h2>HERE GOES YOUR RESULT!!</h2></center>
	<table align="center">
		<tr><th>Name</th><td><?php echo $res['name'];?></td></tr>
		<tr><th>Roll No.</th><td><?php echo $res['roll'];?></td></tr>
		<tr><th>HTML</th><td><?php echo $res['html'];?></td></tr>
		<tr><th>CSS</th><td><?php echo $res['css'];?></td></tr>
		<tr><th>JS</th><td><?php echo $res['js'];?></td></tr>
		<tr><th>PHP</th><td><?php echo $res['php'];?></td></tr>
		<tr><th>MySQL</th><td><?php echo $res['mysql'];?></td></tr>
		<tr><th>Total(Out of 500)</th><td><?php echo $res['total'] ;?></td></tr>
		<tr><th>Percentage</th><td><?php echo $res['percent'];?></td></tr>
		<tr><th>Status</th><td><?php echo $res['status'];?></td></tr>
		

	</table>
		

<?php
	}

$roll=$_SESSION['username'];

$result="SELECT * FROM `students` WHERE `roll`='$roll'";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);
	
	while($res = mysqli_fetch_array($query)){
	if($res['status']=="DISTINCTION"){
		echo "<br><center><h4>Congratulations!!! You Secured DISTINCTION in Your Exam</h4></center>";
	}
	elseif($res['status']=="PASS"){
		echo "<br><center><h4>Improvents needed!!!</br></center>";

	}
	else{
		echo "<br><center><h4>Fail!!Better Luck Next Time</h4></center>";
	}
}
	?>



</body>
</html>