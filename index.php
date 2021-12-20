<?php
require './includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
?>
<html>
    <head>
        <title>CafeMochi | Index</title>
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
        <div id="background_image">
        <div class="container-fluid">
            <div class="row" class="index-style">
            <div class="col-xs-12">

                <div id="content" id="write"><center>
                        <h1>Welcome to Cafe Mochi!</h1>
                        <h4><a href="login.php">Log in</a> to continue.<br>
                        New User? <a href="signup.php">Sign up</a> yourself first!</h4>
                    </center>
                </div>
      
            </div>   
        </div>
        </div>         
        </div>
        
        <?php
        include './includes/footer2.php';
        ?>
    </body>
</html>