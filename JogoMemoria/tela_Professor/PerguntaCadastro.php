<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
class Cadastro {
private $Pergunta,$Resposta_a,$Resposta_b, $Resposta_c,$Resposta_d,$Resposta_correta;


public function setPergunta($novo) {
		$this->Pergunta = $novo;
}

public function getPergunta() {
	return $this->Pergunta;
}
public function setResposta_a($novo) {
		$this->Resposta_a = $novo;
}

public function getResposta_a() {
	return $this->Resposta_a;
}
public function setResposta_b($novo) {
		$this->Resposta_b = $novo;
}

public function getResposta_b() {
	return $this->Resposta_b;
}
public function setResposta_c($novo) {
	$this->Resposta_c = $novo;
}

public function getResposta_c() {
	return $this->Resposta_c;
}
public function setResposta_d($novo) {
	$this->Resposta_d = $novo;
}

public function getResposta_d() {
return $this->Resposta_d;
}
public function setResposta_correta($novo) {
	$this->Resposta_correta = $novo;
}

public function getResposta_correta() {
return $this->Resposta_correta;
}

}

?>