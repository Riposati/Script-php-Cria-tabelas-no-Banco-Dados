<?php
	if($_GET!= null){
	echo"<a href='trabalhoWeb.php'>Clique aqui para voltar</a><br />";
	$vet=array();
	$qtd = $_GET['qtd'];
	$nomeTabela = $_GET['nomeTabela'];
	for($i=0;$i<$qtd;$i++){
		
		$vet[$i]= $_GET['valor'.(string)$i];
	}

	for($i=0;$i<$qtd;$i++){
		if($i<$qtd-1){
			$vet[$i]= $vet[$i].' varchar(40) ,';
		}else{
			$vet[$i]= $vet[$i].' varchar(40) ';
		}
	}	
	
	if($qtd>0){
	$auxVet  = implode("" , $vet);
	
	
	//echo"Nome da Tabela é " . $nomeTabela . "<br >";
		
	//print_r($vet);
	
	//echo "<br />";
	
	/// inicio da parte de banco de dados
	
	$query = "create table $nomeTabela (" . $auxVet . ")";
	
	//echo $query;
	
	require_once('conexao.php');
	mysqli_query($conexao,$query)or die("não foi possivel criar este banco");
	mysqli_close($conexao);
	echo"Tabela criada no seu banco";
	}
	if($qtd==0){
		echo"Não é possivel criar tabelas sem colunas<br />
		<a href='trabalhoWeb.php'>Clique aqui para voltar</a><br />";
	}
	}

?>
