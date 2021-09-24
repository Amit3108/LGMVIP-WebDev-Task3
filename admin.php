<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE HTML>

<html>
<head>    
<title>Admin Portal</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		
		body{
			background: url('./bg.jpg');
			width:100%;
			height:1000px;
			background-size: 100%;
		}
		h2{
			margin-top: 3%;
			font-family: times new roman;

			text-align: center;
		}
		table{
			margin-top: 2%;
			border: 1px solid #000000;
			width: 90%;
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
		td:first-child{
			text-align: left;
			
		}
		tr:nth-child(odd){
			background-color: white;
		}
		tr:nth-child(even){
			background-color: #dddddd;
		}

	</style>
</head>
<body>
<nav>
<nav class="nav justify-content-center fixed-top bg-primary">
 <div class="container">	
<h1 style="color: aliceblue;">Welcome <?php echo $_SESSION['username'];?></h1>
</div>
<form class="">
<a class="btn btn-primary" href="add.php" role="button"><h3>Add</h3></a>
<a class="btn btn-primary" href="logout.php" role="button"><h3>Logout</h3></a>
</form>
</nav>
</nav>
<br><br>

<h2><b style="color:white;">LGM COLLEGE STUDENT RECORDS BATCH 2021</b></h2>
<table align="center">
	<tr>
		
		<th><h4>ROLL NO.</h4></th>
		<th><h4>NAME</h4></th> 
		<th><h4>HTML<br>(Out of 100)</h4></th>
		<th><h4>CSS<br>(Out of 100)</h4></th>
		<th><h4>JAVASCRIPT<br>(Out of 100)</h4></th>
		<th><h4>PHP<br>(Out of 100)</h4></th>
		<th><h4>MySQL<br>(Out of 100)</h4></th>
		<th><h4>TOTAL<br>(Out of 500)</h4></th>
		<th><h4>PERCENTAGE</h4></th>
		<th><h4>STATUS</h4></th>
		<th colspan="2"><h4>OPERATION</h4></th>
		
	</tr>
	<?php
	
	$result="SELECT * FROM `students`";

	$query = mysqli_query($conn,$result);
	$nums =mysqli_num_rows($query);
	while($res = mysqli_fetch_array($query)){
		
	?>
	<tr>
		<td style="text-align:center;"><?php echo $res['roll'];?></td>
		<td><?php echo $res['name'];?></td>
		<td><?php echo $res['html'];?></td>
		<td><?php echo $res['css'];?></td>
		<td><?php echo $res['js'];?></td>
		<td><?php echo $res['php'];?></td>
		<td><?php echo $res['mysql'];?></td>
		<td><?php echo $res['total'];?></td>
		<td><?php echo $res['percent'];?></td>
		<td><?php echo $res['status'];?></td>
		<td><a class="btn btn-success" href="update.php" role="button">Update</a></td>
		<td><a class="btn btn-danger" href="delete.php" role="button">Delete</a></td>

	</tr>
	
	<?php
}

?>

</table>
</body>
</html>