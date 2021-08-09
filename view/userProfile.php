<?php 
    include_once 'userheader.php'
?>


<section class ="my-5">
  <div class="py-5">



<div class="container emp-profile">
<div class="col-sm-6 col-md-12 col-lg-12 col-12">
<p> <label><h1 style ="text-align:center;">My Profile</h1>  </p>
            <form method="post">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                        <div class="profile-img">
                        <?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");
mysqli_select_db($conn,'registrationform');
$mail=$_SESSION['email'];
$sql = "SELECT * FROM signup WHERE email = '$mail'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
 ?> 
  <img class="card-img-top"src="<?php echo $row['image']; ?>" alt="">
<?php
  }
  $conn->close();
?>

<div>
  
</div>

  <p><b> Tell us something about Yourself </b></p>
<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");
mysqli_select_db($conn,'registrationform');
$mail=$_SESSION['email'];
$sql = "SELECT * FROM signup WHERE email = '$mail'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
 ?> 
<p><i><?php echo $row['description']; ?> </i></p>
<?php
  }
  $conn->close();
?>
  
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
  <th>First Name :   </th> <br>
  <th>Last Name :   </th> <br>
  <th>Email :   </th> <br>
  <th>Date Of Brith   : </th> <br>
  <th> Country :   </th> <br>
  <th> Gender :   </th> <br>
  <th> City  :   </th> <br>
  <th> Phone Number : </th>

 
</thread>


<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");
mysqli_select_db($conn,'registrationform');
$mail=$_SESSION['email'];
$sql = "SELECT * FROM signup WHERE email = '$mail'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
 ?> 
<tr>

<td> <h7 style ="text-align:right;"><?php echo $row['username']; ?> </td> <br>
<td> <?php echo $row['firstName']; ?> </td> <br>
<td> <?php echo $row['lastName']; ?> </td> <br>
<td><?php echo $row['email']; ?> </td> <br>
<td><?php echo $row['dob']; ?></td> <br>
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