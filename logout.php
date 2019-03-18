<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("location: ../index/index.php");
}
session_destroy();
header("location:../index/index.php");
?>