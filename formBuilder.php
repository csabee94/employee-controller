<?php
require('classes/Database.php');
require('classes/FormManager.php');
$database = new Database();
$formManager = new FormManager();

$titles = "";
$departments = "";

$database->query("
	SELECT
		e.first_name,
		e.last_name,
	    e.birth_date,
		(CASE WHEN
			e.gender = 'M' THEN 'Male'
		ELSE
			'Female'
		END) as gender,
		e.hire_date,
		t.title,
		d.dept_name,
		d.dept_no,
		s.salary,
	    e.emp_no
	FROM
		employees e
	JOIN
		current_dept_emp cde
	ON
		e.emp_no = cde.emp_no
	JOIN
		departments d
	ON
		cde.dept_no = d.dept_no
	JOIN
		salaries s
	ON
		e.emp_no = s.emp_no AND s.to_date = cde.to_date
	JOIN
		titles t
	ON
		e.emp_no = t.emp_no AND t.to_date = cde.to_date
	WHERE
		e.emp_no = ".$empNo."
");
$rows = $database->resultset();

foreach ($rows as $row) {
	$firstName = $row['first_name'];
	$lastName = $row['last_name'];
	$birthDate = $row['birth_date'];
	$gender = $row['gender'];
	$hireDate = $row['hire_date'];
	$title = $row['title'];
	$department = $row['dept_name'];
	$deptNo = $row['dept_no'];
	$salary = $row['salary'];
}

// Render titles dropdown list
$database->query("SELECT DISTINCT title as titles FROM titles ORDER BY title ASC");
$rows = $database->resultset();
$titles = $formManager->generateOptions($rows,"titles","titles",$title);

// Render departments dropdown list
$database->query("SELECT dept_no, dept_name FROM departments ORDER BY dept_name ASC");
$rows = $database->resultset();
$departments = $formManager->generateOptions($rows,"dept_name","dept_no",$department);