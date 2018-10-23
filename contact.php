<?php
   include 'header.php';
   $uid=$_SESSION['uid'];
?>

<!DOCTYPE html>
<html>
<head>
  
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
  <script>
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };
    xmlhttp.open("GET", "about.xml", true);
    xmlhttp.send();

  function myFunction(xml) {
    
    var xmlDoc = xml.responseXML;
    
    var x = xmlDoc.getElementsByTagName("student");
    var i=0;
    document.getElementById("demo").innerHTML = "<h3 class='w3-serif'><span class='glyphicon glyphicon-ok'></span>" + x[i].getElementsByTagName("desc")[0].childNodes[0].nodeValue+"<br><span class='glyphicon glyphicon-ok'></span>"+x[0].getElementsByTagName("aim")[0].childNodes[0].nodeValue+"</h3>";
  }
  </script>
</head>
<body>
	<div class="container" style="margin-top: 15%;"></div>

  <button style="margin: 3%;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Our Website URL</button>
<div id="demo" class="container-fluid collapse">
  <script>
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };
    xmlhttp.open("GET", "about.xml", true);
    xmlhttp.send();

  function myFunction(xml) {
    
    var xmlDoc = xml.responseXML;
    
    var x = xmlDoc.getElementsByTagName("student");
    var i=0;
    document.getElementById("demo").innerHTML = "<h3 class='w3-serif'><span class='glyphicon glyphicon-ok'></span>" + x[i].getElementsByTagName("site")[0].childNodes[0].nodeValue+"</h3>";
  }
  </script>
</div>


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
      <input name="phone" placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input  placeholder="Your Web Site starts with http://" type="url" tabindex="4">
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
    if (isset($_POST['uid'])) {
      $msg = $_POST['msg'];
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
    }else{
      $message = "Login to Contact!!!";
              echo "<script type='text/javascript'>alert('$message');</script>";
    }
  ?>

</body>
</html>