<?php
  require 'Abrir-conexao.php';
  if((isset($_GET['id'])) and isset($_GET['nome'])){
    $id = $_GET['id'];
    $name = $_GET['nome'];
    
    $sql = "UPDATE `apartamento` SET `numero-ap-morador` = '{$name}' WHERE `apartamento`.`id` = {$id};";
    try{
      $resultado = $cs ->query($sql);
      $mensagem = "funcionou";
    } catch(PDOException $e) {
      echo($e);
      $mensagem = "não fonunciou";
  }
  } else {
    $name = "";
  }
  echo ("Atualizou o nome para: ". $name);
  echo("<br />". $mensagem);
  ?>