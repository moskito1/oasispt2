<?php
 
 session_start();
 include "dbconnection.php";
 if(isset($_POST['update']))
 {
    $username=$_SESSION['username'];
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $select= "select * from userinfo where username ='$username'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['username'];
    if($res === $username)
    {
   
       $update = "update userinfo set firstname='$fname',lastname='$lname',email='$email', useraddress='$address', contactno='$contact' where username='$username'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:profile.php');
       }
       else
       {
        
       }
    }
    else
    {
    }
 }
?>