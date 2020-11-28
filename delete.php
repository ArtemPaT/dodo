<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'dodo');
	mysqli_query($con_bd, "DELETE FROM trash WHERE id = {$_GET['id']}");
	header("Location: index.php");
 ?>