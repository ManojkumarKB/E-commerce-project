<?php
   include '../common.php';
   $user_id=$_SESSION['id'];
   $item_id=$_GET['id'];
   echo $user_id;
   echo $item_id;
   $delete_query="DELETE FROM users_items WHERE users_items.user_id='$user_id' AND users_items.item_id='$item_id'";
   $delete_query=mysqli_query($con,$delete_query);
  echo "successfully deleted";
   header("location:cart.php");
   ?>
