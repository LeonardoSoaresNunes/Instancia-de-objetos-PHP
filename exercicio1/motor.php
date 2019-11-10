<?php 
class Motor{
	public $cilindros,$potencia,$giroAtual,$combustivel;
    
    }

	public function getCilindros()
	{
		return $this->cilindros;
	}
	public function setCilindros($cilindros){
		 $this->cilindros = $cilindros;
	}
	public function getpotencia()
	{
		return $this->potencia;
	}
	public function setpotencia($potencia){
		 $this->potencia = $potencia;
	}
	function getgiriroAtual()
	{
		return $this->giroAtual;
	}
	public function setgiroAtual($giroAtual){
		 $this->giroAtual = $giroAtual;
	}
	public function getcombustivel()
		return $this->combustivel;
	}
    public function setcombustivel($combustivel){
		 $this->combustivel = $combustivel;
	}
	public function imprimeMotor(){
    	echo "<fieldset class='Motor'>";
		echo "<2>Informações do Motor</2>";
    		$m1 = new Motor();
    		$m1->set("{$this->cilindros(),$this->potencia(),$this->$this->giroAtual(),$this->combustivel()}");
    		print_r($m1).;
     	echo "</fieldset>";
     		
     		/*
     		$m1 = new Carro();
    		$m1-> set("$cilindros ,$potencia,$giroAtual,$combustivel");
    		print_r($m1).;
    		*/
     		
 ?>