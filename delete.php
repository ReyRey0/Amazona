<?php
	include_once('config.php');
	if(!empty($_GET['id'])){
	$id= $_GET['id'];
	$sqlSelect = "SELECT * FROM estoque WHERE pro_cod=$id";
	$result = $con->query($sqlSelect);
	if($result->num_rows > 0){
		$sqlDelete = "DELETE FROM estoque WHERE pro_cod=$id";
		$resultDelete = $con->query($sqlDelete);
		header('Location: sistema.php');
	}
	}
	else{
		header('Location: sistema.php');
	}
?>