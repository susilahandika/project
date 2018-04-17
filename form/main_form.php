<?php 
require('c_form.php'); 
$frm = new c_form();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
$frm->c_js('jquery-1.11.1.min');
$frm->c_js('js_form');
?>

</head>

<body>
<div id="out_form"></div>
<button id="btn_add">Tambah</button>
</body>
</html>