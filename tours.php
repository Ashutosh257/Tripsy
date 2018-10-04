<!DOCTYPE html>
<html>
<head>
	<title>Mobiles</title>
</head>
<body>

<?php
include "header.php";
include "connect.php";
    
    $query="SELECT * FROM p_info;";
    $result=mysqli_query($conn,$query) or die('failed'.mysql_error($conn));
    $str="";
    while($rows=mysqli_fetch_assoc($result)){
     //echo $_SESSION['uid'];
      $str.="<div class='thumbnail w3-hover-shadow w3-animate-zoom' style='float:left;width:25%;text-align:center;margin:8%;padding-bottom:30px'>";
      $str.="<image src='images/".$rows['image']."' style='width:300px; height:250px;'/><br>";
      $str.= "<font size='4'>".$rows['name']."<br>";
      $str.= "<font size='4'>".$rows['descr']."<br>";
      $str.= "<font size='4'>".$rows['cost'];
      $str.="</font></div>";
    }
    echo $str;
?>
</body>
</html>