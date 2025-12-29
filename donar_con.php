<?php

include "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];

$profile = "images/" . $_FILES['d_profile']['name'];
move_uploaded_file($_FILES['d_profile']['tmp_name'],$profile);

$gender = $_POST['gender'];
$bloodgroup = $_POST['blood-group'];
$password = $_POST['password'];



$q="insert into donars(donar_name,donar_email,donar_no,donar_address,d_profile,d_gender,donar_bloodgroup,d_password) 
    values('$name','$email','$number','$address','$profile','$gender','$bloodgroup','$password')";

if(mysqli_query($con,$q)){
    header("Location:admin-home.php");

}else{
     echo "fail";
}