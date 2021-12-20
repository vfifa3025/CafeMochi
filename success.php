<?php
require './includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string =filter_input(INPUT_GET,'itemsid');

$query = "UPDATE users_products SET status='Confirmed' WHERE user_id=".$user_id." AND item_id IN (" . $item_ids_string . ") AND status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
<html>
    <head>
        <title>CafeMochi | Success</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php
        include './includes/header.php';
        ?>
        <div class="bg5">
        
        <div class="container">
            <div class="content5">
                <center>
            
            <h2> ITADAKIMASU! </h2>
                Thank you for ordering from Cafe Mochi. The order shall be delivered to you shortly.
            <hr align="center" width="50%">
            Want to order more ?<a href="home.php" class="lnk"> Click here  </a>!
                </center>
            
            
        </div>
        </div>
        <?php
        include './includes/footer2.php';
        ?></div>
    </body>
</html>
