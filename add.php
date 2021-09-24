<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LGM-Add Student Detail</title>
	<style>
		form{
			margin-top: 25%;
            text-align:center;
		}
		h1{
			text-align: center;
		}
		.bg{
			background: url('./bg.jpg');
			width:100%;
			height:1000px;
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
<body align="center">
	<section class="container-fluid bg">
	<section class="row justify-content-center">
		<section class="col-12 col-sm-6 col-md-3 style">

	<form method="POST" align="center" class="form-container">
	
	<div><h4>ADD NEW STUDENT DETAIL</h4></div>
	<div class="form-group" ><label>Full Name:</label><br><input type="text" name="name"></div>
	<div class="form-group" ><label>Roll No. :</label><br><input type="number" name="roll"></div>
	<div class="form-group" ><label>HTML</label><br><input type="number" name="html"></div>
    <div class="form-group" ><label>CSS</label><br><input type="number" name="css"></div>
    <div class="form-group" ><label>JS</label><br><input type="number" name="js"></div>
    <div class="form-group" ><label>PHP</label><br><input type="number" name="php"></div>
    <div class="form-group" ><label>MySQL</label><br><input type="number" name="mysql"></div>
	<br>
	<div>	<button class="btn btn-primary" name="add" type="submit" style="width:250px; border-radius:10px;">Add Student</button></div>
	<br>
	<div>   <a class="btn btn-primary" href="admin.php" role="button">Back</a></div>
</form>
</section>
</section>
</section>

<?php
if (isset($_POST['add'])) {
$name=$_POST['name'];
$roll="TE".$_POST['roll'];
$html=$_POST['html'];
$css=$_POST['css'];
$js=$_POST['js'];
$php=$_POST['php'];
$mysql=$_POST['mysql']; 
$total=$html+$css+$js+$php+$mysql;
$per=($total/500)*100; 

if($per>60){
	$status="DISTINCTION";
}
elseif($per<35){ 
	$status="FAIL";
}
else{
	$status= "PASS";
}
$result = mysqli_query($conn,"INSERT INTO `students` (`name`, `roll`, `html`, `css`, `js`, `php`, `mysql`, `total`, `percent`, `status`) VALUES ('$name','$roll','$html','$css','$js','$php','$mysql','$total','$per','$status')");
if($result){
	echo '<script type ="text/JavaScript">';  
echo 'alert("Detail added Successfully")';  
echo '</script>'; 
header('location: admin.php');
}	
else{
	echo '<script type ="text/JavaScript">';  
echo 'alert("Not added")';  
echo '</script>'; 
}

}
?>
</body>
</html>