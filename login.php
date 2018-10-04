<?php
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="w3.css">
	<style type="text/css">
		body{
			background: url("images/fpbg.jpg") no-repeat fixed center;
			background-size: cover;
		}
	</style>
	
<body>
	<div class="w3-display-middle" style="width: 40%;">
	<div class="w3-container w3-text-white" id="urname" style="font-size: 35px">yo user
	</div>
	<form name="f1" method="POST" class="w3-container w3-animate-opacity w3-round-large  w3-card-4">
		<p><input type="text" name="username" id="username" style="height:3em;" class="w3-round-large w3-input " required placeholder="USERNAME" onblur="user()"></p>
        
		<p><input type="password" name="password" style="height:3em;" class="w3-round-large w3-input" required placeholder="PASSWORD"></p>
		
        <p class="w3-center"><button name="login" type="submit" class="w3-btn w3-block w3-text-white w3-round-large w3-hover-transparent w3-hover-text-white w3-border w3-centre" style="font-size: 25px">Login</button></p>
		
        <hr class="w3-red">
        
        <p class="w3-center w3-text-white">Not Registered Yet?<br><br><a href="register.php"><input type="button" class="w3-btn w3-text-white  w3-border w3-round" name="register" value="Sign Up" style="font-size: 20px"></a>
            </p>
	</form>
	</div>

	<script type="text/javascript">
		function user(){
			var x=document.forms['f1']['username'].value;
			console.log(x);
			if(x!='')
				document.getElementById('urname').innerHTML="<h1 class='w3-animate-zoom'>Hello "+x+"</h1>";
			else
				document.getElementById('urname').innerHTML="yo user";
		}
	</script>

	<?php
		if (isset($_POST['login'])) {

			$user=$_POST['username'];
			$pass=$_POST['password'];
			//$con=mysqli_connect('localhost','root','','review');
			if(!$conn)
				die(mysqli_error($conn));
			else
			{
				$res=mysqli_query($conn,"select * from user_info where name='$user' AND password='$pass';");
				$rows=mysqli_fetch_array($res);
				$count=mysqli_num_rows($res);
				if($count==1)
				{	
					//session_start();
					$_SESSION['uid']=$rows['uid'];
					echo $_SESSION['uid'];
					$_SESSION['username']=$rows['name'];
					$_SESSION['password']=$rows['password'];
					header("Location:home.php");
				}
				else
				{
					//session_start();	
					echo "INVALID!";
					session_destroy();
				}
			}	
		}
	?>
</body>
</html>