<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
class Cadastro {
private $nome,$sobrenome,$email, $senha,$sexo,$instituicao;


public function setNome($novo) {
		$this->nome = $novo;
}

public function getNome() {
	return $this->nome;
}
public function setSobrenome($novo) {
		$this->sobrenome = $novo;
}

public function getSobrenome() {
	return $this->sobrenome;
}
public function setEmail($novo) {
		$this->email = $novo;
}

public function getEmail() {
	return $this->email;
}
public function setSenha($novo) {
	$this->senha = $novo;
}

public function getSenha() {
	return $this->senha;
}
public function setSexo($novo) {
	$this->sexo = $novo;
}

public function getSexo() {
return $this->sexo;
}
public function setInstituicao($novo) {
	$this->instituicao = $novo;
}

public function getInstituicao() {
return $this->instituicao;
}

}

?>