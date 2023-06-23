<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
// senha ok
if ($senha == "123456") {
	session_start();
	$_SESSION["monique"] = $usuario;
	header("Location: sessao_pagina_principal.php");
} else {
	// senha errada
	header("Location: sessao.php");
}
?>