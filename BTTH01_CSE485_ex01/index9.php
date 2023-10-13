<?php
$arr1 = ['1', 'B', 'C', 'E'];
$arr2 = ['a', 0, null, false];

function convert ($array) {
    return array_map('strtolower', $array);
}

$result1 = convert($arr1);
$result2 = convert($arr2);

var_dump($result1);
echo '<br>';
var_dump($result2);

?>
