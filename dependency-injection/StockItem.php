<?php 

class StockItem{
	private $quantity;
	private $status;

	public function __construct($quantity, $status){
		$this->quantity = $quantity;
		$this->status = $status;
	}

	public function getQty(){
		return $this->quantity;
	}

	public function getStatus(){
		return $this->status;
	}
}