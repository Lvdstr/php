<?php
header('Content-Type: text/html; charset=utf-8');
//utf-8 no php puro
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
// Definir o idioma para pt-BR
	require 'Abrir-conexao.php';
	if(isset($_GET['apartamento'])){
		$nome = $_GET['apartamento'];
		$sql = "INSERT INTO `loja`.`apartamento` (`id`, `numero-ap-morador`) VALUES (NULL, '{$nome}');";
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