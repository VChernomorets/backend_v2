<?php
$countItems = 10;

$data = [];
for($i = 0; $i < $countItems; $i++){
    array_push($data, [
        'string' => generateString(),
        'int' => rand(1, 20)]);
}

$data = array_map(function ($item){
    if($item['int'] % 2 === 0){
        $item['int'] += 10;
    }
    return $item;
}, $data);

file_put_contents('data.json', json_encode($data));



function generateString($length = 8){
    $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ';
    $numChars = strlen($chars);
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string .= substr($chars, rand(1, $numChars) - 1, 1);
    }
    return $string;
}