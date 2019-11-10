<?php 
include 'motor.php';
class Carro{
	public $motor,$modelo,$cor,	$marca,	$ano,$cambio;
    }

	public function getmotor()
	{
		return $this->motor;
	}
	public function setmotor($motor){
		 $this->motor = $motor;
	}

	public function getmodelo()
	{
		return $this->modelo;
	}
	public function setmodelo($modelo){
		 $this->modelo = $modelo;
	}

	public function getcor()
	{
		return $this->cor;
	}
	public function setcor($cor){
		 $this->cor = $cor;
	}
	public function getmarca()
	{
		return $this->marca;
	}
	public function setmarca($marca)
	{
		 $this->marca = $marca;
    }
	public function getano()
		return $this->ano;
	}
	public function setano($ano){
		 $this->ano = $ano;
	}
	function getcambio(){
		return $this->cambio;
	}
	public function setcambio($cambio){
		 $this->cambio = $cambio;
	}

	public function imprimeCarro(){
    	echo "<fieldset class='Carro'>";
		echo "<2>Informações do Carro</2>";
    		$c1 = new Carro();
    		$m1-> set("{$this->motor(),$this->modelo(),$this->cor()$this->marca(),$this->ano,$this->cambio()}");
    		print_r($c1).;
     	echo "</fieldset>";
	/*
	$c1 = new Carro();
    $c1-> set("$motor ,$modelo,$cor,$marca,$ano,$cambio");
    print_r($c1).;
    */
 ?>