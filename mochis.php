
<?php
require './includes/common.php';

?>

<html>
    <head>
        <title>CafeMochi | Mochis</title>
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
                
                <img src="cakes/20choco.jpeg"  class="adjust">
                    
                        <div class="write"> 
                            <h3>
                                Chocolate Mochi</h3>
                        <h4>  Price : ₹190</h4>
                            
                        
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(20)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-mochis.php?id=20" name="add" value="add" class="btn btn-primary" align="right">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                        </div>
                    </div>
                
            
            
            <div class="col-xs-6">
                
                    
                    
                <img src="cakes/21oreo.jpeg" class="adjust">
                    <div class="write"> 
                            <h3>
                                Cream and Cookies Oreo Mochi</h3>
                        <h4>  Price : ₹190</h4>
                    
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(21)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-mochis.php?id=21" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                   
                
            </div></div>
        </div>
        
           
            <div class="row">
            <div class="col-xs-6">
                
                <img src="cakes/22coffee.jpeg" class="adjust">
                   
                        <div class="write"> 
                            <h3>
                                Coffee Mochi</h3>
                        <h4>  Price : ₹190</h4>
                        
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(22)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-mochis.php?id=22" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                           </div>
                    
                </div>
                         
            
       
            <div class="col-xs-6">
                
                <img src="cakes/23mango.jpeg" class="adjust">
                    <div class="write"> 
                            <h3>
                               Mango Mochi>/h3>
                        <h4>  Price : ₹190</h4>
                    
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(23)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-mochis.php?id=23" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                
                <img src="cakes/24mint.jpeg" class="adjust">
                    
                    <div class="write"> 
                            <h3>
                                Mint Mochi</h3>
                        <h4>  Price : ₹190</h4>
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(24)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                            <a href="cart-add-mochis.php?id=24" name="add" value="add" class="btn btn-primary">Add to                                    cart</a>
                            <?php
                            }
                            }
                            ?>
                            </div>
            </div>
                
            
            
            
            <div class="col-xs-6">
                
                <img src="cakes/25strawberry.jpeg" class="adjust">
                   
                    <div class="write"> 
                            <h3>
                                Strawberry Mochi</h3>
                        <h4>  Price : ₹190</h4>
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(25)) 
                            { 
                            echo '<a href="#" class="btn  btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                            <a href="cart-add-mochis.php?id=25" name="add" value="add" class="btn btn-primary">Add to                                    cart</a>
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







