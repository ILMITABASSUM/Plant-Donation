<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}
mysqli_select_db($conn,'registrationform');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$date = $_POST['date'];
$address = $_POST['address'];
$country = $_POST['country'];
$gender = $_POST['gender'];

$query = "insert into signup(username, email, password, date, address, country, gender)
values('$username','$email', '$password', '$date' , '$address', '$country', '$gender') ";




echo "$query";

mysqli_query($conn,$query);

 header('location:logIn.php');

?>
