<?php
session_start();
$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection Successful";
}else{
    echo "No Connection";
}
$mail = $_SESSION['email'];
mysqli_select_db($conn,'registrationform');
$username = $_POST['username'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$phoneNumber = $_POST['contact'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$country = $_POST['country'];


$query = "update signup SET username = '$username', firstName = '$firstName', lastName = '$lastName', phoneNumber ='$phoneNumber', dob = '$dob', address = '$address', country = '$country' WHERE email = '$mail'";

echo "$query";

mysqli_query($conn,$query);

header('location:../view/userProfile.php');


?>
