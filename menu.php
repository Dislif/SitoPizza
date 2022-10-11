<?php

class Pizza{
	public $nome;
	public $ingredienti;
	public $prezzo;
	
	function __construct($nome, $ingredienti, $prezzo){
		$this->nome = $nome;
		$this->ingredienti = $ingredienti;
		$this->prezzo = $prezzo;
	}
	
	function getPrezzo($dim){
		if($dim=="grande"){
			return $prezzo*5/4;
		} else if ($dim=="piccola"){
			return $prezzo*3/4;
		} else {
			return $prezzo;
		}
	}
	
	function getIngred(){
		return $ingredienti;
	}
	
	function getNome(){
		return $nome;
	}
}







?>