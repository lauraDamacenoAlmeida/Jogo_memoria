
<?php
/* 
 * Gabriel Nascimento RA:21022939
 * Henrique Vitoriano RA:21012566
 * Jackson Nascimento RA:21022770
 * Laura Damaceno RA:20964736
 */
class DataSource {
    private $con;

	function __construct($dbnome) {
		$server = "localhost";
		$user = "root";
		$pass = "";

		$this->con = new mysqli($server, $user, $pass,$dbnome);

		if($this->con->connect_error) {
				die("<h1>Falha na Conexao com o BD</h1>");
			}
        }
		function getCon() {
			return $this->con;
		}

		function __destruct() {
			$this->con->close();
		}
	}
    ?>