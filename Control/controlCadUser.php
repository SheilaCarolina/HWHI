<?php
	session_start();
	require_once '../Model/User.php';	
	require_once '../Dao/DaoUser.php';


	class ControlCadUser{
		function __construct(){
			if($_POST['acao'] == "cadastrar"){
				$this->cadastrar();
			}
		}
		function cadastrar(){
			$user = new User();
			$user->setLogin($_POST['login']);
			$user->setSenha($_POST['senha']);
			$user->setNome($_POST['nome']);
			$user->setEmail($_POST['email']);
			$user->setLattes($_POST['lattes']);
			$user->setArea($_POST['area']);
			$user->setSubArea($_POST['subarea']);

			$dao = new DaoUser();
			$dao->inserir($user);
			$_SESSION['msg'] = "<p class = 'center green-text'>".'Usuário cadastrado com sucesso!'."</p><br>";
			header("Location:../View/cadUser.php");
		}
	}
	new ControlCadUser();
?>
