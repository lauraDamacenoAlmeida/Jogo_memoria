<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
require_once 'CadastroDao.php';

$obj = new Cadastro();
$obj->setNome($_POST['nome']);
$obj->setSobrenome($_POST['sobrenome']);
$obj->setEmail($_POST['email']);
$obj->setSenha($_POST['senha']);
$obj->setSexo($_POST['sexo']);
$obj->setInstituicao($_POST['instituicao']);

$banco = new CadastronDao();
if ($banco->inserir($obj)) {
    echo "<script>alert('Cadastro realizado com sucesso!')</script>";
    echo("<script>window.location='../tela_Professor/menu_professor.html'</script>");

} else {
    echo "<script>alert('Ixi, parece que estamos com problema, tente novamente mais tarde!')</script>";
}
?>