<?php
	class Trabalho1 {		
		private $resumo;
		private $arquivo;
		private $area;
		private $subarea;
		private $idUsuario;
		private $nome;
		private $link;
		private $areaAutor;
		private $subAreaAutor;

	public function getResumo(){
		return $this->resumo;
	}

	public function setResumo($resumo){
		$this->resumo = $resumo;
	}
	
	public function getArquivo(){
		return $this->arquivo;
	}

	public function setArquivo($arquivo){
		$this->arquivo = $arquivo;
	}
	
	public function getArea(){
		return $this->area;
	}

	public function setArea($area){
		$this->area = $area;
	}

	public function getSubArea(){
		return $this->subArea;
	}

	public function setSubArea($subArea){
		$this->subArea = $subArea;
	}

	public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function getLink(){
		return $this->link;
	}

	public function setLink($nome){
		$this->link = $link;
	}

	public function getAreaAutor(){
		return $this->areaAutor;
	}

	public function setAreaAutor($areaAutor){
		$this->areaAutor = $areaAutor;
	}

	public function getSubAreaAutor(){
		return $this->subAreaAutor;
	}

	public function setSubAreaAutor($subAreaAutor){
		$this->subAreaAutor = $subAreaAutor;
	}
}
