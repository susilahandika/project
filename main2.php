<?php
require("komputer.php");

$laptopku = new laptop("ASUS", "Intel", "2gb");
$laptopku->beli_komputer();
$laptopku->get_data_laptop();
?>