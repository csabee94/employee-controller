<?php

class FileWriter {
	private $fileName;
	private $content;

	public function __construct($fileName) {
		$this->fileName = $fileName;
	}

	public function setFileContent($content) {
		$this->content = $content;
	}

	public function encodeJSONContent() {
		return json_encode($this->content);
	}

	public function writeToFile($content) {
		$fp = fopen($this->fileName,'w');
		fwrite($fp, $content);
		fclose($fp);
	}

	public function deleteFile(){
		unlink($this->fileName);
	}
}