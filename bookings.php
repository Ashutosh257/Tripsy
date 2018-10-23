<?php
  include "header.php";
  $uid=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tours</title>
  <style type="text/css">
    .des{
      margin: 3%;
    }
  
  </style>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="w3.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body>
  <div style="margin-top: 12%;">
    
  </div>
              <div id="products_box"><br>

                
            
           <form action="bookings.php" method="post" enctype="multipart/form-data">
            
              <table width="740" align="center" bgcolor="#0099CC">
                
                  <tr align="left">
                      <td><b>Remove<b></td>
                        <td><b>Package(s)</b></td>
                        <!-- <td><b>Quantity</b></td> -->
                        <td><b>Total Price</b></td>
                    </tr>
                    
      <?php 
      //$ip_add = getRealIpAddr();
     
        $total = 0;
        
        $sel_price = "select * from booking where uid='$uid'";
        
        $run_price = mysqli_query($conn, $sel_price); 
        
        while ($record=mysqli_fetch_array($run_price)){
          
          $pro_id = $record['pid'];
          
          $pro_price = "select * from p_info where pid='$pro_id'";
          
          $run_pro_price = mysqli_query($conn,$pro_price); 
          
          while($p_price=mysqli_fetch_array($run_pro_price)){
            
            $product_price = array($p_price['cost']);
            $product_title = $p_price['name'];
            $product_image = $p_price['image'];
            $only_price = $p_price['cost'];
            
            //var_dump($product_price);
            $values = array_sum($product_price);
            // echo $values;
            $total = $total + $values;        
?>
                    
                    <tr>
                      <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                        
                        <td><?php echo $product_title; ?><br><img src="images/<?php echo $product_image;  ?>" height="80" width="80"></td>
                       
                        
          
                        
                        <td><?php echo "<i class='fa fa-inr'></i> " . $only_price; ?></td>
                    </tr>
                    
                <?php }} ?>

                
                <tr>
                  <td colspan="2"><input type="submit" name="update" value="Update Cart"/></td>
                    
                    
                    
                    <td><button><a href="checkout.php" style="text-decoration:none; color:#000;">Checkout</a></button></td>
                </tr>
                
                
                
                </table>
           
           
           
           </form>

           <div align="center" class="des">
             <b>Sub Total: </b>
           <b><?php echo "<i class='fa fa-inr'></i>" . $total; ?></b>
           </div>
           
        <?php 
        
        function updatecart() {
          
          global $conn;
        
        if(isset($_POST['update']))
        {
          foreach($_POST['remove'] as $remove_id)
          {
             $delete_products = "delete from booking where pid='$remove_id'";
            
            $run_delete = mysqli_query($conn, $delete_products); 
            
            if($run_delete)
            {
              echo "<script>window.open('bookings.php','_self')</script>";
              
              }
            
            }
          
          } 
          
        }
        
        echo @$up_cart = updatecart();
        
        
      ?>
    </div>

</body>
</html>