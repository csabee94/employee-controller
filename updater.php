<?php
require("classes/FileWriter.php");
require("classes/PageController.php");

$fileWriter = new FileWriter("employees.json");
$pageController = new PageController();

if(isset($_POST['modify'])){
	$updateQuery = "BEGIN;
		UPDATE employees SET first_name = :firstName, last_name = :lastName, hire_date = :hireDate WHERE emp_no = :empNo;
		UPDATE titles SET title = :formTitle WHERE emp_no = :empNo AND title = :title;
		UPDATE dept_emp SET dept_no = :formDeptNo WHERE emp_no = :empNo AND dept_no = :deptNo;
		UPDATE dept_manager SET dept_no = :formDeptNo WHERE emp_no = :empNo AND dept_no= :deptNo;
		UPDATE salaries SET salary = :formSalary WHERE emp_no = :empNo AND salary = :salary;
	COMMIT;";
	
	$database->query($updateQuery);
	$database->bind(':firstName', $_POST['firstName']);
	$database->bind(':lastName', $_POST['lastName']);
	$database->bind(':hireDate', $_POST['hireDate']);
	$database->bind(':empNo', $empNo);
	$database->bind(':formTitle', $_POST['title']);
	$database->bind(':title', $title);
	$database->bind(':formDeptNo', $_POST['department']);
	$database->bind(':deptNo', $deptNo);
	$database->bind(':salary', $salary);
	$database->bind(':formSalary', $_POST['salary']);
	$database->execute();

	// Delete json with the old datas
	$fileWriter->deleteFile();

	// Refresh page to see the new modifications
	$pageController->refreshPage();
}

if(isset($_POST['delete'])) {
	$deleteQuery = "DELETE FROM employees WHERE emp_no = :empNo";
	$database->query($deleteQuery);
	$database->bind(':empNo', $empNo);
	$database->execute();

	$fileWriter->deleteFile();

	$pageController->alertMessageWithRedirection("Employee ".$firstName." ".$lastName." deleted!","index.php");
}
