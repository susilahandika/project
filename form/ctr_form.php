<?php
require('c_form.php');
$op = isset($_GET['op']) ? $_GET['op'] : '';

$frm = new c_form();

switch($op){
	case 'addTextBox' : 
		$frm->c_inp_textbox('text', 'input[]', 'input[]', '');
	break;
}
?>