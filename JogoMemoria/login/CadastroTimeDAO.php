<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
require_once "BD.php";
require_once "TimeCadastro.php";

class CadastroTimeDao {
    private $conexao;

    public function __construct() {
        $this->conexao = new DataSource("professor");
    }

    public function inserir($novo) {
        $sql = "INSERT INTO Time(Nome,Integrantes) VALUES(?, ?)";
        $stm = mysqli_prepare($this->conexao->getCon(), $sql);
        if(!$stm) {
            die("Falha no comando SQL");
        }
        $nome = $novo->getNome();
        $sobrenome = $novo->getIntegrantes();
                
        if(!$stm->bind_param("ss", $nome, $integrantes)) {
            die("Falha na atribuicao de valores");
        }
        return $stm->execute();  
    }

    function __destruct() {
        $this->conexao = null;
    }

}

?>