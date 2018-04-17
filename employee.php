<?php
require ("person.php");

class employee extends person{
	private $jabatan;
	private $gapok;
	
	public function __construct($nama_, $alamat_, $umur_, $jabatan_, $gapok_){
		parent::__construct($nama_, $alamat_, $umur_);
		$this->jabatan = $jabatan_;
		$this->gapok = $gapok_;
	}	
	
	public function cetak_employee(){
		parent::cetak_data();
		echo "Jabatan : ".$this->jabatan."<br>";
		echo "Gapol : ".$this->gapok."<br>";	
	}
}
?>