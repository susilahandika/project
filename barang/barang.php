<?php
require ('form_id.php');
$frm_id = new form_id();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $frm_id->get_title(); ?></title>

<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $('#dt_brg').load('control_barang.php?op=tampil_data');
});
</script>

</head>

<body>
<div id="dt_brg"></div>
</body>
</html>