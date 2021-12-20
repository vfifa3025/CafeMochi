<?php
require './includes/common.php';
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$item_id=filter_input(INPUT_GET,'id');
$user_id=$_SESSION['user_id'];
$query="INSERT INTO users_products(user_id, item_id, status) VALUES ('$user_id', '$item_id', 'Added to cart')";
mysqli_query($con,$query) or die(mysqli_error($con));
if(isset($_SESSION['email']))
{
    header('location:cupcakes.php');
}
}
?>


