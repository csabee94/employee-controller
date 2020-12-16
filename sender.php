<?php

require("classes/Database.php");
require("classes/FileReader.php");
require("classes/FileWriter.php");

$filenameJSON = "employees.json";
$filenameSQL = "employees_query.sql";
$json = "";
$sql = "";
$database = new Database();
$fileReader = new FileReader($filenameJSON);
$fileWriter = new FileWriter($filenameJSON);

if(file_exists($filenameJSON)){
	$json = $fileReader->readFromFile();
} else {
	// Get datas from sql
	$sql = file_get_contents($filenameSQL);
	$database->query($sql);
	$rows = $database->resultset();

	// Write into json file
	$fileWriter->setFileContent($rows);
	$json = $fileWriter->encodeJSONContent();
	$fileWriter->writeToFile($json);
}

echo $json;
