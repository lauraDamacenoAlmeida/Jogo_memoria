<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
require_once "BD.php";
require_once "PerguntaCadastro.php";

class CadastroPerguntaDao {
    private $conexao;

    public function __construct() {
        $this->conexao = new DataSource("teste1");
    }

    public function inserir($novo) {
        $sql = "INSERT INTO professor(Perguntas, Resposta_a, Resposta_b, Resposta_c, Resposta_d, Resposta_correta) VALUES(?, ?, ?, ?, ?,?)";
        $stm = mysqli_prepare($this->conexao->getCon(), $sql);
        if(!$stm) {
            die("Falha no comando SQL");
        }
        $nome = $novo->getPerguntas();
        $sobrenome = $novo->getResposta_a();
        $email = $novo->getResposta_b();
        $senha = $novo->getResposta_c();
        $sexo = $novo->getResposta_d();
        $instituicao = $novo->getResposta_correta();
                
        if(!$stm->bind_param("ssssss", $Perguntas, $Resposta_a, $Resposta_b, $Resposta_c, $Resposta_d,$Resposta_correta)) {
            die("Falha na atribuicao de valores");
        }
        return $stm->execute();  
    }

    function __destruct() {
        $this->conexao = null;
    }

}

?>