<?php
include '../includes/common.php';
session_start();
if(!isset($_SESSION['id']))
{
    header("location:../index/index.php");
}
$opwd=$_POST['opwd'];
$npwd=$_POST['npwd'];
$cnpwd=$_POST['cnpwd'];
if(strlen($cnpwd)!=strlen($npwd))
{
    echo "password is incorrect";
}
$id=$_SESSION['id'];
$select_query="SELECT password FROM users where users.id='$id'";
$select_query_result=mysqli_query($con,$select_query);
$row=mysqli_fetch_array($select_query_result);
if(strcmp($row['password'],$opwd)==0)
{
    $update_query="UPDATE users SET users.password='$npwd' where users.password='$opwd'";
    $update_query_result=mysqli_query($con,$update_query);
    session_destroy();
    header ("location:../login/login.php");
}
else
{
    echo "Password Incorrect";
  //  header("location:setting.php");
}
?>