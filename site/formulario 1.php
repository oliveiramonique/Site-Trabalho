<?php
function db_insert_teste($nome, $celular, $email, $data, $convidados, $tipo) { //declaração de função
	global $conn;
	$sql = "INSERT INTO tb_orcamento (nome, celular, email, data, convidados, tipo) VALUES ('$nome', '$celular', '$email', '$data', '$convidados', '$tipo')";
    $conn->query($sql);
	//echo $sql;
	//return $conn->insert_id;
	return null;
}

require_once("./banco.php");

// verificação da chegada de dados
var_dump($_REQUEST);

$nome = $_REQUEST['nome'];
$cel = $_REQUEST['celular'];
$email = $_REQUEST['email'];
$data = $_REQUEST['data'];
$convidados = $_REQUEST['convidados'];
$tipo = $_REQUEST['tipo'];

db_insert_teste($nome, $cel, $email, $data, $convidados, $tipo);
?>