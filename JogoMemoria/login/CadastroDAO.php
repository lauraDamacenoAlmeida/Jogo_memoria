<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
require_once "BD.php";
require_once "ProfessorCadastro.php";

class CadastronDao {
    private $conexao;

    public function __construct() {
        $this->conexao = new DataSource("teste1");
    }

    public function inserir($novo) {
        $sql = "INSERT INTO professor(Nome,Sobrenome,email, Senha,sexo,Instituicao) VALUES(?, ?, ?, ?, ?,?)";
        $stm = mysqli_prepare($this->conexao->getCon(), $sql);
        if(!$stm) {
            die("Falha no comando SQL");
        }
        $nome = $novo->getNome();
        $sobrenome = $novo->getSobrenome();
        $email = $novo->getEmail();
        $senha = $novo->getSenha();
        $sexo = $novo->getSexo();
        $instituicao = $novo->getInstituicao();
                
        if(!$stm->bind_param("ssssss", $nome, $sobrenome, $email, $senha, $sexo,$instituicao)) {
            die("Falha na atribuicao de valores");
        }
        return $stm->execute();  
    }

    function __destruct() {
        $this->conexao = null;
    }

}

?>