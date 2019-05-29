<?php
/* 
 *Codigo para testar a conexao com o BD
 */
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
include "BD.php";

$banco = new DataSource("professor");

if ($banco->getCon()->connect_error) {
    exit("Erro de conexao ao BD");
}

echo '<h1>Conexao Efetuada</h1>';
?>

