<?php
require './includes/common.php';

$namee=filter_input(INPUT_POST,'name1');
$namee= mysqli_real_escape_string($con, $namee);

$emaill=filter_input(INPUT_POST,'email1');
$emaill= mysqli_real_escape_string($con, $emaill);

$msgg=filter_input(INPUT_POST,'msg');
$msgg= mysqli_real_escape_string($con, $msgg);

$query="INSERT INTO message(name, email, message) VALUES ('" . $namee . "','" . $emaill . "','" . $msgg . "')";
mysqli_query($con,$query) or die(mysqli_error($con));
header('location:home.php');

?>


