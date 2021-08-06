<!-- <?php 
session_start();

$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}

mysqli_select_db($conn,'registrationform');

$email = mysqli_real_escape_string($connect,$_POST['email']);
$password = mysqli_real_escape_string($connect,$_POST['password']);
$password = md5($password);

// echo '$email';
// echo '$password';
// $message = $_POST['message'];

$s = "select * from signup where email = '$email' && password = '$password' ";
$result = mysqli_query($conn, $s);
if(mysqli_num_rows($result) > 0)
{
 $_SESSION['email'] = $email;
   header('location:Userhome.php');

}

else{
    echo '<script>alert("Wrong User Details")</script>';
   
}

?>
 -->

 <?php 
session_start();

$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}

mysqli_select_db($conn,'registrationform');

$email = $_POST['email'];
$password = $_POST['password'];
// echo '$email';
// echo '$password';
// $message = $_POST['message'];

$s = "select * from signup where email = '$email' && password = '$password' ";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
 $_SESSION['email'] = $email;
   header('location:Userhome.php');

}
else{
    header('location:signUp.php');
}

?>






