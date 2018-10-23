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
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
      $str.= "<font size='4'><br><br><a href='descr.php?pid=".$rows['pid']."'>".$rows['name']."</a>";
      $str.= "<br><font size='4'><a>".$rows['descr']."</a>";
      $str.= "<br><font size='4'><a><i class='fa fa-inr'></i> ".$rows['cost']."</a>";
      $str.="</font></div>";
    }
    echo $str;
?>

</body>
</html>