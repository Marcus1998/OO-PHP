<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<?php
		class Conta{
			public $Agencia;
			public $Codigo;
			public $DataDeCriacao;
			public $Titular;
			public $Senha;
			public $Saldo;
			public $Cancelada;
			
			function __construct($Agencia,$Codigo$DataDeCriacao,$Titular,$Senha,$Saldo,$Cancelada;){
				
			}
			
			//ritira dinheiro da conta
			function retirar($quantia){
				if($Quantia > 0 && $this->Saldo > $quantia){
					$this->Saldo -= $quantia;
				}
			}
			
			//depositar dinheiro na conta
			function depositar($quantia){
				if($quantia > 0){
					$this->Saldo += $quantia;
				}
			}
			
			function obterSaldo(){
				return $this->Saldo;
			}
		}
	?>
	</body>
</html>