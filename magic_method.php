<?php
class magic_method{
	private $nim;
	private $nama;
	
	function __get($property){
		if(property_exists($this, $property)){
			return $this->property;	
		}
		else{
			return 'Property tidak ada';	
		}
	}	
	
	function __set($property, $value){
		$this->property = $value;	
	}
}

$m_method = new magic_method();

$m_method->nim = 12345;
echo 'NIM : '.$m_method->nim;
?>