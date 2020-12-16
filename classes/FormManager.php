<?php
class FormManager {

	public function generateOptions($arr, $text, $value, $selected) {
		$result = "";
		foreach ($arr as $item) {
			if($item[$text] == $selected){
				$result .= "<option value='".$item[$value]."' selected='selected'>".$item[$text]."</option>";
			} else {
				$result .= "<option value='".$item[$value]."'>".$item[$text]."</option>";
			}
		}

		return $result;
	}

}