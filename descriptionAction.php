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
$description = $_POST['description'];


$query = "update signup SET description = '$description' WHERE email = '$mail'";

echo "$query";

mysqli_query($conn,$query);

header('location:userProfile.php');


?>