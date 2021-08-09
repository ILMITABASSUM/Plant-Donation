<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection Successful";
}else{
    echo "No Connection";
}
mysqli_select_db($conn,'registrationform');
$username = $_POST['username'];
$email =$_POST['email'];
$password = $_POST['password'];

$country = $_POST['country'];
$gender = $_POST['gender'];



$query = "insert into signup(username, email, password,  country, gender)
values('$username','$email', '$password', '$country', '$gender') ";


 echo "$query";

 mysqli_query($conn,$query);

 header('location:../view/logIn.php');

?>
