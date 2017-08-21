<?php

#Sempre usar o $ para criaзгo de variaveis.
$nome = "Rafael";
$sobrenome = "Ramos";

//concatenaзгo de variaveis;
$nomecompleto = $nome." ".$sobrenome;

echo "Teste de inicio de codigo";
echo "<br/>";

echo "$nomecompleto";

exit;

//unset - limpa memуria;
//isset - verifica se variavel existe;
unset ($nome);
	if (isset($nome)) {

		echo $nome;
	}

?>