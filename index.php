<?php 
require 'UnitConverter.php';

$convert = new UnitConverter();
$units = json_decode($convert->getUnit());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unit Converter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	  	<div class="container">
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="#">Unit Converter</a>
	    	</div>
	  	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
				  	<label for="number">Enter your number:</label>
				  	<input type="text" class="form-control" id="number" name="number">
				</div>
				<div class="form-group">
				  	<label for="from">From:</label>
				  	<select class="form-control" id="from">
				  		<?php foreach($units as $unit => $unit_data){?>
				    		<option value="<?php echo $unit;?>"><?php echo $unit_data->name;?></option>
				    	<?php }?>
				  	</select>
				</div>
				<div class="form-group">
				  	<label for="to">To:</label>
				  	<select class="form-control" id="to">
				    	<?php foreach($units as $unit => $unit_data){?>
				    		<option value="<?php echo $unit;?>"><?php echo $unit_data->name;?></option>
				    	<?php }?>
				  	</select>
				</div>
				<button class="btn btn-primary" id="submit">Convert</button>
				<hr>
				<div class="panel panel-default">
				  	<div class="panel-body" id="output"></div>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</body>
</html>
<script>
$("#submit").click(function(){
	var number=$("#number").val();
	var from=$("#from").val();
	var to=$("#to").val();
	$.post("api.php",
	{
		number:number,
		from:from,
		to:to
	},function(data){
		$("#output").html(data);
	});
});

$('#number').keypress(function(e){
    if(e.which == 13){
        $('#submit').click();
    }
});
</script>