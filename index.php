<?php
require 'connect.php';

?>

<!DOCTYPE HTML>

<html>
<head>
	<title>Login</title>
	<style>
		form{
			margin-top: 15%;
		}
		h1{
			text-align: center;
		}
        .title{
            margin-top:8vh;
            margin-left:100px;
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
<body>
    
	<section class="container-fluid bg">
	<section class="row justify-content-center">
    
		<section class="col-12 col-sm-6 col-md-3 style">
        <img src="./homelogo.png" class="title">
		
	<form  method="post" align="center" class="form-container">
		<div><h1>LGM LOGIN PAGE</h1></div><br>
		<div class="form-group" >
			
		<label><b>Username: </b></label>&nbsp;&nbsp;<input type="text" name="username" placeholder="Username"></div>
		<div class="form-group" ><label><b>Password: </b></label>&nbsp;&nbsp;<input type="password" name="pass" placeholder="Password"></div>
		
		<div class="form-group" ><label><b>Usertype: </b></label>&nbsp;&nbsp;<select name="usertype">
			<option value="select">Select User Type</option>
			<option value="admin">Admin</option>
			<option value="student">Student</option>
		</select>
	
	</div>

		<br>
		
	<div>	<input class="btn btn-primary" type="submit" name="submit" value="Login"></div>
	<br>
	<div><p>Note: Use Roll No. as username and password</p></div>
	</form>

</section>
</section>
</section>
<?php
if (isset($_POST['submit'])) {
session_start();
$uname=trim($_POST['username']);
$pass =trim($_POST['pass']);

$utype=$_POST['usertype'];
if ($utype=='select'||$uname==""||$pass=="") {
echo "<br>Some fields are empty";
}
else if($utype=='admin'&&$uname=='admin' && $pass=='lgmadmin'){
	$_SESSION['username'] = $uname;
    header('Location: admin.php');
	
}
else{
	$result = "SELECT `roll` FROM students WHERE `roll`='$uname'";
    $query = mysqli_query($conn,$result);
    $count = mysqli_num_rows($query);

    if($count != 0)
    {
      while($row= mysqli_fetch_assoc($query)){
      $roll = $row['roll'];
      $password = $row['roll'];
  }

      if($uname== $roll && $pass==$password)
      {
        $_SESSION['username'] = $uname;
        header('Location: student.php');
      }
      else
        alert("Incorrect password ..Try again");
    }
    else
      die(alert("User does not exist"));
}
}
?>
</body>
</html>