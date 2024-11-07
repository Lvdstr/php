<!DCOTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-ua-Compatible" content="ie-edge">
	<link rel="stylesheet" href="style.css">
</head>
	<body>
    <table id="tabela">
      <tr>
        <th>RA</th>
        <th>Nome</th>
      </tr>
      
    <?php
      require 'Abrir-conexao.php';
      $sql = "SELECT * FROM `aluno`";
      $dados = $cs->query($sql);
      if($dados != null)
      foreach($dados as $linha) {
        echo '<tr>';
        echo '   <td>'. $linha['ra'].'</td>';
        echo '   <td>'. $linha['nome'].'</td>';
        echo '<tr>';
      }
      $conecta=null;
    ?>
    </table>
</body>
</html>