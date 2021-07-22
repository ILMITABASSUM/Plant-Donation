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
      <a class="nav-link" href="editProfile.php">Edit Profile</a>
        

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
<p> <label><h1 style ="text-align:center;">My Profile</h1>  </p>
            <form method="post">
                <div class="row">
                    <div class="call-sm-12 col-md-4 col-lg-4 col-12">
                        <div class="profile-img">
                        <img class="card-img-top"src="images/3.PNG" alt="">
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                           <p><b> Tell us something about Yourself </b></p>
                           <p><i>"Hi! I am a conservationist! I am joining to donate and be a member of this community.."</i></p>
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
                               
                                    <a class="btn btn-info nav-info" type = "button" href="editProfile.php">Edit Profile</a>
                                </li>
</ul>
            <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            
                                           
                               


  <br>
  
    
  <thread>
  <th>Username : </th> <br>
  <th>Name :   </th> <br>
  <th>Email :   </th> <br>
  <th>Date Of Brith   : </th> <br>
  <th>Address   :   </th> <br>
  <th> Country :   </th> <br>
  <th> Gender :   </th> <br>
  <th> City  :   </th> <br>
  <th> Phone Number : </th>
</thread>


<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");
mysqli_select_db($conn,'registrationform');
$sex=$_SESSION['email'];
$sql = "SELECT * FROM signup WHERE email = '$sex'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
//  echo "Username : ".  $row["username"]. "<br> Email : " . $row["email"]. "Date of Birth : " .$row["date"]. "<br> Country :" . $row["country"]. "Address :" . $row["address"]. "Gender :" . $row["gender"]."<br>"; 
 ?> 
<tr>
<div class="col-md-6">
<td> <?php echo $row['username']; ?> </td> <br>
<td> <?php echo $row['firstName']; ?> </td> <br>
<td><?php echo $row['email']; ?> </td> <br>
<td><?php echo $row['dob']; ?> </td> <br>
<td><?php echo $row['address']; ?> </td> <br>
<td><?php echo $row['country']; ?> </td> <br>
<td><?php echo $row['gender']; ?> </td> <br>
<td><?php echo $row['address']; ?> </td> <br>
<td><?php echo $row['phoneNumber']; ?> </td> <br>

</tr>
</table>
</div>
<?php
  }
$conn->close();
?>

