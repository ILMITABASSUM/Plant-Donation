<!DOCTYPE html>
<html>
<head>
     <title></title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="view/styles.css">
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
        <a class="nav-link" href="SignIn.php">Donate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
    
    
    </form>
  </div>
</nav>

<section class ="my-5">
  <div class="py-5">

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


<form action="editProfileAction.php" method = "post">

<div class="container emp-profile">
<p> <label><h1 style ="text-align:center;">Edit Your Profile</h1>  </p>
            <form method="post">
                <div class="row">
                    <div class="call-sm-12 col-md-4 col-lg-4 col-12">
                        <div class="profile-img">
                        <img class="card-img-top"src="images/3.PNG" alt="">
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                           <p>Tell something our yourself<p>
                           <hr>
                               <center>
                                   <textarea rows = "4" cols ="30" onkeypress = "auto_grow(this);" onkeyup="auto_grow(this);"
                                   style="margin-top:20px; resize:none; overflow: hidden;"></textarea>
                                </center>
<script type = "text/javascript">
function auto_grow(element){
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";

}
</script>
                           <a class="btn btn-info nav-success" type = "button" >Submit</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                  <section class = " about my-5">
                      <div class = " container text">   
      
          <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                <a class="btn btn-success nav-success" type = "button" href="userProfile.php">About</a>
                                </li>
                              
          </ul>
            <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                            </div>
                                                <label> </label>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="username" autocomplete= "off" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="firstName" autocomplete= "off" placeholder="First Name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="lastName" autocomplete= "off" placeholder="Last Name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Contact No. : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="phone" name ="contact" autocomplete= "off" placeholder="Contact No.">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date Of Brith : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="date" name ="dob" autocomplete= "off" placeholder="Date of Brith">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="address" autocomplete= "off" placeholder="Address">
                                            </div>
                                                </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <label>Country : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="country" autocomplete= "off" placeholder="Country">
                                            </div>
                                        </div>
                                           
                                     <br>
                               

                                                <a class="btn btn-dark float-right" type = "button" >Submit</a>
                                                </form>