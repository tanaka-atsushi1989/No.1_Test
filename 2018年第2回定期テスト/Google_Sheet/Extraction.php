<?php
$url = "https://sheets.googleapis.com/v4/spreadsheets/11BCnspCt2Mut3nhc4WMY6CYTd0zF9C3eCzsk1AEpKLM/values/sales!A1:E6?fields=values&key=";

$data = file_get_contents($url);

$data = json_decode($data);
$i = 0;

foreach ($data->values as $values) {
    foreach ($values as $value) {
    	
		$value = mb_convert_encoding($value,"sjis-win","auto");
		echo "'";
		echo $value;
		echo "'";
		echo ",";
		
		$i++;
		if($i % 5 == 0) {
			echo "\n";
		}
	}
}

?>
