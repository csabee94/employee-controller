<?php
echo "<div class='form-group row'>
	<label for='firstName' class='col-4 col-form-label'>First name</label>
	<div class='col-8'>
		<input type='text' class='form-control' id='firstName' name='firstName' value='".$firstName."'>
	</div>
</div>
<div class='form-group row'>
	<label for='lastName' class='col-4 col-form-label'>Last name</label>
	<div class='col-8'>
		<input type='text' class='form-control' id='lastName' name='lastName' value='".$lastName."'>
	</div>
</div>
<div class='form-group row'>
	<label for='birthDate' class='col-4 col-form-label'>Birth date</label>
	<div class='col-8'>
		<input type='text' class='form-control' id='birthDate' name='birthDate' value='".$birthDate."' readonly>
	</div>
</div>
<div class='form-group row'>
	<label for='gender' class='col-4 col-form-label'>Gender</label>
	<div class='col-8'>
		<input type='text' class='form-control' id='gender' name='gender' value='".$gender."' readonly>
	</div>
</div>
<div class='form-group row'>
	<label for='hireDate' class='col-4 col-form-label'>Hire date</label>
	<div class='col-8'>
		<input type='text' class='form-control datepicker' id='hireDate' name='hireDate' value='".$hireDate."'>
	</div>
</div>
<div class='form-group row'>
	<label for='title' class='col-4 col-form-label'>Title</label>
	<div class='col-8'>
		<select class='form-control' id='title' name='title'>
		".$titles."						
		</select>
	</div>
</div>
<div class='form-group row'>
	<label for='department' class='col-4 col-form-label'>Department</label>
	<div class='col-8'>
		<select class='form-control' id='department' name='department'>
		".$departments."
		</select>
	</div>
</div>
<div class='form-group row'>
	<label for='salary' class='col-4 col-form-label'>Salary</label>
	<div class='col-8'>
		<input type='text' class='form-control' id='salary' name='salary' value='".$salary."'>
	</div>
</div>
<input type='submit' class='btn btn-primary btn-sm col-4' id='modify' name='modify' value='Modify datas'>
<input type='submit' class='btn btn-danger btn-sm col-4' id='delete' name='delete' value='Delete employee'>
<a href='index.php' class='btn btn-dark btn-sm col-3'>Back</a>";