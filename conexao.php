

<?php

	//Dados do servidor
	$host = "127.0.0.1";
	$login = "root";
	$senha = "loginbank";
	$banco = "users";


	//Efetuando a conexão
	$conexao =mysqli_connect($host, $login, $senha);
	mysqli_select_db($conexao, $banco);


	//Verificação
	if(!mysqli_connect($host, $login, $senha)){
		echo "Erro ao conectar ao banco de dados!";
	}

?>