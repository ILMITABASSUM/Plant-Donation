<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
<h1> Welcome </h1>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Save Plant Save Planet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Userhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
        
      </li> -->
      <!-- <li class="nav-item">
      <a class="nav-link" href="Services.php">Services</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="signUp.php">SignIn</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="AccountUpdate.php">Account Settings</a>
     </li>
        </a>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">LogOut</a>
     </li>

        </a>
        </ul>
    </form>
  </div>
</nav>
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
      <img src="images/donate.PNG" alt="pink" width="1500" height="500">
    </div>
    <div class="carousel-item active">
      <img src="images/3.PNG" alt="pink" width="2500" height="500">
    </div>
</div>

<div class="jumbotron">
  <h1>Save A Plant</h1>
  
  <div class ="container">
  <section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> Payments </h3>
<br>
<form action="buy.php" method = "post" class="was-validated">

<div class="form-row">
  <div class="form-group col-md-6">
   <h4> <label for="Package">Payment Method</label> </h4>
    <span style="color: red !important; display: inline; float: none;"></span>
    <select name="method" class="form-control" required>
                <option value=""></option>
                <option value="PayPal">Paypal</option>
                <option value="Visa">Visa</option>
                <option value="Bkash">Bkash</option>
                <option value="Nagad">Nagad</option>               
      </select>                
  </div>



    <form class="form-inline">
    <div class="form-group col-md-6">
  <div class="form-group">
  <h4>  <label>Enter Payment Code/Number</label> </h4>
   <input type="txt" name="code" class="form-control mx-sm-2" autocomplete= "off" required>
    <div class="invalid-feedback">Please fill out this field.</div>
 </div>
</div>
</div>



<div class="form-group col-md-6">
   <h4> <label>Select Package</label></h4>
    <span style="color: red !important; display: inline; float: none;"></span>
    <select name="package" class="form-control" required>
                <option value=""></option>
                <option value="package1">Package 1</option>
                <option value="Package2">Package 2</option>
                <option value="Package3">Package 3</option>
                <option value="Package4">Package 4</option>
                <option value="Package5">Package 5</option>
                <option value="Package6">Package 6</option>
               
    </select>                  
</div>

<div class="form-group col-md-6">
<h4> <label>Select Date Of Your Journey</label> </h4>
 

   <input type="date" name="date" class="form-control mx-sm-2" width="800px" height="130px" autocomplete= "off" required>
    <div class="invalid-feedback">Please fill out this field.</div>
 </div>

<!-- <div class="container" width="800px" height="130px">

   <h2> <label>Select Date Of Your Journey</label></h2>
   <p>Start Event</p>

    <h1> <input id="date" width="500" /> </h1>
    <script>
        $('#date').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script> -->

        <button class="btn btn-success" type="submit" style="float: right;"><h1>Confirm Package!</h1></button> 
        </div>
      </label>
    </div>
    </container>

</div>
</div>
</div>
</div>
</div>
</section>

</body>
</html>

