<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="view/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

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
</li>


      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
      </div>
</nav>
<br>
<br>
<br>
<div class="container">


<aside class="col-sm-12">
	<p align = center ><img src="images/TK1.png" height = 100%,  width = 50% ></p>


  
<article class="card">
<div class="card-body p-5">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" href="donate.php">
		<i class="fa fa-credit-card"></i> Credit Card</a></li>
	<li class="nav-item">
		<a class="btn btn-success nav-success" data-toggle="pill">
		<i class="fab fa-paypal nav-info"></i>  Paypal</a></li>
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" href="bkash.php">
		<img width = "50" height = "30" src="images/bkash.svg" alt="..." />    Bkash</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">


<div class="form-group">

<div class="form-group">
<label for="cardNumber">Card number</label>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text"><i class="fa fa-credit-card"></i></span>
	</div>
	<input type="text" class="form-control" name="cardNumber" placeholder="">
</div> 
</div> 

<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <label><span class="hidden-xs">Expiration</span> </label>
        	<div class="form-inline">
        		<select class="form-control" style="width:45%">
				  <option>MM</option>
				  <option>01 - January</option>
				  <option>02 - February</option>
				  <option>03 - March</option>
				  <option>04 - April</option>
				  <option>05 - May</option>
				  <option>06 - June</option>
				  <option>07 - July</option>
				  <option>08 - August</option>
				  <option>09 - September</option>
				  <option>10 - October</option>
				  <option>11 - November</option>
				  <option>12 - December</option>
				</select>
	            <span style="width:10%; text-align: center"> / </span>
	            <select class="form-control" style="width:45%">
				  <option>YY</option>
				  <option>2021</option>
				  <option>2020</option>
				  <option>2019</option>
				  <option>2018</option>
				</select>
        	</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
            <input class="form-control" required="" type="text">
        </div> 
    </div>
</div> 
<button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
</form>
</div> 
</article> 