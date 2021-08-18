<?php 
    include_once 'includes/userHeader.php'
?>


    <h1 id="index-text"><?php if(isset($_SESSION['usersId'])){
        echo explode (" ", " ")[0];
    }else{
        header("location: index.php");
    } 
    ?> </h1>
    
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

   
    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

      

    

        <!-- Sidebar Widgets Column -->
      <?php include('includes/slidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>


<?php 
    include_once 'includes/footer.php'
    ?>