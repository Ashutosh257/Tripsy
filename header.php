<?php
   //session_start();
   include 'connect.php';
?>
 
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="css/stylehome.css">
      <link rel="stylesheet" type="text/css" href="css/styles.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
</head>
<body>
   <div class="mainheader">
         <div class="logo1">
            <img src="images/logo1.png" >
         </div>
         <div class="title">
            <h1>TRIPSY...</h1><h2>TRAVEL & TOURISM</h2>
         </div>
         <div class="menu">
            <ul style="margin-right: -6%;">
               <li><a href="home.php">Home</a></li>
               <li><a href="tours.php">Tours</a></li>
               <li><a href="about.php">About Us</a></li>
               <li><a href="contact.php">Contact Us</a></li>
               <span style="margin-left: 15px;"></span>
               <?php
                  
                 if(isset($_SESSION['uid'])){
                     $str=$_SESSION['username'];
                     echo "<li><a>Welcome $str</a>";
                     echo "<li><a href='logout.php'><span class='glyphicon glyphicon-user'></span> Logout</a></li>";
                   }
                 else{
                     
                     echo "<li><a href='login.php'><span class='glyphicon glyphicon-user'></span> Login</a></li>";
                 }
                     
               ?>
          
               <li><a href="admin.php">Admin</a></li>
            </ul>
         </div>   
      </div>

</body>
</html>



