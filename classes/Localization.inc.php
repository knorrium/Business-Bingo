<?php
class Localization {
	public $country;
	public $language;
	public $file;

	public function __construct($locale) {
		//TODO: The default locale might differ from the one set in the index file. Use an external file, perhaps?
		if ((strlen($locale) == 5) && (strpos($locale, '_') !== false)){
			$arr = explode("_", $locale);
			$this->language = $arr[0];
			$this->country = $arr[1];
			$file = "languages/" . $this->language . "_" . $this->country . ".inc.php";
			if (!file_exists($file)) {
				$this->file = "languages/en_US.inc.php";
			}
			else {
				$this->file = $file;
			}
		} else {
			$this->file = "languages/en_US.inc.php";
		}
	}
	 
	public function Translate($str) {
		//TODO: There must be a better way to do this.
		require $this->file;
		return ${$str};
	}
}
?>
