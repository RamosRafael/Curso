<?php

#Sempre usar o $ para cria��o de variaveis.
$nome = "Rafael";
$sobrenome = "Ramos";

//concatena��o de variaveis;
$nomecompleto = $nome." ".$sobrenome;

echo "Teste de inicio de codigo";
echo "<br/>";

echo "$nomecompleto";

exit;

//unset - limpa mem�ria;
//isset - verifica se variavel existe;
unset ($nome);
	if (isset($nome)) {

		echo $nome;
	}

?>