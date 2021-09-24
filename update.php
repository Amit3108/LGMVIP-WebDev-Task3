<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>LGM-Update Student Detail</title>
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
	<div><h3>UPDATE STUDENT DATA</h3></div>
	<div class="form-group" ><label>Roll no. </label><br><input type="text" name="roll"></div>
    <div class="form-group" ><label>HTML</label><br><input type="number" name="html"></div>
    <div class="form-group" ><label>CSS</label><br><input type="number" name="css"></div>
    <div class="form-group" ><label>JS</label><br><input type="number" name="js"></div>
    <div class="form-group" ><label>PHP</label><br><input type="number" name="php"></div>
	<div class="form-group" ><label>MySQL</label><br><input type="number" name="mysql"></div>


	<br>
	<div>	<input class="btn btn-success" type="submit" name="update" value="Update"></div><br>
	<div>   <a class="btn btn-primary" href="admin.php" role="button">Back</a></div>
</form>
</section>
</section>
</section>
<?php
if (isset($_POST['update'])) {
    $roll=$_POST['roll'];
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
$sql = mysqli_query($conn,"UPDATE `students` SET `html`='$html',`css`='$css',`js`='$js',`php`='$php',`mysql`='$mysql',`total`='$total',`percent`='$per',`status`='$status' WHERE `roll`='$roll'");

if($sql){
	echo '<script type ="text/JavaScript">';  
echo 'alert("Marks Updated Successfully")';  
echo '</script>'; 
header('location: admin.php');
}
else{
	echo '<script type ="text/JavaScript">';  
echo 'alert("Marks Not Updated")';  
echo '</script>'; 
}

}
?>

</body>
</html>