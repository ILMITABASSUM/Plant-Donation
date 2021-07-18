<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}

mysqli_select_db($conn,'registerationform');

$email = $_POST['email'];
$password = $_POST['password'];
// echo '$email';
// echo '$password';
// $message = $_POST['message'];

$s = "select * from signup where email = '$email' && password = '$password' ";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
 $_SESSION['email'] = $email;
   header('location:Userhome.php');

}
else{
    header('location:signUp.php');
}

?>
