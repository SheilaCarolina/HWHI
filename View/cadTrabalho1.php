<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../Resources/Images/logo.png" type="image/x-icon" />
		<title>Cadastro de trabalhos</title>
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
			include_once 'navUser.php';
		?>
					<br>
						<div class="row container">
							<form action="../Control/ControlCadTrabalho1.php" method="post" enctype = "multipart/form-data" class="col s12">
								<fieldset class = "formulario black">
									<h5 class="light" style="color: white" align="center">O que é a vida?</h5>
								
									<?php
										if(isset($_SESSION['msg'])):
											echo $_SESSION['msg'];
										endif;
									?>
									<div class = "input-field col s12">
											<input style="color: white" type="text" name="titulo" id="titulo" maxlength="500" required>
												<label for="titulo">Título</label>
									</div>
									
									<div class = "input-field col s12">
										<textarea style="color: white" name = "resumo" rows = "5" cols = "12" placeholder = "Resumo do seu trabalho" required></textarea>
									</div>
									
									<div class = "input-field col s4">
										<input style="color: white" type="file" name="arquivo" id="arquivo" maxlength="40" required>
									</div>
									
									<div class = "input-field col s4">
											<select class="browser-default input-field col s11 right" name = "area">
												<option selected>Selecione a área do seu trabalho</option>
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
									
									<div class = "input-field col s4">
											<input style="color: white" type="text" name="subarea" id="subarea" maxlength="40" required>
												<label for="text">Digite a sub-área do seu trabalho</label>
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
