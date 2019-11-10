<!DOCTYPE html>
<html>
<head>
	<title>Formulario Carro Motor</title>
</head>
<body>
	<div align="center">
		<?php 
		$motor = $_GET["motor"];
		$modelo = $_GET["modelo"];
		$marca = $_GET["marca"];
		$cambio = $_GET["cambio"];
		$ano = $_GET["ano"];
		$cor = $_GET["cor"];
		$cilindro = $_GET["cilindro"];
		$potencia = $_GET["potencia"];
		$giro = $_GET["giro"];
		$combustivel = $_GET["combustivel"];
        
        echo "<fieldset>";
		echo "<h1>Dados do Automovel</h1>";
		echo "Motor = ".$motor;  
		echo "<br> Modelo = ".$modelo;  
		echo "<br>Marca = ".$marca;
		echo "<br>Cambio = ".$cambio;
		echo "<br>Ano = ".$ano;
		echo "<br>Cor = ".$cor;
		echo "</fieldset>";

		echo "<fieldset>";
		echo "<h1>Dados do Motor</h1>";
		echo "Cilindro = ".$cilindro;
		echo "<br>Potencia = ".$potencia;
		echo "<br>Giro Atual = ".$giro;
		echo "<br>Combustivel = ".$combustivel;
		echo "</fieldset>";
		
		 ?>
	</div>
	<div align="center"><br><a href="formulario.html">Voltar ao formulario</a></div>

</body>
</html>