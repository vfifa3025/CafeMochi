<?php
require './includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <title>CafeMochi | Settings</title>
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
            <div class="rows row-style">
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    <form action="settings_script.php" method="post">
                        <h2>CHANGE PASSWORD</h2>
                        
                        <div class="form-group">
                            <input type="password" name="old-password" placeholder="Old Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="New Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password1" placeholder="Re-type New Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        echo "<br><br><b class='red'>" . filter_input(INPUT_POST, 'error') . "</b>";
                        ?>
                    </form>
                </div>
                <div class="col-xs-4"></div>
            </div>
        </div>
        <?php
        include './includes/footer2.php';
        ?></div>
    </body>
</html>
