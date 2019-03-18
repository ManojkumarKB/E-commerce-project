<?php
 require '../includes/common.php';
 session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Products
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        .para
        {
            font-family:sans-serif;
            font-size:22px;
        }
        footer
            {
            padding:10px 0;
            background-color:#101010;
            color:#9d9d9d;
             bottom:0;
            width:100%;
            }
        </style>
    </head>
    <body>
       <?php
       include '../includes/header.php';
       include '../includes/check-if-added.php';    
       ?>    
    <div class="container">
            <div class="jumbotron" style="margin-top:75px;">
            <h1 style="color:black; font-family:'Times New Roman', Times, serif;"><center><strong>Welcome to our Lifestyle Store!</strong></center></h1>
            <h4 class="para"><center>we have the best camera,watches,shirts for you, No need to hunt around,we all in one place</center></h4>
        </div>
    </div>
    <div class="container">
    <div class="row Text-center">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail" style:"margin-left:25px;" >
                <img src="images/camera.jpg">
                <div class="caption">
                    <h3>Canon EOS</h3>
                    <p>price:Rs:36000.00</p>
                </div>
                <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {        
                  if (check_if_added_to_cart(1)) {    
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail" style:"margin-left:25px;" >
                    <img src="images/camera1.jpg">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>price:Rs:40000.00</p>
                    </div>
                    <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {        
                  if (check_if_added_to_cart(2)) {         
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail" style:"margin-left:25px;" >
                        <img src="images/camera2.jpg">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>price:Rs:50000.00</p>
                        </div>
                        <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(3)) {        
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail" style:"margin-left:25px;" >
                            <img src="images/camera3.jpg">
                            <div class="caption">
                                <h3>Olympus DSLR</h3>
                                <p>price:Rs:80000.00</p>
                            </div>
                            <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(4)) {        
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                        </div>
                    </div>
    </div>
    <div class="row Text-center">
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail" style:"margin-left:25px;" >
                        <img src="images/watch1.jpg">
                        <div class="caption">
                            <h3>Titan Model#301</h3>
                            <p>price:Rs:13000.00</p>
                        </div>
                        <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(5)) {        
                   echo '<a href="../login/login.php"lass="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                    </div>
        </div>
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail" style:"margin-left:25px;" >
                        <img src="images/watch2.jpg">
                        <div class="caption">
                            <h3>Titan Model#201</h3>
                            <p>price:Rs:3000.00</p>
                        </div>
                        <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(6)) {        
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                    </div>
        </div>
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail" style:"margin-left:25px;" >
                        <img src="images/watch3.jpg">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>price:Rs:8000.00</p>
                        </div>
                        <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(7)) {        
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                    </div>
        </div>
        <div class="col-md-3 col-sm-6">
                <div class="thumbnail" style:"margin-left:25px;" >
                        <img src="images/watch4.jpg">
                        <div class="caption">
                            <h3>Faber Luba#111</h3>
                            <p>price:Rs:18000.00</p>
                        </div>
                        <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(8)) {        
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                    </div>
        </div>
    </div>
    <div class="row Text-center"> 
           <div class="col-md-3 col-sm-6">
            <div class="thumbnail" style:"margin-left:25px;" >
                    <img src="images/shirt1.jpg">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>price:Rs:800.00</p>
                    </div>
                    <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(9)) {        
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                </div>
    </div>
    <div class="col-md-3 col-sm-6">
            <div class="thumbnail" style:"margin-left:25px;" >
                    <img src="images/shirt2.jpg">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>price:Rs:1000.00</p>
                    </div>
                    <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(12)) {        
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                </div>
    </div>
    <div class="col-md-3 col-sm-6">
            <div class="thumbnail" style:"margin-left:25px;" >
                    <img src="images/shirt3.jpg">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>price:Rs:1500.00</p>
                    </div>
                    <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(13)) {        
                   echo '<a href="../login/login.php" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                </div>
    </div>
    <div class="col-md-3 col-sm-6">
            <div class="thumbnail" style:"margin-left:25px;" >
                    <img src="images/shirt4.jpg">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>price:Rs:1300.00</p>
                    </div>
                    <?php 
                if (!isset($_SESSION['id'])) 
                { ?>                  
                 <p><a href="../login/login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>       
                 <?php                
                 } else {       
                  if (check_if_added_to_cart(14)) {        
                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                   } else { 
                    ?>    
                    <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                     <?php     
                    }        
                    }      
                     ?>
                </div>
    </div>
    </div>
</div>
       <?php
       include '../includes/footer.php';
       ?>
</body> 