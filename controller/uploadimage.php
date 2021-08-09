<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}
$mail = $_SESSION['email'];
mysqli_select_db($conn,'registrationform');
$image = $_FILES['file'];

$filename = $image['name'];
print_r($filename);
$fileerror = $image['error'];
$filetmp = $image['tmp_name'];


//12.jpg how to get extension
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png', 'jpg', 'jpeg');

if(in_array($filecheck, $fileextstored)){
    $destinationfile = 'upload/' .$filename;
    move_uploaded_file($filetmp,$destinationfile);
}



// $s = "select * from signup where email = '$mail'";


// $result = mysqli_query($conn, $s);
// $num = mysqli_num_rows($result);

$query = "update signup SET image = '$destinationfile' WHERE email = '$mail'";

mysqli_query($conn,$query);
header('location:../view/userProfile.php');

?>