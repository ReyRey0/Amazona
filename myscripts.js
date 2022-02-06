	function limpar(){
		document.getElementById("pro_cod").value="";
		document.getElementById("pro_nome").value="";
		document.getElementById("pro_quant").value="";
		document.getElementById("pro_val").value="";
		document.getElementById("pro_data").value="";
		document.getElementById("pro_cli").value="";
		document.getElementById("pro_cate").value="";
		}
	
var search = document.getElementById("pesquisar");
function searchData(){
	Window.Location = 'sistema.php?search='+search.value;
}