<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../Resources/Images/logo.png" type="image/x-icon" />
		<title>Cadastro de usuários</title>
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
			include_once 'logoNav.php';
		?>
					<br>
						<div class="row container">
							<form action="../Control/ControlCadTrabalho1.php" method="post" enctype = "multipart/form-data" class="col s12">
								<fieldset class = "formulario black">
									<h5 class="light" style="color: white" align="center">Cadastro de Usuários</h5>
								
									<?php
										if(isset($_SESSION['msg'])):
											echo $_SESSION['msg'];
											session_unset();
										endif;
									?>
								<div class = "input-field col s6">
											<input style="color: white" type="text" name="login" id="login" maxlength="40" required>
												<label for="login">Login</label>
									</div>
									
									<div class = "input-field col s6">
											<input style="color: white" type="password" name="senha" id="senha" maxlength="40" required>
												<label for="senha">Senha</label>
									</div>
									
									<div class = "input-field col s6">
											<input style="color: white" type="text" name="nome" id="nome" maxlength="40" required>
											<label for="nome">Nome</label>
									</div>
									
									<div class = "input-field col s6">
											<input style="color: white" type="email" name="email" id="email" maxlength="40" required>
												<label for="email">E-mail</label>
									</div>
									
									<div class = "input-field col s12">
											<input style="color: white" type="url" name="lattes" id="lattes" maxlength="40" required>
												<label for="email">Currículo Lattes</label>
									</div>
									
									<div class = "input-field col s6">
											<select class="browser-default input-field col s11 right" name = "area">
												<option selected>Selecione sua área</option>
												<option value="Sociologia">Sociologia</option>
												<option value="Filosofia">Filosofia</option>
												<option value="Historia">História</option>
												<option value="Geografia">Geografia</option>
												<option value="Fisica">Física</option>
												<option value="Astronomia">Astronomia</option>
												<option value="Saúde">Saúde</option>
												<option value="Linguagens">Linguagens</option>
												<option value="Matematica">Matemática</option>
												<option value="Tecnologia">Tecnologia</option>
												<option value="Biologia">Biologia</option>
												<option value="Quimica">Química</option>
											</select>
									</div>
									
									<div class = "input-field col s6">
											<input style="color: white" type="text" name="subarea" id="subarea" maxlength="40" required>
												<label for="email">Digite sua sub-área</label>
									</div>
									
									<div class = "input-field col s12 center">
											<input type="submit" value="cadastrar" name="acao" id="cadastar" class = "btn blue">
											<input type="reset" value="limpar" class = "btn red">
											<input type="cancel" value="cancelar" class = "btn grey">
									</div>						
								</fieldset>
							</form> 
						</div>
    </body>
</html>
