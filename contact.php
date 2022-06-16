<?php
   include 'header.php';
   @$uid=$_SESSION['uid'];
?>

<!DOCTYPE html>
<html>
<head>
  
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
  
</head>
<body>
	<!-- <div class="container" style="margin-top: 15%;"></div> -->


<div class="container">
  <form id="contact" action="" method="post" >
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input name="uname" placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <textarea name="msg" placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>	
</div>
  <?php
    // echo $uid;
    if (isset($_SESSION['uid'])) {
      @$msg = $_POST['msg'];
      $query="INSERT INTO contact(uid,msg) values('$uid','$msg');";

      if(!mysqli_query($conn,$query))
            {
              $message = "Failed!!!";
              echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else
            {
              $message = "Message Sent!!!";
              echo "<script type='text/javascript'>alert('$message');</script>";
            }
    }

    if(!isset($_SESSION['uid'])){
      $message = "Login to Contact!!!";
              echo "<script type='text/javascript'>alert('$message');</script>";
    }
  ?>

  <script>
      $("#contact-submit").submit(function(e) {
          e.preventDefault();
      });
  </script>

</body>
</html>