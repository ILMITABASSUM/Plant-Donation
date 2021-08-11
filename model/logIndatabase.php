<?php

try{

$server = 'localhost';
$user = 'root';
$password = 'WhateverPassword';
$db = 'registrationform';

?>
    <h1 class="header">Please Login</h1>

    <?php flash('login') ?>

    <form method="post" action="./controllers/Users.php">
    <input type="hidden" name="type" value="login">
        <input type="text" name="name/email"  
        placeholder="Username/Email...">
        <input type="password" name="usersPwd" 
        placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
    </form>

    <div class="form-sub-msg"><a href="./reset-password.php">Forgotten Password?</a></div>
    
