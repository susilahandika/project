$(document).ready(function(e) {
    $('#btn_add').click(function(){
		
		var dataproses = {
			op : "addTextBox"
		};
		
		$.ajax({
			type : "GET",
			url : 'ctr_form.php',
			data : dataproses,
			success: function(result){
				$("#out_form").append(result);
			}	
		});		
	});
});