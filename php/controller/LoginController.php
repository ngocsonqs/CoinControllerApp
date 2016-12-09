<?php
require "../dao/DBManeger.php";

class LoginController {
	private $username;
	
	function __construct($username) {
		$this->username = $username;
	}
	
	public function login() {
		$dbm = new DBManeger();
		$connection = $dbm->connect();
		echo "成功";
	}
}

$test = new LoginController("yoneda");
echo "ok";
$test->login();