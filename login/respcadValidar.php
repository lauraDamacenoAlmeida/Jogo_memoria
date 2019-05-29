<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
require_once 'Validalogin.php';

$obj = new Login();
$obj->setEmail($_POST['email']);
$obj->setSenha($_POST['senha']);

$banco = new ValidarDAO();


if(!$banco->Validar($obj)){
    echo"<script>alert('Dados incorretos')</script>";
	echo "<script>window.location='index.html'</script>";
    
}
else{
    echo "<script>window.location='../tela_Professor/menu_professor.html'</script>";
}
?>

