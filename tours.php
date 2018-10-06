<?php
  include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tours</title>
  <style type="text/css">
    
    div.hello{
      float:left;
      width:25%;
      text-align:center;
     /* margin-top:8%;*/
      padding-bottom:30px;
    }

    img{
      width: 275px;
      height: 211px;
    }

  </style>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
  <div style="margin-top: 12%;">
    
  </div>

<?php

    
    $query="SELECT * FROM p_info;";
    $result=mysqli_query($conn,$query) or die('failed'.mysql_error($conn));
    $str="";
    while($rows=mysqli_fetch_array($result)) {
      $str.="<div class='hello thumbnail w3-hover-shadow w3-animate-zoom'>";
      $str.="<br><image src='images/".$rows['image']."'>";
      $str.= "<font size='4'><br><br><a>".$rows['name']."</a>";
      $str.= "<br><font size='4'><a>".$rows['descr']."</a>";
      $str.= "<br><font size='4'><a>".$rows['cost']."</a>";
      $str.="</font></div>";
    }
    echo $str;
?>
</body>
</html>