<?php
require('model_barang.php');

$op = isset($_GET['op']) ? $_GET['op'] : '';

switch($op){
	case 'tampil_data' : 
		$m_barang = new model_barang();

		$data = $m_barang->get_brg('select * from barang a');
		while ($row = mssql_fetch_object($data)){
			echo $row->id_barang." - ".$row->nama_brg."<br>";	
		}	
	break;
}
?>