<!-- only once -->
<?php
  include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">
   <title>Tripsy</title>
   <link rel="stylesheet" href="indexs.css">
   <link rel="stylesheet" type="text/css" href="w3.css">
   <link rel="stylesheet" type="text/css" href="css/front.css">
   <style type="text/css">
     .des{
        display: block;
        padding: 14px;
        font-size: 18px;
     }
   </style>
</head>
<body>
     
   <nav>
      <ul class="topnav" id="dropdownClick">
      <li><a class="active" href="home.php">Home</a></li>
      <li><a href="tours.php">Tours</a></li>
      <li><a href="Gallery.php">Gallery</a></li>    
      <!-- <li><a href="tours.php">Tours</a></li> -->
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About</a></li>
      <?php
                  
                 if(isset($_SESSION['uid'])){
                     $str=$_SESSION['username'];
                     echo "<li><a href='bookings.php'>Bookings</a></li>";
                     echo "<span style='margin-left: 15px;'></span>";
                     echo "<li class='topnav-right'><a href='logout.php'>Logout</a></li>";
                     echo "<li class='des topnav-right' style='color: white;'>Welcome $str</li>";
                     
                   }
                 else{
                     
                    echo '<li class="topnav-right"><a href="login.php">Sign In</a></li>';
                    echo '<li class="topnav-right"><a href="admin.php">Admin</a></li>';
                 }
                 ?>
      
      </ul>
   </nav>
   

<div class="container-fluid">
  <div class="frontimg row">
     <div class="column col-sm-12">
       <img class="img-fluid" src="images/logo1.png">
     </div>
     <div class="tripsy row">
      <div class="col-sm-12">
       <h1><b>TRIPSY</b></h1>
       <h3><b>TRAVEL & TOURISM</b></h3>
     </div>
     </div>
     
   </div>
   <div class="btn">
    <input type="submit" id="Login" value="EXPLORE NOW" class="login" onclick="window.location='tours.php'">
  </div>
</div>
   
   
   
  
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="Bootstrap/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

</body>
</html>