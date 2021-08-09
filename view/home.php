<?php 
    include_once 'header.php'
?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="images/1.png" alt="pink" width="1500" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/2.png" alt="sam" width="1500" height="500">
</div>
</div>
     
    <!-- <div class="carousel-item">
      <img src="images/mesu.jpg" alt="York" width="1000" height="100">
    </div>
    <div class="carousel-item">
      <img src="images/Ahsan.jpg" alt="New York" width="1000" height="100">
    </div>
  </div> -->
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- NewFeed -->


<!-- Form Creation -->

<section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> Contact Us </h3>
</div> 
<div class ="w-50 m-auto">

<form action="userinfo.php" method = "post">
<div class = "form-group">
<label for = "user">UserName</label>
<input type ="text" name ="user" autocomplete= "off" class="form-control">
</input>
<div class="form-row">
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type ="text" name ="email" autocomplete= "off" class="form-control">
    </div>



    <form class="form-inline">
  <div class="form-group">
    <label>Password</label>
    <input type="txt" name="pass" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
    <small id="passwordHelpInline" class="text-muted">
      <p>Must be 8-20 characters long.</p>
    </small>
  </div>
</form>

    <div class = "form-group">
<label>Comment</label>

<input type="text" name ="comment" autocomplete= "off"  placeholder="Please give us feedback" class="form-control" > </input>
<small id="CommentHelpInline" class="text-muted">
No Hate speech</small>
</div>
</div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2" >
        Agree to terms and conditions
        <button class="btn btn-success" type="submit">Submit form</button>
      </label>
    </div>



</div>
</form>
</div>
</section>

