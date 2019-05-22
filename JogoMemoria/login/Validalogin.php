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
    $this->conexao = new DataSource("teste1");
    
    }
    
public function Validar() {

        $email ->getEmail();
        $senha ->getSenha();
        $sql = "SELECT email,senha FROM professor WHERE email= $email AND senha=$senha";
        echo "$sql";
        $stm = mysqli_prepare($this->conexao->getCon(), $sql);

        $query = $stm->execute(); 
        if (mysql_num_rows($query) != 1) {
            echo "<script>alert('Login inválido')</script>";
            exit;
        } else {
// Salva os dados encontados na variável $resultado
            $resultado = mysql_fetch_assoc($query);
            echo("<script>window.location='../tela_Professor/menu_professor.html'</script>");
        }
    }       
}
?>