<?php
	include 'connect.php';
	$name=$_REQUEST['name'];
	// $days=$_REQUEST['days'];
	// $night=$_REQUEST['night'];
	$descr=$_REQUEST['descr'];
	$cost=$_REQUEST['cost'];
	$image=$_FILES['image']['name'];
	//echo $name.$type.$image;
	$query="INSERT INTO p_info(name,descr,cost,image) values('$name','$descr','$cost','$image');";
	if(!mysqli_query($conn,$query))
	{
		echo "failed";
	}
	else
	{
		echo "success";
	}
	include 'panel.php';


?>