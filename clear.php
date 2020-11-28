<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'dodo');
	mysqli_query($con_bd, "TRUNCATE TABLE trash");
	header("Location: index.php");
 ?>