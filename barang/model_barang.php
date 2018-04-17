<?php
require('koneksi.php');

class model_barang{
	private $barang;
	
	public function __construct(){
		$konek = new koneksi();
		$konek->set_koneksi();	
	}
	
	public function get_brg($sql){
		try{
			$output = mssql_query($sql);
			
			return $output;
		}catch(Exception $e){
			return $e->getMessage();
		}	
	}	
}
?>