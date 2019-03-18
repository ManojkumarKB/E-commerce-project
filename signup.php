<?php
 require '../includes/common.php';
 if(isset($_SESSION['id'])) 
 {
     header("location: ../product/product.php");
 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Signup
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <!--jQuery library--> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!--Latest compiled and minified JavaScript-->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
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
            <form method="POST" action="signup_script.php">
            <div class="container">
                <h1><br><center><strong>SIGN UP</strong></center></h1>
                <div class="form-group">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                        <input type="email" name="email" id="email" pattern="[a-Z0-9._%+-]+@[a-Z0-9.-]+\.[a-z]{2,3}$" title="Please give @ symbol" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">
                            <input type="password" name="pwd" id="pwd" class="form-control" pattern=".{6,}" title="atleast five characters must be entered" placeholder="Password">
                          </div>
                          <div class="form-group">
                                <input type="number" name="cno" id="cno" class="form-control" placeholder="Contact Number">
                              </div>
                              <div class="form-group">
                                    <input type="text" name="city" id="city" class="form-control" placeholder="City">
                                  </div>
                                  <div class="form-group">
                                        <input type="text" name="Address" id="Address" class="form-control" placeholder="Address">
                                      </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="SIGN UP">
                                    </div>
            </div>
        </form>
            <?php
              include '../includes/footer.php';
              ?>
    </body>
</html>