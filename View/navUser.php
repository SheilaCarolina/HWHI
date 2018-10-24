<link type="text/css" rel="stylesheet" href="../Resources/CSS/layoutGeral.css"  media="screen"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Arquivos JQuery e Java Script-->
<script typr = "text/javascript" src="../materialize/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
<!--Inicialização JQuery-->
<script type="text/javascript">
			$(document).ready(function(){
				$('.sidenav').sidenav();
			  });
			  
			  $(".dropdown-trigger").dropdown(); 
</script>
	
<nav>
	<div class="padrao">
		<div class="nav-wrapper container">
			<div class="brand-logo light">
				<a href = "index2.php">
					<img src="../Resources/Images/logo.png" alt="[img]" width="50">Houston, we have information!</a>
			</div>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger">
				<i class="material-icons left">menu</i>
			</a>
			<ul class="right hide-on-med-and-down">
				<li>
					<a href="sair.php">
						<i class="material-icons left">input</i>sair
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<br>
			
<ul class="sidenav" id="mobile-demo">
	<li>
		<a href="sair.php"><i class="material-icons left">input</i>Sair</a>
	</li>
</ul>

