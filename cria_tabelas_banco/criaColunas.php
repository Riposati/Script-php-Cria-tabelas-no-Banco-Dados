<?php
	if($_POST!=null){
	
	$nome = $_POST['nome'];
	$qtd = intval($_POST['quantidade']);
	
	if($qtd==0){
		echo"<script>alert('Não é possível criar tabelas sem colunas')</script>";
		echo"<a href='trabalhoWeb.php'>Clique aqui para voltar</a><br />";
	}else{
	
	echo"Informe os nomes das colunas:<br />";
	
	echo"<form action='recebeValores.php'>";
	
	for($i=0;$i<$qtd;$i++){
		$aux = 'valor'.(string)$i;
		echo "<input type='text' name='$aux' id='$aux' /><br />";
	}	
	
	echo"<input type='submit' value='Enviar'/><input type='hidden' name='qtd' id='qtd' value=$qtd/>
	<input type='hidden' name='nomeTabela' id='nomeTabela' value=$nome />
	</form><br />";
	
	}
	
	}
	
?>