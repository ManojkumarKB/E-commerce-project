<!DOCTYPE html>
<html>
    <head>
        <title>
            Success
        </title>
        <style>
        .bg
        {
            background-color:rgb(61, 238, 61);
        }
        </style>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
            <!--jQuery library--> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!--Latest compiled and minified JavaScript-->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
    <body class="bg">
        <div class="container">
            <div class="jumbotron" style="margin-top:115px;">
                <div class="container">
                <?php
                    include '../includes/common.php';
                    if(!session_id())
                    {
                        session_start();
                    }
                    if(!isset($_SESSION['id']))
                        {
                         header("location:../index/index.php");
                         }
                     $user_id=$_SESSION['id'];
                     $select_query="SELECT * FROM users_items where users_items.user_id='$user_id'";
                     $select_query_result=mysqli_query($con,$select_query);
                     while($row=mysqli_fetch_array($select_query_result))
                     {
                         $update_query="UPDATE users_items SET status='Confirmed' where users_items.user_id='$user_id'";
                         $update_query_result=mysqli_query($con,$update_query);
                     }?>
                <h1 class="container" style="margin-left:120px;"><strong>Your order is Confirmed</strong></h1>
                <h2 class="container" style="margin-left:200px;"><em>Thank you for shopping with us</em></h2>
                <h4 class="container" style="margin-left:250px;"><a href="../product/product.php" class="btn btn-primary">Click here</a>&nbsp;to purchase any other item</h4>
                 </div>
            </div>
        </div>
    </body> 
</html>