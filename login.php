<?php
require './includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<html>
    <head>
        <title>CafeMochi | Login</title>
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
            <div class="row row-style-log">
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                    
                        <div class="content4">
                            <h1>LOGIN</h1>
                        
                        
                            <form action='login_submit.php' method="post">
                                <p>Don't have an account ? <a href="signup.php" class="lnk">Register!</a></p>
                                <div class="form-group">
                                    <input type="email" name="e-mail" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" class="form-control">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                
                                <?php echo filter_input(INPUT_POST,'error'); ?>
                                <br><br>
                                <a href="forgotpass.php" class="lnk">Forgot Password?</a>
                            </form>
                        
                        
                    </div>
                </div>
                <div class="col-xs-4"></div>
                </div>
               
            </div>
        </div>
        <?php
        include './includes/footer2.php';
        ?></div>
    </body>
</html>
