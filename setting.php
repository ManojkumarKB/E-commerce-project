<?php
 include '../includes/common.php';
 session_start();
 if(!isset($_SESSION['id']))
 {
     header("location:../index/index.php");
 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Setting
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
            margin-top:45px;
            }
            </style>
    </head>
    <body>
        <?php
            include '../includes/header.php';
            ?>
            <form method="POST" action="setting_script.php">
        <div class="container" style="margin-top:75px;">
            <h3>Change password</h3>
            <div class="form-group">
                <input type="password" name="opwd" class="form-control"placeholder="Old password" size="25" ;>
            </div>
            <div class="form-group">
                <input type="password" name="npwd" class="form-control" placeholder="New password">
            </div>
            <div class="form-group">
                <input type="password" name="cnpwd" class="form-control" placeholder="Re-type New password">
            </div>
            <button  type="submit" class="btn btn-primary" name="submit" >Change</button>
        </div>
        </form>
       <?php
       include '../includes/footer.php';
       ?>
    </body>
</html>