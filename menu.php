<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<?php
		//insere a classe
		include_once 'pessoa.class.php';
		include_once 'conta.class.php';
		
		//criar produto
		$carlos = new Pessoa;
		
		//atribuir valores
		$carlos-> Codigo = 10;
		$carlos-> Nome = "carlos";
		$carlos-> Altura = 1.85;
		$carlos-> Idade = 26;
		$carlos-> Nascimento = '10/04/1993';
		$carlos-> Escolaridade = "Ensino Medio";
		
		echo "Manipulando o objeto ".($carlos-> Nome)."<br><br>";
		echo ($carlos-> Nome)." é formado em ".($carlos-> Escolaridade)."<br>";
		$carlos->formar("Técnico em imformatica");
		echo ($carlos-> Nome)." é formado em ".($carlos-> Escolaridade)."<br>";
		echo ($carlos-> Nome)." tem ".($carlos-> Idade)." anos<br>";
		$carlos->envelhecer(3);
		echo ($carlos-> Nome)." tem ".($carlos-> Idade)." anos<br>";
		
		//criar produto
		$contaC = new Conta;
		
		$contaC->Agencia = 6677;
		$contaC->Codigo = "cc.1234.56";
		$contaC->DataDeCriacao = "10/07/2012";
		$contaC->Titular = $carlos;
		$contaC->Senha = 9876;
		$contaC->Saldo = 567.89;
		$contaC->Cancelada = false;
		
		echo "<br>";
		echo "Manipulando a conta de ".($contaC->Titular->Nome);
		echo "<br>O saldo atual da conta é R$".($contaC->obterSaldo()).".<br>";
		$contaC->depositar(2000.00);
		echo "<br>O saldo atual da conta é R$".($contaC->obterSaldo()).".<br>";

		
		
	?>
	</body>
</html>