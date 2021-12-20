<html>
    <head>
        <title>CafeMochi | Contact Us</title>
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
            <div class="content3">
        <div class="container" >
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="cont">LIVE SUPPORT</h2>
                    <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                    
                    Via Piccinni 118,<br>
                    San Lorenzello,<br> Benevento, Italy<br>
                    Zip: 82030 <br>
                    Phone : 0325 3067868 Fax : (000) 111 88 88 8<br>
                    Email : info@cafemochi.com<br>
                    Follow on : Facebook, Twitter, Instagram
                </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <h2>CONTACT US</h2>
                    <form action="confirm.php" method="post">
                        <div class="form-group">
                            <b>Name:</b><br>
                            <input type='text' name='name1' required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <b>Email:</b><br>
                            <input type='email' name='email1' required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <b>Message:</b><br>
                            <textarea cols="102" rows="5" required="true" name="msg"></textarea>
                        </div>
                        
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        
                            
                    </form>
                </div>
                <div class="col-xs-4">
                    
                </div>
            </div>
        </div>
        
        <?php
        include './includes/footer.php';
        ?></div>
    </body>
</html>
                

