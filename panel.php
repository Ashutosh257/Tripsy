<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container row">
	<div class="col-md-6" style="text-align: left">
		<div class="panel panel-default"> 
		<div class="panel-heading"><h1>Admin Panel</h1></div>
		<a href="logout.php">LOGOUT</a>
		<div class="panel-body">
			<pre>
			<form action="insert.php" method="POST" enctype="multipart/form-data">
				Package Name:<input type="text" name="name" required/><br>
				Description :<textarea rows='5' columns='5' type="text" name="descr" id="descr" required></textarea><br>
				Cost        :<input type="text" name="cost" required/><br>
				Image       :<input type="file" name="image" required/><br>
				<input type="submit" value="Insert">
			</form>
			</pre>
		</div>
		</div>
	</div>

</body>

</html>