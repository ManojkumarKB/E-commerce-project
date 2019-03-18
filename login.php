<?php
    require '..\includes\common.php';
    if(isset($_SESSION['id']))
    {
        header("location:../product/product.php");
    }
    ?>
   <!DOCTYPE html>
<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


    <!--jQuery library--> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
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
<body>
   <?php
     include '..\includes\header.php';
     ?>
     <form method="POST" action="login_submit.php">
    <div class="container panel-group"><br><br><br><br>
    <div class="panel panel-primary">
    <div class="panel-heading">Login
    </div>
    <div class="panel-body">
        <p class="text-warning">Login to make purchase</p>
        <div class="form-group">          
              <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" style="padding:0;"></i></span>
               <input type="text" id="email" name="email" class="form-control" placeholder="Email"></div>
               </div>
               <div class="form-group">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
               <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password">
            </div><br>
        </div>
            <button class="btn btn-primary btn-sm" name="submit" type="submit" >Login</button>
        </div>
    </div>
    <div class="panel-footer"><p>Don't have an account?Register</p>
        </div>
    </div>
        </form>
     <?php
         include '../includes\footer.php';
         ?>
</body>