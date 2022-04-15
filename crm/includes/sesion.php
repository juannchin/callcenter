<?php
   include('../config.php');
   session_start();
   
   $user_check = $_SESSION['name'];
   
   $ses_sql = mysqli_query($conn,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['user_name'])){
      header("location:login.php");
      die();
   }
?>