<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to CodeIgniter</title>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
		


		<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
		</style>
	</head>

	<body>
		<div id="container">
			<h1>Welcome to CodeIgniter!</h1>

			<div id="body">
				<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

				<p>If you would like to edit this page you'll find it located at:</p>
				<code>application/views/welcome_message.php</code>

				<p>The corresponding controller for this page is found at:</p>
				<code>application/controllers/Welcome.php</code>

				<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
			</div>

			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

			<!-- Database Populated Table -->
			<table id="main_table" class="display" style="width:100%">
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Age</th>
						<th>Id</th>
					</tr>
				</thead>
					
				<tfoot>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Age</th>
						<th>Id</th>
					</tr>
				</tfoot>
			</table>

			<!-- Forms Container -->
			<div style="display:inline">
				<!-- Form to add users to the database -->
				<form action="<?php echo site_url("welcome/add_new_person")?>" method="post" style="padding-left:20%;">
					<div class="form-group" style="width:30%;">
						<label for="AddTitleLabel">Add Person To Database</label><br/>
						<label for="FirstNameLabel">First Name&nbsp;</label><input type="text" name="first_name"/><br/>
						<label for="LastNameLabel">Last Name&nbsp;</label><input type="text" name="last_name"/><br/>
						<label for="AgeLabel">Age&nbsp;</label><input type="number" name="age"/><br/>
						<label for="AddIDLabel">ID&nbsp;</label><input type="number" name="id"/><br/>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>

				<!-- Form to remove user from the database by id -->
				<form action="<?php echo site_url('welcome/remove_person')?>" method="post" style="padding-left:20%;">
					<div class="form-group" style="width:30%;">
						<label for="DeleteTitleLabel">Delete Person From Database</label><br/>
						<label for="DeleteIDLabel">ID&nbsp;</label><input type="number" name="id"/><br/>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>

			<!-- Load the DataTables via jQuery -->
			<script type="text/javascript">
				$(document).ready(function(){
					var dataTable = $('#main_table').DataTable({
						"ajax":{
								url:"<?php echo site_url("welcome/people_page") ?>",
								type:"GET"
						},
					});
				});
			</script>

			 
		</div>
	</body>
</html>