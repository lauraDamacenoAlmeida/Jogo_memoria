
<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
	include 'CadastroTimeDao.php';
	$obj = new CadastroTime();
	$obj->setEmail($_POST['nome']);
	$obj->setSenha($_POST['integrantes']);


	$banco = new CadastroTimeDao();
	if ($banco->inserir($obj)) {
    	echo "<script>alert('Time de duelistas cadastrado')</script>";
    	echo("<script>window.location='instrucoes.html'</script>");

	} else {
    	echo "<script>alert('Ixi, parece que estamos com problema, tente novamente mais tarde!')</script>";
		echo("<script>window.location='sala.html'</script>");

}
?>
