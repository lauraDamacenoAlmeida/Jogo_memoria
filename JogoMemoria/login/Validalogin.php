<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
include "BD.php";
include "ProfessorLogin.php";
class ValidarDAO {

    private $conexao;

    public function __construct() {
        echo "olaaa";
    $this->conexao = new DataSource("professor");
    
    }
    
public function Validar($novo) {
    echo 'blabla';
        $email = $novo->getEmail();
        $senha = $novo->getSenha();
        $sql = "SELECT email,senha FROM professor WHERE email= ? AND senha=?";
        echo "$sql";

        $stm = mysqli_prepare($this->conexao->getCon(), $sql);
        if(!$stm->bind_param("ss", $email,$senha)){
            die("Falha na atribuição de valores");
        }
        if(!$stm->execute()){
            die("Falha na execução do SQL");
        }
        $result = $stm->get_result();
        if($result->num_rows ==0){
            return false;
        }else{
            echo 'foi';
            return true;
        }
    }      
}
?>