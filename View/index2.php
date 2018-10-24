<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF_8" name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "shortcut icon" href = "../Resources/Images/Logo.png" type = "image/x-icon">
		<title>HWHI</title>
		
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
		</script>
	</head>
	<body align = "center">
		<?php
				include_once "navUser.php";
		?>	 
		<div class="row">	
			<div class="card black darken-1">
				<div class="card-content white-text">
					<font face = "Didot, serif" color = "white">
						Olá, 
						<?php
						if(isset($_SESSION['idUser'])):	
							echo $_SESSION['nome']."!<br><i>E-mail</i>: ".$_SESSION['email']."<br>Lattes: <a href='".$_SESSION['lattes']."'>".$_SESSION['lattes']."</a><br>Área: ".$_SESSION['area']."
									<br>Sub área: ".$_SESSION['subarea']."</font>";
						endif;
						?>
					</font>
				</div>
			</div>
		</div>
		<table class="responsive-table">
			<tr>
				<th rowspan="2" class = "center">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="../Resources/Images/vida.png" height="670" width="100">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4 s1">O que é vida?<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">O que é vida?<i class="material-icons right">close</i></span>
						  <p>Segundo a química Luciana Aparecida Farias¹, na visão de um químico, a vida é um 
								fenômeno completamente separado de outros fenômenos  da  natureza, 
								onde os seres vivos podem ser definidos como estando em uma arena onde as mesmas
								 leis químicas 
								e físicas que regem toda a natureza se encontram para constituir o jogo da vida 
								enquanto, o biólogo, 
								Francisco Ângelo Coutinho² defende que a biologia trata do estudo da vida, 
								no entanto, este conceito é tratado por ela como sendo algo polissêmico, admitindo vários
								significados possíveis, de modo a expressar-se por um perfil conceitual. E você? 
								Qual a sua visão?
								</p>
								<p>
									<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4707942P0">¹http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K4707942P0</a><br>
									<a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4797754D3">²http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4797754D3</a>
								</p>
						  <a href="tema1.php">Veja mais!</a>
						</div>
					</div>
				</th>
				<td class = "row">
					 <div class="card center col s12 m8">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="../Resources/Images/haiti.jpg" height="250" width="70">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4">Saiba como um terremoto pode afetar a sua vida!<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Saiba como um terremoto pode afetar a sua vida<i class="material-icons right">close</i></span>
						  <p>Desastres naturais são características de um sistema geológico ativo como a Terra! Ter um sistema ativo faz com que o planeta evolua possibilitando
							condições para abrigar vida, no entanto, há também o lado negativo ... os terremotos, maremotos, tsunamis entre outros. Nesse contexto, este tema irá tratar sobre
							como os terremotos influenciam na nossa vida geológicamente e socialmente também. Confira!</p>
						   <a href="tema2.php">Veja mais!</a>
						</div>
					 </div>
				</td>
			</tr>
			<tr>
				<td class = "row">
					<div class="card center col s12 m8">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="../Resources/Images/ate.jpg" height="250" width="100">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4 s1">Até onde podemos enxergar?<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Até onde podemos enxergar?<i class="material-icons right">close</i></span>
						  <p>Do ponto de vista da física, conseguimos enxergar apenas em frequências específicas, 
								por isso não conseguimos ver nada em infravermelho ou em ultravioleta. O artigo da professora Silvia Nishida¹
								irá explicar detalhadamente as nuances físicas da visão. Mas, se você quer saber sobre os aspectos biológicos e 
								fisiológicos da óptica, o artigo de Otaviano Helene² irá proporcionar essa "visão". Já tecnologicamente falando,
								conseguimos enxergar mais longe, onde nunca jamais vimos! Como? Através do poderoso James Webb Telescope!
								 </p>
								 <p><a href="http://lattes.cnpq.br/9069986140495233">¹http://lattes.cnpq.br/9069986140495233</a></p>
								 <p><a href="http://lattes.cnpq.br/7548253926793752">²http://lattes.cnpq.br/7548253926793752</a></p>
						  <a href="tema3.php">Veja mais!</a>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
