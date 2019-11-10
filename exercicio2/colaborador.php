<?php  
include 'pessoa.php';
class colaborador extends class pessoa {
	public $setor;
	private $dataNascimento;
    protected $salario;

	
	}
	public function getsetor()

	{
		return $this->setor;
	}
	public function setsetor($setor):void
	{
		$this->setor = $setor;
	}
	
	public function getdataAdmissao()
	{
		return $this->dataAdmissao;
	}
	public function setdataAdmissao($dataAdmissao):void
	{
		$this->dataAdmissao = $dataAdmissao;
	}
	public function getsalario()
	{
		return $this->salario;
	}
	public function setsalario($salario):void
	{
		$this->salario = $salario;
	}
	public function imprimecolaborador(){
    	echo "<fieldset class='Colaborador'>";
		echo "<2>Informações do Colaborador</2>";
    		$col1 = new Colaborador();
    		$col1-> set("{$this->codigo(),$this->nome(),$this->dataNascimento()$this->setor(),$this->ano,$this->dataAdmissao(),$this->salario()}");
    		print_r($col1).;
     	echo "</fieldset>";
     }
     public function__construct ("$codigo,$nome,$dataNascimento,$setor,$dataAdmissao,$salario");
     {$this->setCodigo($codigo),$this->setNome($nome),$this->setDataNascimento($dataNascimento),$this->setSetor($setor),$this->setDataAdmissao($dataAdmissao),$this->setSalario($salario)}
	//$col1 = new colaborador();
	//$col1->set("$codigo,$nome,$dataNascimento,$setor,$dataAdmissao,$salario");
	//print_r($col1).;
?>