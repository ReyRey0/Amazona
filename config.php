<?php
$hs = "localhost";
$us = "root";
$ps = "";
$con = mysqli_connect("$hs","$us","$ps");

$cod = isset($_POST['pro_cod']) ? $_POST['pro_cod'] : "";
$nome = isset($_POST['pro_nome']) ? $_POST['pro_nome'] : "";
$quant = isset($_POST['pro_quant']) ? $_POST['pro_quant'] : "";
$val = isset($_POST['pro_val']) ? $_POST['pro_val'] : "";
$data = isset($_POST['pro_data']) ? $_POST['pro_data'] : "";
$cli = isset($_POST['pro_cli']) ? $_POST['pro_cli'] : "";
$cate = isset($_POST['pro_cate']) ? $_POST['pro_cate'] : "";

if (!$con) {
    error_log("Failed to connect to MySQL: " . mysqli_error($con));
    die('Internal server error');
}

$db_select = mysqli_select_db($con, "amazona");
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($con));
    die('Internal server error');
}

$result = mysqli_query($con, "INSERT INTO estoque(pro_cod, pro_nome, pro_quant, pro_val, pro_data, pro_cli, pro_cate)
VALUES ('$cod', '$nome', '$quant', '$val', '$data', '$cli', '$cate')");

if($result==true){
	echo '<script type ="text/JavaScript">';  
	echo 'alert("Dados inseridos com sucesso")';  
	echo '</script>'; 
	header('Location: formulario.html');
}

?>