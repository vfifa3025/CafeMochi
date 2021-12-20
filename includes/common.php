<?php

$con=mysqli_connect("localhost:3309","root","","cafemochi") or die($mysqli_error($con));
if(!isset($_SESSION))
{
    session_start();
}

?>

