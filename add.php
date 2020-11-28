<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'dodo');
	$con_table = mysqli_query($con_bd, "SELECT * FROM products WHERE id = {$_GET['id']}");
	$result = $con_table -> fetch_assoc();
	mysqli_query($con_bd, "INSERT INTO trash(name,text,price,img) VALUES ('{$result["name"]}','{$result["text"]}','{$result["price"]}','{$result["img"]}')");
	header("Location: index.php");
 ?>