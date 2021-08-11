<?php 
    include_once 'Userheader.php'
?>



<!DOCTYPE html>
<html>




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
  

  <div class="col-sm-6 col-md-12 col-lg-12 col-12">
<div class="container emp-profile">
<p> <label><h1 style ="text-align:center;">Edit Your Profile</h1>  </p>
   
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
                                     
                                       
                            <div class="col-sm-6 col-md-12 col-lg-12 col-12">
<div class="container emp-profile">

<p h1 style ="text-align:center;">
  <span class="cardSpan">

<form action="../controller/editProfileAction.php" method = "post">

<aside class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><h6> Username :</h6></label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="username" autocomplete= "off" placeholder="Username" required>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><h6>First Name:</h6></label>
                                            </div>
                                      
                                            <div class="col-md-6">
                                            <input type ="text" name ="firstName" autocomplete= "off" placeholder="First Name" required>
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><h6>Last Name:</h6></label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="lastName" autocomplete= "off" placeholder="Last Name" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><h6>Contact No. : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="phone" name ="contact" autocomplete= "off" placeholder="Contact No." required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><h6>Date Of Brith: </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="date" name ="dob" autocomplete= "off" placeholder="Date of Brith" required>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><h6>Country: </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="country" autocomplete= "off" placeholder="Country" required>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><h6>Address: </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="address" autocomplete= "off" placeholder="Address" required>
                                            </div>
                                        </div>
     <br>
     <div class="wrapper">
                                  
                                    <input class="btn btn-dark" type="submit" value="Submit">
                                    </div>


</form>
</aside>
<br>
<br>
<div class="col-sm-6 col-md-12 col-lg-12 col-12">
<p h1 style ="text-align:center;">
  <span class="cardSpan">
<aside class="col-sm-12">
<h6> Upload your Picture </h6>
<form action="../controller/uploadimage.php" method = "post" class="was-validated"  enctype="multipart/form-data">
<div class="col-md-6">
<input type="file" name="file"  autocomplete= "off" class="btn btn-success" type="submit" value="Submit" required>
<br>
<br>
<div class="wrapper">
<input class="btn btn-warning" type="submit" value="Submit">
</div>

</div>
</div>
</form>
</aside>
<br>
<br>
<div class="col-sm-6 col-md-12 col-lg-12 col-12">
<form action="../controller/descriptionAction.php" method = "post">
  <p h1 style ="text-align:center;">
  <span class="cardSpan">
<aside class="col-sm-12">
                           <div class="row">
                           <div class="col-md-6">
                               <p><h6 style ="text-align:left;">Tell Something About Yourself!<p>
                               </div>
                                          
                               <div class ="count-container">
                             
                             
                                    <div class= "input-group">
                               <textarea type ="text" class ="input-control count-chars" id = "description" rows ="5" cols = "30" wrap = "on" maxlength = "101" data-max-chars ="101" name ="description" autocomplete= "off" placeholder="Your Story..."></textarea>
                                <div class = "input-msg text-red"></div>
                                </div>
                                <br>

                      
                              
                                 <br>
                                 <div class="wrapper">
                            <input class="btn btn-info" type="submit" value="Submit">
                            </div>
                        </form>







                        <script src="script.js"></script>
</body>