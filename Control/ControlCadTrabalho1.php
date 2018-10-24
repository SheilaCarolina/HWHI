<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "bancodedados";
	$dbname = "bdhwi";
	
	$titulo = $_POST['titulo'];
	$resumo = $_POST['resumo'];
	$arquivo = $_FILES['arquivo'];
	$area = $_POST['area'];
	$subarea = $_POST['subarea'];
	$idUser = $_SESSION['idUser'];
	$nome = $_SESSION['nome'];
	$lattes = $_SESSION['lattes'];
	$areaAutor = $_SESSION['area'];
	$subareaAutor = $_SESSION['subarea'];
	try{
		$conn = new PDO("mysql:host=$servername;dbname=bdhwi", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		if($arquivo != "none"){
			if(move_uploaded_file($arquivo["tmp_name"],"../Resources/Arquivos/".$arquivo["name"])){
				$nomeArquivo = $arquivo["name"];
				$sql = "INSERT INTO `tema1_o_que_e_a_vida`(`idUser`, `titulo`, `nomeAutor`, `resumo`, `file`, `area`, `subarea`, `lattes`, `areaAutor`, `subAreaAutor`) 
				VALUES ('".$_SESSION['idUser']."','$titulo','$nome', '$resumo', '$nomeArquivo', '$area', '$subarea', '".$lattes."', '".$areaAutor."', '".$subareaAutor."')";
				$conn -> exec($sql); 
				$_SESSION['msg'] = "<p class = 'center green-text'>".'Trabalho cadastrado com sucesso!'."</p><br>";
				header("Location:../View/cadTrabalho1.php");
			}
		}else{
			$_SESSION['msg'] = "<p class = 'center green-text'>".'Erro ao cadastrar trabalho'."</p><br>";
			header("Location:../View/cadTrabalho1.php");
	    }
	}catch(PDOExeption $e){
		echo $sql. "<br>Falha ao registrar animal:  ".$e -> getMessage();
	}
	$conn = null;
?>
