<?php
require './includes/common.php';
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
?>
<html>
    <head>
        <title>CafeMochi | Signup</title>
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
            <div class="row row-style">
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <form method="post" action="signup_script.php">
                        <h1><strong>SIGN UP</strong></h1>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control" pattern="^[A-Za-z\s]{1,}{\.}[\.]{0,1}[A-Za-z\s]{0,}$" required="true">
                        </div>
                        <div class="form-group">
                            <input type="email" name="e-mail" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
                            <?php echo filter_input(INPUT_POST,'m1'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" pattern=".{6,}" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact" placeholder="Contact" class="form-control" maxlength="10" required="true">
                            <?php echo filter_input(INPUT_POST,'m2'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" placeholder="City" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" placeholder="Address" class="form-control" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary but">Submit</button>
                    </form>
                </div>
                <div class="col-xs-4"></div>
            </div>
        </div>
        <?php
        include './includes/footer2.php';
        ?>
        </div>
    </body>
</html>
