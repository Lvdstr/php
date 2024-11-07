<?php

$localhost = "localhost";
$usuario = "root";
$pass = "usbw";
$banco = "bancosite";

$login = $_POST["login"];
$senha = $_POST["senha"];

$mysqli = new mysqli ($localhost, $usuario, $pass, $banco);

if($mysqli->connect_errno){
	echo"<script language='javascript' type='text/javascript'>
		alert('nao foi possivel cadastrar esse usuario');window.location
		.href='cadastro.php'</script>";
	} else {
		$inserir = mysqli_query($mysqli, "INSERT INTO usuarios(login,senha) VALUES ('$login', '$senha')");

		echo"<script language='javascript' type='text/javascript'>
			alert('usuario cadastrado com sucesso');window.location.
			href='login.html'</script>";
		}
		
		
?>
