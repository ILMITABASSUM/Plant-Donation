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
            <form action="signUpAction.php" method = "post">
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
                  <input type="pwd" name="password" class="pass-key"   required placeholder="Password">
      

                  <span class="show">SHOW</span>
               </div>
               
               <div class="field space">
               <span class="fa fa-globe-asia"><i class = "glyphicon-glyphicon-chevron-down"></i></span>
                    <select name="country" class  = "form-control input-md" required placeholder="Country">
                    <option value="">Select Country</option>
                    <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="Antarctica">Antarctica</option>
        
                <option value="Argentina">Argentina</option>
            
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Bangladesh">Bangladesh</option>
               
                <option value="Belgium">Belgium</option>
               
                <option value="Bhutan">Bhutan</option>
               
                <option value="Brazil">Brazil</option>
                
                <option value="Cambodia">Cambodia</option>
           
                <option value="Canada">Canada</option>
               
                <option value="China">China</option>
                
                <option value="Egypt">Egypt</option>
               
                <option value="Finland">Finland</option>
                <option value="France">France</option>
               
                <option value="Germany">Germany</option>
               
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
              
                <option value="Hong Kong">Hong Kong</option>
                
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                
             
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
               
                <option value="Kuwait">Kuwait</option>
                
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
               
                <option value="Mexico">Mexico</option>
             
                <option value="Morocco">Morocco</option>
             
                <option value="Myanmar">Myanmar</option>
               
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
               
                <option value="New Zealand">New Zealand</option>
           
                <option value="Nigeria">Nigeria</option>
              
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
               
                <option value="Philippines">Philippines</option>
               
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
               
                <option value="Qatar">Qatar</option>
            
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian</option>
          
                <option value="Saudi Arabia">Saudi Arabia</option>
     
                <option value="Singapore">Singapore</option>
        
                <option value="South Africa">South Africa</option>
      
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
     
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
   
                <option value="Taiwan">Taiwan</option>
             
                <option value="Turkey">Turkey</option>
             
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
         
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>  

                
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
