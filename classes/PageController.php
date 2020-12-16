<?php

class pageController {
	public function goToUrl($url) {
		header("Location: " . $url);
	}

	public function refreshPage() {
		header("Location: ".$_SERVER['REQUEST_URI']);
	}

	public function alertMessage($message) {
		echo "<script>alert('".$message."');</script>";
	}

	public function alertMessageWithRedirection($message, $url) {
		echo "<script>
			alert('".$message."');
			window.location.href='".$url."';
		</script>";
	}
}