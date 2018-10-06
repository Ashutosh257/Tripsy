<?php
   //session_start();
   include 'connect.php';
?>
 
<!DOCTYPE html>
<html>
<head>
   <title></title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
      
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

                     echo "<li style='color: white;'>Welcome $str</li>";
                     echo "<li><a href='logout.php'>Logout</a></li>";
                   }
                 else{
                     
                     echo "<li><a href='login.php'>Login</a></li>";
                     echo "<li><a href='admin.php'>Admin</a></li>";
                 }
                 ?>
            </ul>
         </div>   
      </div>

</body>
</html>



