	<?php
	include 'inicio.php'
	?>
	<form id= "listadealunos" name = "listadealunos" action = "alterar-excluir-dados.php" target = "_self">
	<table id="tabela">
	  <tr>
		<th>id</th>
		<th>descrição</th>
		<th>excluir</th>
		<th>alterar</th>
	  </tr>
	  
	<?php
	  require 'Abrir-conexao.php';
	  $sql = "SELECT * FROM `apartamento`";
	  $dados = $cs->query($sql);
	  if($dados != null)
	  foreach($dados as $linha) {
		echo '<tr>'. "\r\n";
		echo '   <td>'. $linha['id'].'</td>';
		echo "\r\n";
		echo '   <td>'. $linha['numero-ap-morador'].'</td>';
		echo "\r\n";
		echo '	 <td><button id= "deletar" name= "deletar" type = "submit" value = "'. $linha['id'].'">
					<img src = "excluir.png" alt = "lapis" width = "25px">
				 </button></td>';
		echo "\r\n";
		echo '	 <td><button id= "alterar" name= "alterar" type = "submit" value = "'. $linha['id'].'">
					<img src = "editar.png" alt = "lixeira" width = "25px">
				 </button></td>';
		echo "\r\n </tr> \r\n";
	  }
	  $conecta=null;
	?>
	</table>

	</form>
	<?php
	include 'fim.php'
	?>