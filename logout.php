<?php
session_start();

if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
session_destroy();
header('location:index.php');
?>
<html>
    <head>
        <title>CafeMochi | Logout</title>
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
        <div class="container">
            <p id="message">
            <center> Your have been logged out from the Lifestyle Store page. Thank you for joining us.</center>
            </p>
        </div>
        <?php
        include './includes/footer2.php';
        ?>
    </body>
</html>

