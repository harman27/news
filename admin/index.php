<?php 
	require 'db.php';
	if(!isset($_SESSION['name'])){
		header("location: login.php");
	}
	echo "Welcome ".$_SESSION['name'];

 ?>
 <a href="category.php">Category</a>
 <a href="logout.php">Logout</a>