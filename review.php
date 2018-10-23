<?php
	session_start();
	include 'connect.php';
	if(isset($_SESSION['uid']))
	{	
		echo $uid=$_SESSION['uid'];
		echo $pid=$_REQUEST['pid'];
		echo $str=$_REQUEST['review'];
		$query="INSERT INTO p_review(pid,uid,review) VALUES('$pid','$uid','$str')";
		$result=mysqli_query($conn,$query) or die('error');
		//header("location:index.php");
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	else
	{
		header("location:login.php");
	}
?>