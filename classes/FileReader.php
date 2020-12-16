<?php

class FileReader{
	private $source;

	public function __construct($source) {
		$this->source = $source;
	}

	public function readFromFile() {
		$json = file_get_contents($this->source);
		return $json;
	}
}