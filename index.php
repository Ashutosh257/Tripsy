<!-- only once -->


<!DOCTYPE html>
<html>
<head>
   <title>Tripsy</title>
   <link rel="stylesheet" href="indexs.css">
   <link rel="stylesheet" type="text/css" href="w3.css">
   <style type="text/css">
      
      .login{
         /*color: white;
         border-radius: 4px;
         background-color: Transparent;
          background-repeat:no-repeat;
          border: none;
          cursor:pointer;
          overflow: hidden;
          outline:none;*/
         margin: 30% 0% 0% 50%;
         display: inline-block;
         padding: 10px 14px;
         color: #FFF;
         border: 1px solid #FFF;
         text-decoration: none;
         font-size: 24px;
         line-height: 120%;
         background-color: rgba(255,255,255, 0);
         border-radius: 4px;
         transition: background-color 300ms ease;
         cursor: pointer;
         text-align: center;
      }
            
      .login:hover{
          /*box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);*/
          background-color: rgba(255,255,255, 0.3);
         color: #FFF;
      }     
      


   </style>
</head>
<body>
   
   <nav>
      <ul class="topnav" id="dropdownClick">
      <li><a class="active" href="home.php">Home</a></li>
      <li><a href="tours.php">Tours</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About</a></li>
      <li class="topnav-right"><a href="login.php">Sign In</a></li>
      <li class="topnav-right"><a href="admin.php">Admin</a></li>
      </ul>
   </nav>
  
   <input type="submit" id="Login" value="EXPLORE NOW" class="login" onclick="window.location='home.php'">

</body>
</html>