<?php
 require '../includes/common.php';
 session_start();
 $regex_email="[/^[a-Z0-9-]+(\.[_A-Z0-9-]+)*@[A-Z0-9-9]+(\.[A-Z0-9-]+)*(\.[a-z]{2,3}$/";
 $email=mysqli_real_escape_string($con,$_POST['email']);
 $select_query="SELECT email FROM users WHERE users.email='$email'";
 $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
 //echo mysqli_num_rows($select_query_result);
if(mysqli_num_rows($select_query_result)>0)
 {
     echo "email already exists";
 }
 else
 {
   $name=mysqli_real_escape_string($con,$_POST['name']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $pwd=mysqli_real_escape_string($con,$_POST['pwd']);
   $contact=mysqli_real_escape_string($con,$_POST['cno']);
   $city=mysqli_real_escape_string($con,$_POST['city']);
   $address=mysqli_real_escape_string($con,$_POST['Address']);
   $insert_query="INSERT INTO users(name,email,password,contact,city,address) values('$name','$email','$pwd','$contact','$city','$address')";
    $insert_query_result=mysqli_query($con,$insert_query);
    $_SESSION['id']=mysqli_insert_id($con);
    $_SESSION['email']=$email;
    header('location: ../product/product.php');
 }
?>