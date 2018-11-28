<?php
$url = "https://sheets.googleapis.com/v4/spreadsheets/11BCnspCt2Mut3nhc4WMY6CYTd0zF9C3eCzsk1AEpKLM/values/sales!A1:E6?fields=values&key=AIzaSyDwxpicDSa3GBcLJmgE1yxdtjYpIJFogcA";

$data = file_get_contents($url);

$data = mb_convert_encoding($data,"sjis","auto");

var_dump($data);
?>
