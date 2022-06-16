<?php
	include 'index-header.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">
<body>	
	<form action="admin.php" method="post" name="Login">
		
			<br>
			<label>Username</label>
			<br>
			<br>
			<input type="text" name="username" id="username" required/><br>
			<br>
			<label>Password</label>
			<br>
			<br>
			<input type="Password" name="password" id="password" required/><br>
			<input type="submit" id="Login" value="Login" class="admin-login" name="login">
		
	</form>


	<?php
	if (isset($_POST['login'])) {
		$user=$_POST['username'];
		$pass=$_POST['password'];
		
		if(!$conn)
			die(mysqli_error($conn));
		else
		{
			$res=mysqli_query($conn,"select name,password from admin_info where name='$user' AND password='$pass';");
			$rows=mysqli_fetch_array($res);
			$count=mysqli_num_rows($res);
			if($count==1)
			{	
				header("Location:panel.php");
			}
			else
			{	
				echo "<a href='admin.php'>U r not admin!!</a>";
			}
		}
		}	
	?>
</body>
</html>