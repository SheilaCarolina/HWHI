<?php/*
	session_start();*/
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF_8" name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "shortcut icon" href = "../Resources/Images/Logo.png" type = "image/x-icon">
		<title>Logo</title>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../Resources/CSS/layoutGeral.css"  media="screen, projection">
	</head>
	<body class="center">
		<?php
			include_once "logoNav.php";
		?>	
		<br><div class="row">
			<div class="col s12">
			  <div class="card black darken-1">
				<div class="card-content white-text">
				  <p>O planeta Terra é, atualmente, o único planeta que possui vida complexa no Universo, pensando nesses 4,5 bilhões de anos, 
				  nós pesquisadores queremos dar uma visão geral sobre diversas áreas a nível de divulgação científica e de pesquisa. Esperamos que gostem!
				</p>
				<p>
					A plataforma xxx possui o objetivo de reunir informações sobre o planeta Terra em suas diversas áreas a partir da publicação dos estudos dos pesquisadores
					de todas as partes do mundo, com o intuíto de proporcionar uma rede colaborativa para que a população possa se instruir sobre diversas questões globais.
				</p>
				</div>
			  </div>
			</div>
		  </div>	
		<table class = "center">
			<tr>
				<td class = "center">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="../Resources/Images/exatas.jpg" height="250" width="20%">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4 s1">Ciências Exatas<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Ciências Exatas<i class="material-icons right">close</i></span>
						  <p>São as ciências que têm a matemática, engenharias e ciências da computação. A principal característica dessas
						  áreas do conhecimento e dos profissionais é o raciocínio lógico graças  às ciências exatas, o homem pode observar 
						  e entender fenômenos naturais e, a partir dessa observação, inventar novos instrumentos e tecnologias para ter uma vida melhor.</p>
						  <a href="exatas.php">Veja mais!</a>
						</div>
					</div>
				</td>
				<td class = "center">
					 <div class="card">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="../Resources/Images/humanas.jpg" height="250" width="70%">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4">Ciências Humanas<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Ciências Humanas<i class="material-icons right">close</i></span>
						  <p>A área de ciências humanas, ou humanidades, trata do estudo científico aplicado a sociedade e suas influências em várias esferas: psicológicas,
						   linguísticas, sociais, filosóficas, etc.</p>
						   <a href="humanas.php">Veja mais!</a>
						</div>
					 </div>
				</td>
				<td class = "center">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="../Resources/Images/natureza.png" height="250" width="20%">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4 s1">Ciências da Natureza<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Ciências da Natureza<i class="material-icons right">close</i></span>
						  <p>São estudos que abrangem o funcionamento de organismos vivos e ainda interage o estudo da vida com o 
						  ambiente físico-químico e, analisa as relações entre os diversos seres e, entre eles com o meio ambiente.</p>
						  <a href="natureza.php">Veja mais!</a>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
