<?php

try{

$server = 'localhost';
$user = 'root';
$password = 'WhateverPassword';
$db = 'registrationform';


$dbcon = new PDO("mysql:host=$server; dbname=$db",$user,$password);

$insertquery = "insert into purchase(email,balance,	modules	paymentMethod	phoneNumber	expirationDate

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