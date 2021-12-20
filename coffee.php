
<?php
require './includes/common.php';


?>

<html>
    <head>
        <title>CafeMochi | Coffee</title>
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
                
                <img src="cakes/14mericano.jpeg"  class="adjust">
                    
                        <div class="write"> 
                            <h3>
                                Americano</h3>
                        <h4>  Price : ₹300</h4>
                            
                        
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(14)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-coffee.php?id=14" name="add" value="add" class="btn btn-primary" align="right">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                        </div>
                    </div>
                
            
            
            <div class="col-xs-6">
                
                    
                    
                <img src="cakes/15frappe.jpeg" class="adjust">
                    <div class="write"> 
                            <h3>
                                Cafe Frappe</h3>
                        <h4>  Price : ₹300</h4>
                    
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(15)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-coffee.php?id=15" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                   
                
            </div></div>
        </div>
        
           
            <div class="row">
            <div class="col-xs-6">
                
                <img src="cakes/16latte.jpeg" class="adjust">
                   
                        <div class="write"> 
                            <h3>
                                Cafe Latte</h3>
                        <h4>  Price : ₹300</h4>
                        
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(16)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-coffee.php?id=16" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                           </div>
                    
                </div>
                         
            
       
            <div class="col-xs-6">
                
                <img src="cakes/17mocha.jpeg" class="adjust">
                    <div class="write"> 
                            <h3>
                               Cafe Mocha</h3>
                        <h4>  Price : ₹300</h4>
                    
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(17)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-coffee.php?id=17" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                    </div>
                
                
            </div></div>
            </div>
            
            <div class="bg4">
        <div class="row">
            <div class="col-xs-6">
                
                <img src="cakes/18cappuccino.jpeg" class="adjust">
                    
                    <div class="write"> 
                            <h3>
                                Cappuccino</h3>
                        <h4>  Price : ₹300</h4>
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(18)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                            <a href="cart-add-coffee.php?id=18" name="add" value="add" class="btn btn-primary">Add to                                    cart</a>
                            <?php
                            }
                            }
                            ?>
                            </div>
            </div>
                
            
            
            
            <div class="col-xs-6">
                
                <img src="cakes/19coffee.jpeg" class="adjust">
                   
                    <div class="write"> 
                            <h3>
                                Filter Coffee</h3>
                        <h4>  Price : ₹300</h4>
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(19)) 
                            { 
                            echo '<a href="#" class="btn  btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                            <a href="cart-add-coffee.php?id=19" name="add" value="add" class="btn btn-primary">Add to                                    cart</a>
                            <?php
                            }
                            }
                            ?>
                            </div>
               
            </div>
        </div>
            
            </div>
            
        <?php
        include './includes/footer.php';
        ?>
        
    </div>
        </div>
    </body>
</html>






