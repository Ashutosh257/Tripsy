<?php
  include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tours</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>

<div class="container-fluid">
      <div class="row">
        <div class='col-sm-1'>

        </div>
    <?php

    $query="SELECT * FROM p_info;";
    $result=mysqli_query($conn,$query) or die('failed'.mysql_error($conn));
    $str="";
    while($rows=mysqli_fetch_array($result)) {
    ?>
    
    
        <div class="col-sm-3">
          <div class='card my-card text-center'>
            <br>
            <image class='card-img-top my-card-image' src='<?php echo 'images/'.$rows['image']; ?>'>
            <div class='card-body'>
              <h5 class='card-title'>
                <a href='descr.php?pid=<?php echo ''.$rows['pid'];?>'>
                <?php echo "".$rows['name']; ?>
                </a>
              </h5>
              <p class='card-text'> <?php echo ''.$rows['descr']; ?> 
                <br> 
                <i class='fa fa-inr'></i> 
                <?php echo ''.$rows['cost'];  ?>
              </p>
            </div>
          </div>
        </div>

        <div class='col-sm-1'>
            
          </div>
        
        <?php  }
        
        ?>
      

</div>
</div>


</body>
</html>