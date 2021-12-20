
<?php
require './includes/common.php';
?>

<html>
    <head>
        <title>CafeMochi | Home</title>
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
        <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <div id="back1" class="prop">
                    <div id="name123">
                        <center>                 
                            <h3><a href="cupcakes.php" class="namelink">CUPCAKES</a></h3>   
                        </center>
                    </div>
                </div>
            </div>
                
            
            <div class="col-xs-4">
                <div id="back2" class="prop" >                     
                    <div id="name123">
                        <center>                 
                            <h3><a href="cakes.php" class="namelink">CAKES</a></h3>   
                        </center>
                    </div>                  
                </div>
            </div>
            
            <div class="col-xs-4">
               <div id="back3" class="prop">
                    <div id="name123">
                        <center>                 
                            <h3><a href="coffee.php" class="namelink">COFFEE</a></h3>   
                        </center>
                     </div>
                </div>
            </div>    
        </div>
            
            
        <div class="row">
            <div class="col-xs-6">
                <div id="back4" class="prop">
                    <div id="name4">
                        <center>                 
                            <h3><a href="mochis.php" class="namelink">MOCHIS</a></h3>   
                        </center>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-6">
                <div id="back5" class="prop">
                    
                    </div>
                </div>
            </div>
            
     
        </div>
            

            
        <?php
        include './includes/footer.php';
        ?>
    </body>
</html>



