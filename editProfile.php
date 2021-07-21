<?php
session_start();
?>

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
      <a class="nav-link" href="usersProfile.php">Users Profile</a>
        

      <li class="nav-item">
        <a class="nav-link" href="SignIn.php">Donate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="SignIn.php">Log Out</a>
      </li>
    
    
    </form>
  </div>
</nav>

<section class ="my-5">
  <div class="py-5">

<!------ Include the above in your HEAD tag ---------->

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
                           <p>Please submit your information<p>
                           <a class="btn btn-info nav-success" type = "button" >Submit</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                  <section class = " about my-5">
                      <div class = " container text">   
      
          <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="btn btn-primary nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="navbar-nav ml-auto">
                               
                                    <a class="btn btn-info nav-info" type = "button" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Edit Profile</a>
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
                                                <label>Name : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="name" autocomplete= "off" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="email" autocomplete= "off" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date Of Brith : </label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="date" autocomplete= "off" placeholder="Date of Brith">
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
                                            <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender :</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type ="text" name ="gender" autocomplete= "off" placeholder="Gender">
                                            </div>
                                        </div >
                                        <thread>
  <th>Firstname </th>
  <th>Lastname </th>
  <th>Email </th>
  <th>Country</th>
  <th>Contact Number</th>
  <th>Profile Picture </th>
</thread>


<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");
mysqli_select_db($conn,'test');
$sex=$_SESSION['email'];
$sql = "SELECT * FROM registerdata WHERE email = '$sex'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
  // echo "". $row["firstname"]. " " . $row["lastname"]. " " . $row["email"]. " " . $row["country"]. " " . $row["phone"]. " " . $row["image"]."<br>"; 
 ?> 
<tr>
<td><?php echo $row['firstname']; ?> </td>
<td><?php echo $row['lastname']; ?> </td>
<td><?php echo $row['email']; ?> </td>
<td><?php echo $row['country']; ?> </td>
<td><?php echo $row['phone']; ?> </td>
<td><img src ="<?php echo $row['image']; ?>" width="70" height="70"> </td>
</tr>
</table>
</div>
<?php
  }
$conn->close();
?>
<thread>
  <th>Firstname </th>
  <th>Lastname </th>
  <th>Email </th>
  <th>Country</th>
  <th>Contact Number</th>
  <th>Profile Picture </th>
</thread>


<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");
mysqli_select_db($conn,'test');
$sex=$_SESSION['email'];
$sql = "SELECT * FROM registerdata WHERE email = '$sex'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
  // echo "". $row["firstname"]. " " . $row["lastname"]. " " . $row["email"]. " " . $row["country"]. " " . $row["phone"]. " " . $row["image"]."<br>"; 
 ?> 
<tr>
<td><?php echo $row['firstname']; ?> </td>
<td><?php echo $row['lastname']; ?> </td>
<td><?php echo $row['email']; ?> </td>
<td><?php echo $row['country']; ?> </td>
<td><?php echo $row['phone']; ?> </td>
<td><img src ="<?php echo $row['image']; ?>" width="70" height="70"> </td>
</tr>
</table>
</div>
<?php
  }
$conn->close();
?>
