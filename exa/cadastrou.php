<?php
header('Content-Type: text/html; charset=utf-8');
//utf-8 no php puro
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
// Definir o idioma para pt-BR
	require 'Abrir-conexao.php';
	if(isset($_GET['produto'])){
		$nome = $_GET['produto'];
		$sql = "INSERT INTO `loja`.`produto` (`id`, `descricao`) VALUES (NULL, '{$nome}');";
		try{
			$resultado = $cs ->query($sql);
			$mensagem = "produto cadastrado";
		} catch(PDOException $e){
			$mensagem = "produto não cadastrado";
		}
		
	}else{
		$nome = "";
	}
?>