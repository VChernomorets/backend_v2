<?php
$data = file_get_contents('data.json');
$data = preg_replace('"string"', '"newString"', $data);
$data = str_replace('"int"', '"newInt"', $data);
echo $data;