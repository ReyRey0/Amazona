<?php
include_once("config.php");

if(isset($_POST['update'])){
	$cod = $_POST['pro_cod'];
	$nome = $_POST['pro_nome'];
	$quant = $_POST['pro_quant'];
	$val = $_POST['pro_val'];
	$dados = $_POST['pro_data'];
	$cli = $_POST['pro_cli'];
	$cate = $_POST['pro_cate'];
	
	$sqlUpdate = "UPDATE estoque SET pro_cod='$cod',pro_nome='$nome',pro_quant='$quant',pro_val='$val',pro_data='$data',pro_cli='$cli',pro_cate ='$cate' WHERE pro_cod='$cod'";
	$result = $con->query($sqlUpdate);
}
header('Location: sistema.php');
?>