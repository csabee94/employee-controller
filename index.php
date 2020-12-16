<!DOCTYPE html>
<html>
<head>
	<title>Employee Data Controller</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
	<main class="container">
		<h1 class="text-center">Welcome to the data management page!</h1>
		<div id="loading" class="text-center">
  			<strong>Loading datas...</strong>
  			<div class="spinner-border" role="status" aria-hidden="true"></div>
		</div>
		<table id="datatable" class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Birth date</th>
					<th>Gender</th>
					<th>Hire date</th>
					<th>Title</th>
					<th>Department</th>
					<th>Salary</th>
					<th>Operations</th>
				</tr>
			</thead>
			<tbody id="data">
			</tbody>
		</table>
	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="js/sender.js"></script>
</body>
</html>