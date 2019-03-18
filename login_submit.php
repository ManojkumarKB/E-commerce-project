<?php
  include '../includes/common.php';
  session_start();
 $email=mysqli_real_escape_string($con,$_POST['email']);
 $pwd=mysqli_real_escape_string($con,$_POST['pwd']);
 $spwd=md5($pwd);
 $select_query="SELECT email,id FROM users";
 $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)==0)
{
     echo "There is no users";
}
else{
     while($row=mysqli_fetch_array($select_query_result))
     {
       {
    if((strcmp($row['email'],$email)==0))
     {
      $_SESSION['email']=$row['email'];
     $_SESSION['id']=$row['id'];
     echo $_SESSION['id'];
       header('location: ../product\product.php');
     }
    }
     }
}
?>