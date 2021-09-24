<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETE STUDENT DETAIL</title>
	<style>
		form{
			margin-top: 25%;
		}
		h1{
			text-align: center;
		}
		.bg{
			background: url('./bg.jpg');
			width:100;
			height:100vh;
			background-size: 100%;
		}
		.form-container{
			background:#ffff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #000;
		}

		.style input{
			width: 250px;
    border-radius: 10px;

		}
		.style select{
			width: 250px;
			border-radius: 10px;
		}
		.style a{
			width: 250px;
			border-radius: 10px;
		}
		
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<section class="container-fluid bg">
	<section class="row justify-content-center">
		<section class="col-12 col-sm-6 col-md-3 style">
<form align="center" method="POST" class="form-container">
	<div><h3>DELETE STUDENT DATA</h3></div>
	<div class="form-group" ><label>Roll no. </label><input type="text" name="roll"></div>
	<br>
	<div>	<input class="btn btn-danger" type="submit" name="delete" value="Delete"></div><br>
	<div>   <a class="btn btn-primary" href="admin.php" role="button">Back</a></div>
</form>
</section>
</section>
</section>
<?php
if (isset($_POST['delete'])) {
	$roll=$_POST['roll'];
	$sql = mysqli_query($conn,"DELETE FROM `students` WHERE `roll`='$roll'");

if($sql){
    echo '<script type ="text/JavaScript">';  
echo 'alert("Record Deleted Successfully")';  
echo '</script>'; 
header('location: admin.php');
}
else{
	echo "<br>Not Deleted";
}
	}
?>

</body>
</html>