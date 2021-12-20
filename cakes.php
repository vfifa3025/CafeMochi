
<?php
require './includes/common.php';


?>

<html>
    <head>
        <title>CafeMochi | Cakes</title>
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
                
                <img src="cakes/8blackforest.jpeg"  class="adjust">
                    
                        <div class="write"> 
                            <h3>
                                German Black Forest Cake</h3>
                        <h4>  Price : ₹250</h4>
                            
                        
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(8)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-cakes.php?id=8" name="add" value="add" class="btn btn-primary" align="right">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                        </div>
                    </div>
                
            
            
            <div class="col-xs-6">
                
                    
                    
                <img src="cakes/9cheese.jpg" class="adjust">
                    <div class="write"> 
                            <h3>
                                New York Cheesecake</h3>
                        <h4>  Price : ₹250</h4>
                    
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(9)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-cakes.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                   
                
            </div></div>
        </div>
        
           
            <div class="row">
            <div class="col-xs-6">
                
                <img src="cakes/10pumpkin.jpg" class="adjust">
                   
                        <div class="write"> 
                            <h3>
                                Paleo Pumpkin Bundt Cake</h3>
                        <h4>  Price : ₹250</h4>
                        
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(10)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-cakes.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                           </div>
                    
                </div>
                         
            
       
            <div class="col-xs-6">
                
                <img src="cakes/11velvet.jpeg" class="adjust">
                    <div class="write"> 
                            <h3>
                               Red Velvet Cake</h3>
                        <h4>  Price : ₹250</h4>
                    
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(11)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                           <a href="cart-add-cakes.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                
                <img src="cakes/12tiramisu.jpg" class="adjust">
                    
                    <div class="write"> 
                            <h3>
                                Tiramisu Cake</h3>
                        <h4>  Price : ₹150</h4>
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(12)) 
                            { 
                            echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                            <a href="cart-add-cakes.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php
                            }
                            }
                            ?>
                            </div>
            </div>
                
            
            
            
            <div class="col-xs-6">
                
                <img src="cakes/13triplechoco.jpg" class="adjust">
                   
                    <div class="write"> 
                            <h3>
                                Triple Chocolate Cheesecake</h3>
                        <h4>  Price : ₹250</h4>
                       <?php 
                            if (!isset($_SESSION['email'])) 
                            { 
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary ">Order Now</a></p>
                            <?php
                            } else {
                            if (check_if_added_to_cart(13)) 
                            { 
                            echo '<a href="#" class="btn  btn-success" disabled>Added to cart</a>';
                            } else {
                            ?>
                            <a href="cart-add-cakes.php?id=13" name="add" value="add" class="btn btn-primary">Add to cart</a>
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




