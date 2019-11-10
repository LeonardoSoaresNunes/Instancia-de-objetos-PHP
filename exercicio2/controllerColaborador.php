<!DOCTYPE html>
<html>
<head>
	<title>Formulario Colaborador</title>
</head>
<body>
	<div align="center">
		<?php 
		$codigo = $_GET["codigo"];
		$nome = $_GET["nome"];
		$data_nascimento = $_GET["data"];
		$setor = $_GET["setor"];
		$data_admissao = $_GET["adm"];
		$salario = $_GET["salario"];
        

        echo "<fieldset>";

        echo "Codigo = ".$codigo;
		echo "<br>Nome = ".$nome;
		echo "<br>Data_Nascimento = ".$data_nascimento;
		echo "<br>Setor = ".$setor;
		echo "<br>Data_Admissao = ".$data_admissao;
		echo "<br>Salario = ".$salario;
		
		echo "</fieldset>";
		 ?>
		 <br><a href="colaborador.html">Voltar</a>
	</div>

</body>
</html>