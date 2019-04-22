<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<?php
		class Pessoa{
			public $Codigo;
			public $Nome;
			public $Altura;
			public $Idade;
			public $Nascimento;
			public $Escolaridade;
			public $Salario;
			
			//construtor
			function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario){
				$this->$Codigo = $Codigo;
				$this->$Nome = $Nome;
				$this->$Altura = $Altura;
				$this->$Idade = $Idade;
				$this->$Nascimento = $Nascimento;
				$this->$Escolaridade = $Escolaridade;
				$this->$Salario = $Salario;
			}
			
			//metodocrecer(aumenta altura em cm)
			function crescer($centimetros){
				$this->Altura += $centimetros;
			}
			
			//formar (altera escolaridade para titulaçao)
			function formar($titulacao){
				$this->Escolaridade = $titulacao;
			}
			
			function envelhecer($anos){
				if($anos > 0){
					$this->Idade += $anos;
				}
			}
			
		}
	?>
	</body>
</html>