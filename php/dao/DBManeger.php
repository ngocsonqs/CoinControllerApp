<?php
require_once("../../config/DBConfig.php");
/**
 * DB接続用クラス
 */
class DBManeger {
	function connect() {
		$dbh = null;
		$dsn = 'pgsql:dbname='.DB_NAME.' host='.DB_SERVER.' port='. PORT;
		echo $dsn;
		echo '<br>';
		try {
			$dbh = new PDO($dsn, DB_USER, DB_PASSWORD);
		} catch (PDOException $e) {
			print('Error:'.$e->getMessage());
		}
		return $dbh;
	}
}
