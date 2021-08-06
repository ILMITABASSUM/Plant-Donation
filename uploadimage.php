<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}
mysqli_select_db($conn,'registrationform');
if(isset($_POST['submit'])){
$file = $_FILES['file'];

$filename = $file['name'];
print_r($filename);
$fileerror = $file['error'];
$filetmp = $['tmp_name'];

//12.jpg how to get extension
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png', 'jpg', 'jpeg');

if(in_array($filecheck, $fileextstored)){
    $destinationfile = 'images/' .$filename;
    move_uploaded_file($filetmp,$destinationfile);
}



$s = "select * from signup where email = '$mail'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

$query = "update signup SET image = '$file' WHERE email = '$mail'";
VALUES ('$destinationfile')";
}

$query =  mysqli_query($conn,$q);
?>