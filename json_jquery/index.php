<!DOCTYPE HTML>
	<html lang="en-US">

	<head>

		<meta charset="UTF-8">
		<title>GET METHOD</title>
		<?php include("header.php")?>
		<script type="text/javascript">			
			$(document).ready(function() {
				//get Person data 
				$.ajax({
					url: "getPerson.php",
					success: function(result){
						$("#users").html(result);
					}
				});
				
				//fill input boxes code...
				$("#users").change(function(){
					var name = "str="+$('#users option:selected').val();
					//alert(name);
					$.ajax({
						url: "getData.php",
						data: name,
						success: function(result){
							//conver JSON to array..
							resp = JSON.parse(result);  
							$("#id").val(resp[0].id);
							$("#lname").val(resp[0].lname);
							$("#email").val(resp[0].email);
							$("#job").val(resp[0].job);
							$("#addr").val(resp[0].addr);
						}
					});
				});
			});
		</script>
	</head>

	<body >

		<div class="container">
			
			<h2 class = "text-center">Horizontal form</h2>
			<hr>
			<form class="form-horizontal " action="/action_page.php" method = "get">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<input type="number" id="id" placeholder="ID">
						</div>
					</div>
				</div>
				<p id="demo"></p>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Fname-Name:</label>
					<div class="col-sm-6">
						<select class="form-control" id="users"></select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Last-Name:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="lname" placeholder="Enter last name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">E-mail:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="email" placeholder="Enter email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">job:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="job" placeholder="Enter job">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Address:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="addr" placeholder="Enter address">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-6 text-center">
						<button type="submit" class="btn btn-info ">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<p id="txtHint"></p>
	</body>

	</html>