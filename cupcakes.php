
<?php
require './includes/common.php';

?>

<html>
    <head>
        <title>CafeMochi | Cupcakes</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php
        include './includes/header.php';
        include './includes/check_if_added.php';
        ?>
        <div class="wrapper">
        <div class="container-fluid">
        <div class="bg1">
        <div class="row">
            <div class="col-xs-6" >
                
                        <img src="cakes/1coconut.jpg"  class="adjust">
                    
                        <div class="write"> 
                            <h3>
                                Coconut Cupcake</h3>
                        <h4>  Price : ₹150</h4>
                            
                        
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(1)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary" align="right">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                        </div>
                    </div>
                
            
            
            <div class="col-xs-6">
                
                    
                    
                        <img src="cakes/2funfetti.jpg" class="adjust">
                    <div class="write"> 
                            <h3>
                                Funfetti Cupcake</h3>
                        <h4>  Price : ₹150</h4>
                    
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(2)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                   
                
            </div></div>
        </div>
        
           
            <div class="row">
            <div class="col-xs-6">
                
                        <img src="cakes/3irishh.jpg" class="adjust">
                   
                        <div class="write"> 
                            <h3>
                                Irish Car Bomb Cupcake</h3>
                        <h4>  Price : ₹150</h4>
                        
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(3)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                           </div>
                    
                </div>
                         
            
       
            <div class="col-xs-6">
                
                        <img src="cakes/4margarita.jpg" class="adjust">
                    <div class="write"> 
                            <h3>
                                Margarita Cupcake</h3>
                        <h4>  Price : ₹150</h4>
                    
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(4)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                    </div>
                
                
            </div></div>
            </div>
            
            <div class="bg2">
        <div class="row">
            <div class="col-xs-6">
                
                        <img src="cakes/5red.jpg" class="adjust">
                    
                    <div class="write"> 
                            <h3>
                                Red Velvet Cupcake</h3>
                        <h4>  Price : ₹150</h4>
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(5)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                            </div>
            </div>
                
            
            
            
            <div class="col-xs-6">
                
                        <img src="cakes/6chocolate.jpg" class="adjust">
                   
                    <div class="write"> 
                            <h3>
                                Ultimate Chocolate Cupcake</h3>
                        <h4>  Price : ₹150</h4>
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(6)) 
                            { 
                            echo '<a href="#" class="btn  btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                            <a href="cart-add.php?id=6  " name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                            </div>
               
            </div>
        </div>
            
        <div class="row">
            <div class="col-xs-6">
                
                        <img src="cakes/7mocha.jpg" class="adjust">
                    
                    <div class="write"> 
                            <h3>
                                Mocha Cupcake</h3>
                        <h4>  Price : ₹150</h4>
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(7)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                    
                    </div>
            </div>
            
            <div class="col-xs-6">
            </div>
            </div>
        
        </div>
            
            <div class="bg3">
        </div>
            

            
        <?php
        include './includes/footer.php';
        ?>
        
    </div>
    </body>
</html>



