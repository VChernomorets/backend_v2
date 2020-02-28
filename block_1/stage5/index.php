<?php
$body = file_get_contents('https://www.php-fig.org/psr/');
//echo $body;
$tables = getTables($body);
$rows = getRows($tables[0]);
foreach ($tables as $table){
    $rows = getRows($table);
    foreach ($rows as $row){
        var_dump($row);
    }
    exit();
}

print_r($rows[1]);

function getRows($table){
    preg_match_all('|<tr[^>]*?>(.*?)</tr>|sei', $table, $out);
    return $out[0];
}

function getTables($body){
    preg_match_all('|<table[^>]*?>(.*?)</table>|sei', $body, $out);
    return $out[0];
}