<?php

$conn = mysqli_connect("localhost:3306","root","root") or die(mysqli_connect_error());
mysqli_select_db($conn,"lgm_college") or die(mysqli_error($conn));

echo "";
?>