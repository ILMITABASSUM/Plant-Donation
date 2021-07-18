<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>SignUp Form</title>
      <link rel="stylesheet" type="text/css" href="view/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="bg-img">
         <div class="content">
            <header>SignUp Form</header>


            <form action="userinfo.php" method = "post">
            <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" name ="username" autocomplete= "off" required placeholder="Username">
               </div> 
               <div class="field space">
               <span class="fas fa-envelope-open-text"></span>
               <input type="email" name ="email" autocomplete= "off" required placeholder="Email">
            </div>
            <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="pwd" name="password" class="pass-key" required placeholder="Password">
                  <span class="show">SHOW</span>
               </div>
          
               <div class="field space">
                  <span class="fa fa-user"></span>
                  <input type="date" name="date" required placeholder="Date of birth">

               </div>
               <div class="field space">
                  <span class="fas fa-map-marker-alt"></span>
                  <input type="location" name="address" required placeholder="Address">

               </div>
               <div class="field space">
               <span class="fa fa-globe-asia"><i class = "glyphicon-glyphicon-chevron-down"></i></span>

                    <select name="country" class  = "form-control input-md" required placeholder="Country">
                    <option value="">Select Country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                
                    </select>   
                                      
               </div>
         <div class="field space">
                <span class="fas fa-venus-mars"></span>
                <select  class  = "form-control input-md" name="gender" required placeholder="Gender">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
                </select>                
                </div>


   
               <div class="field space">
                  <input type="submit" value="Submit">
               </div>
            </form>

        
          
            <div class="signup">
                <br>
                Already have an account!
               <a href="logIn.php">LogIn Now</a>
            </br>
            </div>
         </div>
      </div>
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
         
      </script>
    </form>
   </body>
</html>
