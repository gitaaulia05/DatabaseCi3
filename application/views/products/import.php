<!DOCTYPE html>
<html>
<head>
	<title>Import Excel</title>

	<script src="<?php echo base_url(); ?>asset/jquery.min.js"></script>
</head>

<body>

	<div class="container">
		<br />
		<h3 align="center">IMPORT EXCEL KE DATABASE CODEIGNITER</h3>

		<form method="post" id="import_form" enctype="multipart/form-data">
			<p><label>Select Excel File</label>
			<input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
			<br />

			<input type="submit" name="import" value="Import" class="btn btn-info" />
           

		</form>
		<br />

		<div class="table-responsive" id="customer_data">

    

		</div>


	</div>
</body>
</html>

<script>
$(document).ready(function(){

	load_data();

	function load_data()
	{
		$.ajax({
			url:"<?php echo base_url(); ?>ProductController/fetch2",
			method:"POST",
			success:function(data){
				$('#customer_data').html(data);
			}
		})
	}

	$('#import_form').on('submit', function(event){
		event.preventDefault();
		$.ajax({
			url:"<?php echo base_url(); ?>ProductController/import",
			method:"POST",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data){
				$('#file').val('');
				// load_data();
				alert(data);
			}
		})
	});

});
</script>