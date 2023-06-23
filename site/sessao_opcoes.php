<?php
	require_once("sessao_testa_sessao.php");
	echo "Usuário logado: " . $_SESSION["monique"] . "<BR>\n";
?>
<a href="sessao_pagina_principal.php">Página Principal</a><BR>
<a href="sessao_pagina1.php">Página 1</a><BR>
<a href="sessao_pagina2.php">Página 2</a><BR>
<a href="sessao_sair.php">Sair</a><BR>