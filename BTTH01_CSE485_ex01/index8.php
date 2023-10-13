<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$max_str = "";
$max_length = 0;

$min_str = "";
$min_length = PHP_INT_MAX;

foreach ($array as $string) {
    if(strlen($string) > $max_length) {
        $max_length = strlen($string);
        $max_str = $string;
    }
    if(strlen($string) < $min_length) {
        $min_length = strlen($string);
        $min_str = $string;
    }
}

echo "Chuỗi lớn nhất là $max_str, độ dài = $max_length" . '<br>';
echo "Chuỗi nhỏ nhất là $min_str, độ dài = $min_length" . '<br>';

?>