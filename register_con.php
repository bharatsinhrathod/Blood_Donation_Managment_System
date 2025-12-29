<?php

include "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$profile = $_POST['image'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['blood-group'];
$password = $_POST['password'];



$q="insert into users(username,u_email,u_number,u_address,u_profile,gender,u_bloodgroup,u_password) 
    values('$name','$email','$number','$address','$profile','$gender','$bloodgroup','$password')";

if(mysqli_query($con,$q)){
    header("Location:login.php");

}else{
     echo "fail";
}