<?php

class Conexao {    
     
    public function conectar() {
        $conexao = null;
        $servername = "localhost";
        $username = "root";
        $password = "bancodedados";
        $dbname = "bdhwi";    
            try {
                $this->$conexao = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
                
                   return $this->$conexao;
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }

    }
 
}
