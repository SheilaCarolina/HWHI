<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../Resources/Images/logo.png" type="image/x-icon" />
		<title>Quem soomos?</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
		<link type="text/css" rel="stylesheet" href="../Resources/CSS/layoutGeral.css" />  
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
					
		<!--Arquivos JQuery e Java Script-->
		<script type = "text/javascript" src="../materialize/js/jquery-3.3.1.min.js">				  
		</script>
		<script type="text/javascript" src="../materialize/js/materialize.min.js">
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.sidenav').sidenav();
			});
			$(document).ready(function(){
				$('.collapsible').collapsible();
			});
		</script>	
		 
	</head>

	<body>
		<?php
			if(isset($_SESSION['idUsuario'])){
				include_once "navUser.php";
			}else{
				include_once "logoNav.php";
			}
		?>
		<br>
		<div class="row container">
			<fieldset class = "formulario black">
				<h5 class="light" style="color: white" align="center">
					A plataforma colaborativa HWHI é 'alimentada' por pesquisadores brasileiros cadastrados na plataforma Lattes do CNPQ,
					na qual todos podem contribuir com sua especialidade para os fenômenos, características, informações sobre a Terra e também outros planetas!
					Venha contribuir também! 
					<p>
						<a href = "cadUser.php">
							Cadastre-se.
						</a>
					</p>
				</h5>
			</fieldset>
		</div>
    </body>
</html>
