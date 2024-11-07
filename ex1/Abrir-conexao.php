<?php
$userBanco = "root";
$senha = "usbw";
$baseDeDados = "sistema";
$servidor = "localhost";
$porta = "3306";

try{
  $cs = new PDO("mysql:dbname=$baseDeDados; host=$servidor; port=$porta; charset=utf8", $userBanco, $senha);
  $cs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  echo "falha ao conectar: " .$e ->getMessage();
}
?>