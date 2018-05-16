<?php

 require('DB.php');
 session_start();
 $user=$_POST['userID'];
 $_SESSION['userID']=$user;
 $sql="SELECT * FROM PreTest WHERE UserID=$user LIMIT 1";
 $result=mysqli_query($connection,$sql);
 if(mysqli_num_rows($result)>0)
 {
     header("location:post_page1.php");
 }
 else
 {
     header("location:userNotFound.php");
 }
 ?>
