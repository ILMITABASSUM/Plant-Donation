<!DOCTYPE html>
<html>
<head>
     <title></title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="view/buystyles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com"> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body>
  
<!-- navBar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="welcome.php">Save Plant Save Planet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="userhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="userProfile.php">User Profile</a>
        

    
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
      </div>
</nav>


<!------ Include the above in your HEAD tag ---------->
<?php
if(isset($_POST['email']) == true &&  ($_POST['email']) == false){
$email = $_POST['email'];
if(filer_var( $email, FILTER_VALIDATE_EMAIL) ==true){
echo ' That is a valid email address';
}else{
echo' Not a valid Email';
}
}
?>

<p> <label><h5 style ="text-align:center;">BUY COINS</h5>  </p>
            <form method="post">
             


</p>   

<div class="container emp-profile">     

<p h1 style ="text-align:center;">
  <span class="cardSpan">
  <img width = "30" height = "30" src="images/pie.svg" alt="..." />  
    <span style = "text-align: left" class="text">10 COINS         :</span>
    <button id="hello"><h5><a href="donate.php" >10 Taka</h5></a></button>

  </span>
</p>
<br>
<p h1 style ="text-align:center;">
  <span class="cardSpan">
    <span class="icon">
    <img width = "30" height = "30" src="images/pie.svg" alt="..." />  
    </span>
    <span style = "text-align: left" class="text">50 COINS        :</span>
    <button id="hello"><h5><a href="donate.php" >45 Taka </h5></button></a>

  </span>
</p>
  <br>
<p h1 style ="text-align:center;">
  <span class="cardSpan">
    <span class="icon">
    <img width = "30" height = "30" src="images/pie.svg" alt="..." />  
    </span>
    <span style = "text-align: left" class="text">100 COINS        :</span>
    <button id="hello"><h5> <a href="donate.php" > 90 Taka </a> </h5></button>

  </span>
</p>
  <br>
  <p h1 style ="text-align:center;">
  <span class="cardSpan">
    <span class="icon">
    <img width = "30" height = "30" src="images/pie.svg" alt="..." /> 
    </span>
    <span style = "text-align: left" class="text">250 COINS        :</span>
    <button id="hello"><h5> <a href="donate.php" > 220 Taka </a> </h5></button>

  </span>
</p>
  <br>
<p h1 style ="text-align:center;">
  <span class="cardSpan">
    <span class="icon">
    <img width = "30" height = "30" src="images/pie.svg" alt="..." /> 
    </span>
    <span style = "text-align: left" class="text">500 COINS        :</span>
    <button id="hello"><h5> <a href="donate.php" >450 Taka </a></h5></button> 

  </span>
  
</p>

</p>