<?php
 require '../includes/common.php';
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
            Cart
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
    include '../includes/header.php';
    $id=$_SESSION['id'];
    $select_query="SELECT u.id,u.email,p.name,p.price,p.pid FROM users_items up INNER JOIN users u ON up.user_id=u.id INNER JOIN items p ON p.pid=up.item_id WHERE u.id='$id' AND up.status='Added to cart'";
    $select_query_result=mysqli_query($con,$select_query);
    echo mysqli_num_rows($select_query_result);
    if(mysqli_num_rows($select_query_result)==0)
    { ?>
       <h1 style="margin-top:150px; margin-bottom:75px;"><center>
       <?php 
        echo "ADD THE ITEMS INTO THE "; ?><a href="../product/product.php" class="glyphicon glyphicon-shopping-cart"></a> <?php echo "CART FIRST"; ?></center>
        </h1>
   <?php }
    else
    { 
        $sum=0; ?>
             <div class="container-fluid">
        <center>
            <table class="table table-responsive table-hover table-bordered" style="margin-top:20px;">
                <tbody>
                    <tr><th>ItemNumber </th> <th>Item Name</th> <th>Price </th></tr>
                    <?php 
                    while($row=mysqli_fetch_array($select_query_result))
                    {
            $sum=$sum+$row['price'];
           $items_id=array();
            array_push($items_id,$row['id']);?>
                    <tr><td><?php echo $row['pid'] ?></td> <td> <a href='cart-remove.php?id=<?php echo  $row['pid'] ?>' class='remove_item_link'> Remove</a> &nbsp;&nbsp; <?php echo $row['name'] ?></td> <td><?php echo $row['price']?></td></tr><?php } ?>
            <br><br><tr><td></td> <td>Total</td> <td>Rs:<?php echo $sum ?></td><td><br>
                </tbody>
            </table><a href="../success/success.php" class="btn btn-primary btn-block" >Confirm Order</a></td></tr>
        </center>                               
        </div>
  <?php  } ?>
        <?php include '../includes/footer.php';
        ?>
</body>
</html>