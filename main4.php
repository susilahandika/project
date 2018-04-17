<?php  

require_once("Laptop.php");
require_once("Chromebook.php");

$laptop_baru = new laptop();
$chromebook_baru = new Chromebook();

function booting_os($obj){
	return $obj->spec();
}

echo booting_os($laptop_baru);
echo booting_os($chromebook_baru);

?>