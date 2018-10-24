function editarUsuario(idUsuario){
		window.location.href = "../View/editUsuario.php?idUsuario="+idUsuario;
	}
function salvarAltSenha(idUsuario, senha){
	window.location.href = "../Control/ControlUsuario.php?editSenha(idUsuario = "+idUsuario+"&senha = "+senha+")";
}

function cadastrarUsuario(login, senha,nome, endereco, telefone, tipoUsuario, status){
	window.location.href = "../Control/ControlUsuario.php?cadastrarUsuario(idUsuario = "+idUsuario+"&senha = "+senha+")";
}
