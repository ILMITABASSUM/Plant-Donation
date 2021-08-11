<?php

try{

$server = 'localhost';
$user = 'root';
$password = 'WhateverPassword';
$db = 'registrationform';


$dbcon = new PDO("mysql:host=$server; dbname=$db",$user,$password);

$username = $_POST['username'];
$email =$_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$gender = $_POST['gender'];


$insertquery = "insert into signup(username, email, password,  country, gender)
values('$username','$email', '$password', '$country', '$gender') ";

$dbcon->query($insertquery);

}catch(PDOException $e){

    echo 'Error:' .$e ->getMessage();
}


if($dbcon){
    echo "connection done";
}
else{
    echo " no connection done"; 
}

?>