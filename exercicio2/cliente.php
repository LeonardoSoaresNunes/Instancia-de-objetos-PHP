<?php
include 'pessoa.php';  
class cliente extends  pessoa{
	
	public $preferencia;
 
	}
	function getpreferencia()
	{
		return $this->preferencia;
	
	}
	function setpreferencia($preferencia):void
	{
		$this->preferencia = $preferencia;
	}
	
    public function imprimecolaborador(){
    	echo "<fieldset class='Cliente'>";
		echo "<2>Informações do Cliente</2>";
    		$c1 = new Cliente();
    		$c1-> set("{$this->codigo(),$this->nome(),$this->dataNascimento()$this->setor(),$this->ano,$this->preferencia()}");
    		print_r($c1).;
     	echo "</fieldset>";
     }
     public function__construct ("$codigo,$nome,$dataNascimento,$setor,$dataAdmissao,$salario");
     {$this->setCodigo($codigo),$this->setNome($nome),$this->setDataNascimento($dataNascimento),$this->setSetor($setor),$this->setPreferencia($preferencia)}
	//$c1 = new Cliente();
	//$c1->set("$codigo,$nome,$dataNascimento,$preferencia");
	//print_r($c1).;
?>