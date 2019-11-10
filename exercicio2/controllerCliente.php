<!DOCTYPE html>
<html>
<head>
	<title>Formulario Cliente</title>
</head>
<body>
	<div align="center">
		<?php 
		$codigo = $_GET["codigo"];
		$nome = $_GET["nome"];
		$data = $_GET["data"];
		$preferencia = $_GET["preferencia"];
        echo "<fieldset>";
		echo "Codigo = ".$codigo;
		echo "<br> Nome = ".$nome;
		echo "<br> Data_Nascimento = " .$data;	
		echo "<br> Preferencia = " .$preferencia;
		echo "</fieldset>";
			
		
		 ?>
		 <br><a href="cliente.html">Voltar</a>
	</div>

</body>
</html>