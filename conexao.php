<?php

class Conexao {

	private $host = 'us-imm-web539.main-hosting.eu';
	private $dbname = 'u308103531_php_com_pdo';
	private $user = 'u308103531_root';
	private $pass = 'Ninabolota280401vai25@28';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>