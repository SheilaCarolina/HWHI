<?php
	include "../Dao/conection.php";
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF_8" name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "shortcut icon" href = "../Resources/Images/Logo.png" type = "image/x-icon">
		<title>Saiba com um terremoto pode afetar a sua vida!</title>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../Resources/CSS/layoutGeral.css"  media="screen, projection">
		
		<!--Arquivos JQuery e Java Script-->
		<script typr = "text/javascript" src="../materialize/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
		<!--Inicialização JQuery-->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.scrollspy').scrollSpy();
			  })
			$(document).ready(function(){
				$('.fixed-action-btn').floatingActionButton();
			});
			$(document).ready(function(){
				$('.tooltipped').tooltip();
			});
		</script>
	</head>
	<body align = "center">
		<?php
				include_once "logoNav.php";
		?>	
		<br>
			
		<?php
				$sql = "SELECT * FROM `tema2_saiba_como_um_terremoto_pode_afetar_a_sua_vida`";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				  while($row = $result->fetch_assoc()) {
					echo "<table bgcolor = 'black'>
							<tr bgcolor='grey'>
								<td><font color='white' colspan='3'>Título: <font color='DodgerBlue'>".$row['titulo']."</td>
								<td></td>
								<td></td>
						    </tr>
							<tr>;
								<td><font color='white'>Resumo: <font color='DodgerBlue'>".$row['resumo']."</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td bgcolor = 'with'><font color='white'>Artigo/Trabalho: <a href=../Resources/Arquivos/".$row['file'].">".$row['file']."</a></td>
								<td><font color='white'>Área: <font color='DodgerBlue'>".$row['area']."</td>
								<td><font color='white'>Sub área: <font color='DodgerBlue'>".$row['subarea']."</td>
							</tr>
							<tr>
								<td bgcolor = 'with'><font color='white'>Autor: <font color='DodgerBlue'>".$row['nomeAutor']."</font></td>
								<td><font color='white'>Endereço Lattes: <a href=".$row['lattes'].">".$row['lattes']."</a></td>
								<td></td>
							</tr>
							<tr>
								<td><font color='white' align='top'>Área de atuação: <font color='DodgerBlue'>".$row['areaAutor']."</td>
								<td><font color='white' align='top'>Sub área de atuação: <font color='DodgerBlue'>".$row['subAreaAutor']."</td>
								<td></td>
							</tr>
						</table>";
					}
			}
			?>
	</body>
</html>
