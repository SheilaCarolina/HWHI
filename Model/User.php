<?php
	class User {
		
		private $idUser;
		private $login;
		private $senha;
		private $nome;
		private $email;
		private $lattes;
		private $area;
		private $subarea;

	public function getIdUser(){
		return $this->idOng;
	}

	public function setIdUser($idUser){
		$this->idOng = $idUser;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getLattes(){
		return $this->lattes;
	}

	public function setLattes($lattes){
		$this->lattes = $lattes;
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

	public function setSubArea($subarea){
		$this->subArea = $subarea;
	}
		
}
