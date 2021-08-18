<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>

    <h1 class="header">Please Signup</h1>
    <div class="content">
    <?php flash('register') ?>

    <form method="post" action="./controllers/Users.php">
        <input type="hidden" name="type" value="register">
        <input type="text" name="usersName" 
        placeholder="Full name...">
        <input type="text" name="usersEmail" 
        placeholder="Email...">
        <input type="text" name="usersUid" 
        placeholder="Username...">
      
         <select name="usersCountry" class=" form-control" required placeholder="Country">
            <option value="">Select Country</option>
            <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="Antarctica">Antarctica</option>
                    </select>   
            
                
                <select  name  = "usersGender" class=" form-control" required placeholder="Gender">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
                </select>                
              
      

               
        <input type="password" name="usersPwd" 
        placeholder="Password...">
        <input type="password" name="pwdRepeat" 
        placeholder="Repeat password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    
<?php 
    include_once 'footer.php'
?>