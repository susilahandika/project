<?php
class koneksi{
	private $server;
	private $username;
	private $password;
	private $db;
	private $con;
	
	public function __construct(){
		$this->server = 'IT5\SQLEXPRESS';
		$this->username = 'sa';
		$this->password = '123456';
		$this->db = 'master';
	}		
	
	public function set_koneksi(){
		$this->con = null;
		try{
			$this->con = mssql_connect($this->server, $this->username, $this->password);
			if($this->con){
				mssql_select_db($this->db);
			}
		}catch(Exception $e){
			echo 'Koneksi Error : '.$e->getMessage();	
		}
	}
}
?>