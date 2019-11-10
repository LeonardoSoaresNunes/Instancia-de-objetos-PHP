<?php  
abstract class pessoa {
	public $codigo,	$nome;
	private $dataNascimento;
	}
	public function getcodigo()
	{
		return $this->codigo;
	}
	public function setcodigo($codigo):void
	{
			$this->codigo = $codigo;
	}

	function getnome()
	{
		return $this->nome;
	}
	public function setnome($nome):void
	{
		$this->nome = $nome;
	}
	
	function getdataNascimento()
	{
		return $this->dataNascimento;
    }
	public function setdataNascimento($dataNascimento):void
	{
		$this->dataNascimento = $dataNascimento;
	}
	public abstract function imprimir(){
    		$p1 = new pessoa();
    		$p1-> set("{$this->codigo(),$this->nome(),$this->dataNascimento()}");
    		print_r($p1).;
     	echo "</fieldset>";
	}

    public function __construct($codigo, $nome, $dataNascimento)
    {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setDataNascimento($dataNascimento);
    }
	//$p1 = new pessoa();
	//$p1->set("$codigo,$nome,$dataNascimento");
	//print_r($p1).;
?>