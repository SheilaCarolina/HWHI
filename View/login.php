<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../Resources/Images/logo.png" type="image/x-icon" />
		<title>Login</title>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="../Resources/CSS/layoutGeral.css"  media="screen,projection"/>
      
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--Arquivos JQuery e Java Script-->
		<script typr = "text/javascript" src="../materialize/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
		<!--Inicialização JQuery-->
		<script type="text/javascript">
			$(document).ready(function(){				
			});
			
			$(document).ready(function(){
				$('.slider').slider();
			  });
			  
			$(document).ready(function(){
				$('.carousel').carousel();
			  });
		</script>
    </head>

    <body>
		<?php
				include_once "logoNav.php";
		?>
		<br>
		<div class="row">
			<div class="col s4 center"></div>
		  <div class="col s5">
					<div>
						<form action="../Control/validacao.php" method="post" enctype = "multipart/form-data" class="center-align">
							<fieldset class = "formulario black" style="width: 50%; position: absolute;">
								<?php
									if(isset($_SESSION['msg'])):
										echo $_SESSION['msg'];
										session_unset();
									endif;
								?>
								<div class = "input-field">
										<input  style="color: white" type="text" name="login" id="login" maxlength="40" required>
											<label for="nome">Login</label>
								</div>
								
								<div class = "input-field">
										<input  style="color: white" type="password" name="senha" id="senha" maxlength="40" required>
											<label for="senha">Senha</label>
								</div>
								
								<div class = "input-field">
										<input type="submit" value="Entrar" class = "btn red">
										<a href = "cadUser.php">Não sou cadastrado!</a>
								</div>
							</fieldset>
						</form> 
					</div>
		  </div>
		</div>	
    </body>
</html>
        
