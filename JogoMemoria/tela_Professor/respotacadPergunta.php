<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
require_once 'CadastroPerguntaDAO.php';

$obj = new Cadastro();
$obj->setPergunta($_POST['pergunta']);
$obj->setPergunta_a($_POST['pergunta_a']);
$obj->setPergunta_b($_POST['pergunta_b']);
$obj->setPergunta_c($_POST['pergunta_c']);
$obj->setPergunta_d($_POST['pergunta_d']);
$obj->setPergunta_correta($_POST['pergunta_correta']);

$banco = new CadastronDao();
if ($banco->inserir($obj)) {
    echo "<script>alert('Pergunta Cadastro realizado com sucesso!')</script>";
    //echo("<script>window.location='../tela_Professor/menu_professor.html'</script>");

} else {
    echo "<script>alert('Ixi Sem Perguntas, parece que estamos com problema, tente novamente mais tarde!')</script>";
}
?>