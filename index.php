<?php
require '../includes/common.php';
?>  
<html>
    <head>
            <title>
                Lifestyle store
            </title>
            <!External css file linkage.....>
            <!<link rel="stylesheet" href="style.css" type="text/css">>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <!--jQuery library--> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!--Latest compiled and minified JavaScript-->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
            .banner_image
            {
            padding-top: 75px; 
            padding-bottom: 50px;
            text-align: center; 
            color: #101010; 
            background:url("images/intro-bg_1.jpg") no-repeat center center; 
            background-size:cover;
            }
            .banner_content
            {
                position:relative;
                 padding-top:6%;
                 padding-bottom:6%;
                 margin-top:13%;
                 margin-bottom:12%;
                 margin-left:22%;
                 color:aliceblue;
                 background-color:rgba(0,0,0,0.7);
                 max-width:660px;
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
        ?>
        <?php
                if (isset($_SESSION['id']))
                 { 
                       header('location: ../product/product.php');
                 } 
        ?>
        <a href="../product/product.php" class="banner_image"></a>
        <div class="banner_image">
            <div class="container">
                <div class="banner_content">
                        <H1 ><strong>We sell lifestyle</strong></H1>
                            <p> Flat 40% off on premium brands</p>
                    <a href="../product/product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
        </div>
        <div class="row Text-center">
                <div class="container">
                <div class="col-md-4 col-sm-6">
                <div class="items">
                    <a href="../product/product.php">
                        <div class="thumbnail">
                        <img src="images/camera.jpg"   alt="">
                        <div class="caption">
                            <h2>
                                Cameras
                            </h2>
                            <p class="i">
                                Choose among the best available in the world
                            </p>
                        </div>
                    </a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                <div class="items">
                    <a href="../product/product.php">
                        <div class="thumbnail">
                        <img src="images/watch.jpg" alt="">
                        <div class="caption">
                            <h2>
                                Watches
                            </h2>
                            <p class="i">Original watches from the best brands</p>
                        </div>
                    </a>
                    </div>
                </div>
                </div>
                        <div class="col-md-4 col-sm-6">
            <div class="items">
                <a href="../product/product.php">
                    <div class="thumbnail">
                    <img src="images\shirt.jpg" alt="">
                    <div class="caption">
                        <h2>
                            Shirts
                        </h2>
                        <p class="i">
                            Our exquisite collection of shirts
                        </p>
                    </div>
                </a>
                </div>
            </div>
            </div>
        </div>            
            </div>                        
                 <?php
                    include '../includes/footer.php';
                    ?>
          </body>
</html>