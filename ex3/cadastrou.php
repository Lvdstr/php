<?php
	require 'Abrir-conexao.php';
	if(isset($_GET['nome'])){
		$nome = $_GET['nome'];
		$sql = "INSERT INTO `sistema-2`.`aluno` (`ra`, `nome`) VALUES (NULL, '{$nome}');";
		try{
			$resultado = $cs ->query($sql);
			$mensagem = "aluno cadastrado";
		} catch(PDOException $e){
			$mensagem = "alumno não cadastrado";
		}
		
	}else{
		$nome = "";
	}
	echo ("este eh o nome enviado: ". $nome);
	echo("<br/>". $mensagem);

?>