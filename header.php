<?php
   include 'connect.php';
?>
 
<!DOCTYPE html>
<html>
<head>
   <title></title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      
</head>
<body>

      <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand my-logo me-2" href="index.php">
            <img src="./images/logo.svg" alt="./images/logo.png">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
            <li class="nav-item me-2">
               <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item me-2">
               <a class="nav-link" href="tours.php">Tours</a>
            </li>
            <li class="nav-item me-2">
               <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item me-2">
               <a class="nav-link" href="about.php">About Us</a>
            </li>
            <?php
            if(isset($_SESSION['uid'])){
                  $str=$_SESSION['username'];
                  echo "<li><a class='nav-link me-2' href='bookings.php'>My Bookings</a></li>";
            }
            ?>
            </ul>
         </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="navbar-nav">

            <?php
               
               if(isset($_SESSION['uid'])){
                  $str=$_SESSION['username'];
                  echo "<li class='nav-link me-2'>Welcome $str</li>";
                  echo "<li><a class='nav-link me-2' href='logout.php'>Logout</a></li>";
                  }
               else{
                  
                  echo "<li><a class='nav-link me-2' href='login.php'>Login</a></li>";
                  echo "<li><a class='nav-link me-2' href='admin.php'>Admin</a></li>";
               }
               ?>
            </ul>
          </div>
        </div>
      </nav>


</body>
</html>



