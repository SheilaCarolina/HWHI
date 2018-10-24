<?php
	session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];
		$db = mysqli_connect("localhost","root","bancodedados", "bdhwi") or die (mysql_error());
		$mostrar = "SELECT * FROM `user` WHERE `login`='".$login."' and `senha`='".$senha."'";
		$result = mysqli_query($db, $mostrar);
		$num = mysqli_num_rows($result);
			if($num != 0){
				while($linha = mysqli_fetch_assoc($result)) {	  
					  $_SESSION['idUser'] = $linha["idUser"];
					  $_SESSION['nome'] = $linha["nome"];
					  $_SESSION['login'] = $linha["login"];
					  $_SESSION['senha'] = $linha["senha"];
					  $_SESSION['email'] = $linha["email"];
					  $_SESSION['lattes'] = $linha["lattes"];
					  $_SESSION['area'] = $linha["area"];
					  $_SESSION['subarea'] = $linha["subarea"];;
				  }
				header("Location:../View/index2.php");
			 }
		if($num == 0){
				$_SESSION['msg'] = "<p class = 'center red-text'>".'Os dados inseridos estão incorretos! Por favor, tente novamente.<br>'."</p><font style='color: white' >".mysql_error()."</font>";
				header("Location:../View/login.php");
      	  }
?>
