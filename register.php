<?php  
  //session_start();  
  include 'connect.php';

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="indexs.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="w3-display-middle" style="width: 40%;">
  <div class="w3-container w3-text-white" id="urname" style="font-size: 35px">New user...
  </div>

  <form name="f2" method="POST" class="w3-container w3-animate-opacity w3-round-large w3-card-4">
    <p><input type="text" name="username" id="username" style="height:3em;" class="w3-round-large w3-input " required placeholder="USERNAME"></p>
    <p><input type="email" name="email" id="email" style="height:3em;" class="w3-round-large w3-input " required placeholder="EMAIL"></p>
    <p><input type="password" name="password" style="height:3em;" class="w3-round-large w3-input" required placeholder="PASSWORD"></p>
    <p class="w3-center"><input type="submit" name="submit" value="Sign Up" class="w3-btn w3-text-white  w3-border w3-round" style="font-size: 25px"></p>
  </form>
  </div>

<?php
   if(isset($_POST['submit'])) {
    // if (true) {
    $uname = $_POST['username'];  
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query="INSERT INTO user_info (name,email,password) VALUES ('$uname','$email','$pass');";
    if(!mysqli_query($conn,$query))
    {
      echo "failed";
    }
    else
    {
      header("Location:login.php");
    }
  }
?>

</body>
</html> 