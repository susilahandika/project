<?php
class c_form{
	public function c_inp_textbox($type_, $name_, $id_, $class_){
		echo '<div><input type="'.$type_.'" name="'.$name_.'" id="'.$id_.'" class="'.$class_.'" /></div>';	
	}	
	
	public function c_js($name_){
		echo '<script type="text/javascript" src="'.$name_.'.js"></script>';	
	}
}
?>