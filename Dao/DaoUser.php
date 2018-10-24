<?php
	require_once '../Model/User.php';
	require_once 'Conexao.php';
	
	class DaoUser{
		public function inserir(User $user) {
					//var_dump($avaliador);
			try {
				
				$sql = "INSERT INTO `user`(`login`, `senha`, `nome`, `email`, `lattes`, `area`, `subarea`) VALUES (?,?,?,?,?,?,?)";
				$conex = new Conexao();
				$conexao__ = $conex->conectar();
									
				$p_sql = $conexao__->prepare($sql);
									
				$p_sql->bindParam(1, $user->getLogin());
				$p_sql->bindParam(2, $user->getSenha());  				   		

				$p_sql->bindParam(3, $user->getNome());
				$p_sql->bindParam(4, $user->getEmail());
				$p_sql->bindParam(5, $user->getLattes());
				
				$p_sql->bindParam(6, $user->getArea());
				$p_sql->bindParam(7, $user->getSubArea());
						 
				$p_sql->execute();
						
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
				GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage());
			}
		}
	}
?>

