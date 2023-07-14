<?php
function db_insert_teste($nome, $celular, $email, $redesocial, $sobreempresa) { //declaração de função
	global $conn;
	$sql = "INSERT INTO tb_parcerias (nome, celular, email, redesocial, sobreempresa) VALUES ('$nome', '$celular', '$email', '$redesocial', '$sobreempresa')";
    $conn->query($sql);
	//echo $sql;
	//return $conn->insert_id;
	return null;
}

require_once("./banco.php");

// verificação da chegada de dados
//var_dump($_REQUEST);

$nome = $_REQUEST['nome'];
$cel = $_REQUEST['celular'];
$email = $_REQUEST['email'];
$redesocial = $_REQUEST['redesocial'];
$sobre = $_REQUEST['sobreempresa'];

db_insert_teste($nome, $cel, $email, $redesocial, $sobre);
?>