<?php 

class curso{
	private $descricao;
	private $valor;

	function setDescricao($descricao){
		$this->descricao = $descricao;
	} 

	function setvalor($valor){
		$this->valor = $valor;
	}

	function getDescricao(){
		return $this->descricao;
	}

	function getValor(){
		return $this->valor;
	}   

}


