<?php
include_once('config.php');
$id= $_GET['id'];
	$sqlSelect = "SELECT * FROM estoque WHERE pro_cod=$id";
	$result = $con->query($sqlSelect);
if(!empty($_GET['id'])){
	if($result->num_rows > 0){
		while($user_data = mysqli_fetch_assoc($result)){
			$cod = $user_data['pro_cod'];
			$nome = $user_data['pro_nome'];
			$quant = $user_data['pro_quant'];
			$val = $user_data['pro_val'];
			$data = $user_data['pro_data'];
			$cli = $user_data['pro_cli'];
			$cate = $user_data['pro_cate'];
		}
	}
}
?>
<!DOCTYPEhtml>
<html>
	<head>
		<title>UWU</title>
		<meta charset="utf-8">
			<script> 
			function Limpar(){
				document.getElementById("pro_cod").value="";
				document.getElementById("pro_nome").value="";
				document.getElementById("pro_quant").value="";
				document.getElementById("pro_val").value="";
				document.getElementById("pro_data").value="";
				document.getElementById("pro_cli").value="";
				document.getElementById("pro_cate").value="";
			}
			</script>
			<style>
			body{
			font-family: Arial, Helvetica, sans-serif;
			background-color: #DCDCDC;
			}
			.box{
			color: white;
			position: absolute;
			left: 36%;
			padding: 15px;
			border-radius: 15px;
			width: 25%;
			}
			fieldset{
			border: 3px solid #F08080;
			}
			legend{
			border: 1px solid #F08080;
			padding: 10px;
			text-align: center;
			background-color: #F08080;
			border-radius: 8px;
			}
			.inputBox{
			position: relative;
			}
			.inputUser{
			background-color: #DCDCDC;
			border: none;
			border-bottom: 1px solid white;
			outline: none;
			color: white;
			font-size: 15px;
			width: 100%;
			letter-spacing: 2px;
			
			}
			.labelLInput{
			position: absolute;
			top: 0px;
			left: 0px;
			pointer-events: none;
			transition: .5s;
			}
			.inputUser:focus ~.labelLInput,
			.inputUser:valid ~.labelLInput{
			top: -50%;
			font-size: 12px;
			color: #F08080;
			}
			
			#pro_data{
			border: none;
			padding: 8px;
			border-radius: 10px;
			outline: none;
			font-size: 15px;
			}
			
			#enviar, #limpar{
			background-color: #F08080;
			width: 100%;
			border: none;
			padding: 15px;
			color: white;
			font-size: 15px;
			cursor: pointer;
			border-radius: 10px;
			}
			</style>
	</head>
			<body id="body" name="body">
			<a href="sistema.php">Voltar</a>
	<div class="box">
		<form method="POST" action="saveEdit.php">
		<fieldset>
			<legend>Cadastro de Produtos</legend>
			<div class="inputBox">
				<input class="inputUser" type="number" size="4" maxlength="5" id="pro_cod" name="pro_cod" value="<?php echo $cod?>" required/>
				<label class="labelLInput">Codigo do Produto: </label>
			</div>
			<br><br>
			<div class="inputBox">
				<input class="inputUser" type="text" size="20" id="pro_nome" name="pro_nome" value="<?php echo $nome?>" required/>
				<label class="labelLInput">Nome do Produto: </label>
				</div>
				<br><br>
				<div class="inputBox">
					<input class="inputUser" type="number" size="4" id="pro_quant" name="pro_quant" value="<?php echo $quant?>" required/>
					<label class="labelLInput">Quantidade do Produto: </label>
					</div>
					<br><br>
					<div class="inputBox">
						<input class="inputUser" type="number" size="4" id="pro_val" name="pro_val" value="<?php echo $val?>" required/>
						<label class="labelLInput">Valor do Produto: </label>
						</div>
						<br><br>
							<label >Data do Produto: </label>
							<input type="date" id="pro_data" name="pro_data" value="<?php echo $data?>" required/>
							<br><br>
							<div class="inputBox">
								<input class="inputUser" type="text" size="20" id="pro_cli" name="pro_cli" value="<?php echo $cli?>" required/>
								<label class="labelLInput">Cliente: </label>
								</div>
								<br><br>
								<div class="inputBox">
									<input class="inputUser" type="text" size="20" id="pro_cate" name="pro_cate" value="<?php echo $cate?>" required/>
									<label class="labelLInput">Categoria: </label>
									</div>
									<br><br>
									<div class="inputBox">
										<input type="button" id="limpar" value="LIMPAR" onclick="Limpar()"/>
										<input type="hidden" name="id" value="<?php echo $id?>" />
										<br><br>
										<input type="submit" id="enviar" name="update" id="update"/>
										</div>
									</fieldset>
								</form>
								</div>
										</body>
									</html>