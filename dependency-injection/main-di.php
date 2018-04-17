<?php 

spl_autoload_register();

$dataStock = new StockItem(10, 'active');
$produk = new Product(122343, $dataStock);

echo "Stock : ".$produk->getStockItem()."<br>";
