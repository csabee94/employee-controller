<!DOCTYPE html>
<html>
<head>
	<?php
		$empNo = $_GET['emp_no'];
		require('formBuilder.php');
	?>
	<title><?php echo $firstName." ".$lastName; ?> | Personal Data</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css" />
	<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
	<main class="container col-6">
		<h3 class="text-center">Personal data</h3>
		<form method='POST' action="<?php $_SERVER['PHP_SELF']; ?>" >
			<?php
				include_once("forms/personalData.php");
			?>
		</form>
		<?php
			require('updater.php');
		?>
	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>
</body>
</html>