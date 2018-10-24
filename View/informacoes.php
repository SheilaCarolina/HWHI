<div class="row">	
	<font face = "Didot, serif" color = "white">
		Olá, 
		<?php
		if(isset($_SESSION['nome'])):	
			echo "dasd".$_SESSION['nome']."!<br><i>E-mail</i>:".$_SESSION['email']."<br>Lattes:<a>".$_SESSION['lattes']."</a><br>Área:".$_SESSION['area']."
					<br>Sub área:".$_SESSION['subarea']."</font>";
		endif;
		?>
	</font>
</div>
