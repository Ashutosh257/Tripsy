<?php
	include 'header.php';
	$pid=$_REQUEST['pid'];
	$uid=$_SESSION['uid'];
	$query="SELECT * FROM p_info WHERE pid='$pid'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Description</title>
	
	<style type="text/css">
		
		.des{
			margin:3%;
		}

	</style>

</head>
<body>


<div style="margin-top: 12%;">
    
  </div>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<div class="col-md-3 col-s-12">
				<?php
					$str="<image class='mar' src='images/".$row['image']."'/>";
					echo $str;
				?>
			</div>
			<div class="col-md-9 col-s-12 des">
				<p>About this Package:</p>
				<?php
					$info="<font size=5>";
				    $info.="<br> PLACE: ".$row['name']."<br>";
					$info.="PRICE:₹".$row['cost'];
					$info.="<br>DESCRIPTION:".$row['descr']."<br>";
					$info.="</font>";
					echo $info;
				?>
				<form method="post">
					<input type="submit" class="btn btn-primary" name="book" value="Book Now!!">
				</form>
				
				<?php
					if(isset($uid)){
						if (isset($_POST['book'])) {
						//echo "$pid $uid";

						$add="INSERT INTO booking(pid,uid) values('$pid','$uid');";
						if(!mysqli_query($conn,$add))
						{
							$message = "Not Booked!!!";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
						else
						{
							$message = "Booked!!!";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
						}		
					}else{
						$message = "Login!!!";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
					
				?>
			</div>
			

			
			<div class="row">	
			<div class="col-md-12 col-s-12">
				<div class="panel panel-info"> 
				<div class="panel-heading"><h3>Write a Review</h3></div> 
				<div class="panel-body">
					<form action='review.php' method='get' role='form'>
						<?php
						echo "<input class='form-control' type='hidden' name='pid' value='".$row['pid']."'/>";
						?>
						<textarea class="form-control" name='review' rows=5 columns=5 maxlength="100"></textarea>
						<?php
						if(isset($_SESSION['uid'])){
							echo "<input class='btn btn-success form-control' type='submit' value='review this package'/>";
						}
						?>
					</form>
				</div>
				</div>
			</div>
			</div>
	
		</div>

		<div class="col-md-5 col-s-12">
			<div class="panel panel-success">
		      <div class="panel-heading">
		      	<h3><span class="glyphicon glyphicon-pencil"></span> REVIEWS:</h3>
		      </div>
		      <div class="panel-body">
		      	<?php
					$sql="SELECT * from p_review where pid='$pid'";
					$res=mysqli_query($conn,$sql);
					
					//$count=mysqli_num_rows($res);
					while(@$string=mysqli_fetch_assoc($res)){
						$uid=$string['uid'];
						//$name=@implode(mysqli_fetch_assoc(mysqli_query($conn,"SELECT name from user_info where uid='$uid'")));
						$arr = mysqli_fetch_assoc(mysqli_query($conn,"SELECT name from user_info where uid='$uid'"));
						//echo $arr;
						 $name=@implode($arr);
						echo "<span class='glyphicon glyphicon-flash'></span><font size='3'>".$name.":".$string['review']."</font>";
						echo "<br>";
		      		}
				?>
		      </div>
		    </div>
		</div>
	</div>
</div>
</body>
</html>