<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=br582.hostgator.com.br;dbname=maquii22_rrdocs;charset=utf8",
				"maquii22_rrdocs",
				"Vt@Y3bLTmS@VVt@Y3bLTmS@V" 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>