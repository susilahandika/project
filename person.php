<?php
class person{
	protected $nama;
	protected $alamat;
	protected $umur;
	
	public function __construct($nama_, $alamat_, $umur_){
		$this->nama = $nama_;
		$this->alamat = $alamat_;
		$this->umur = $umur_;
	}	
	
	public function set_nama($nama_){
		$this->nama = $nama_;	
	}
	
	public function set_alamat($alamat_){
		$this->alamat = $alamat_;	
	}
	
	public function set_umur($umur_){
		$this->umur = $umur_;	
	}
	
	public function get_nama(){
		return $this->nama;	
	}
	
	public function get_alamat(){
		return $this->alamat;	
	}
	
	public function get_umur(){
		return $this->umur;	
	}
	
	public function cetak_data(){
		echo "Nama : ".$this->nama."<br>";
		echo "Alamat : ".$this->alamat."<br>";
		echo "Umur : ".$this->umur."<br>";	
	}
	
}
?>