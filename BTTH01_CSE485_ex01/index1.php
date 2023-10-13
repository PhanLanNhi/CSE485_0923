<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
// $sum = array_sum($arrs);
// $pro = array_product($arrs);
// echo "2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = $sum";
// echo'<br>';
// echo "2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = $pro";

function sum($arr) {
    return array_sum($arr);
}

function product($arr) {
    $result = 1;
    foreach ($arr as $value) {
        $result *= $value;
    }
    return $result;
}

function difference ($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result -= $arr[$i];
    }
    return $result;
}

function quotient ($arr) {
    $result = $arr[0];
    for($i = 1; $i < count($arr); $i++) {
        $result /= $arr[$i];
    }
    return $result;
}

echo sum($arrs). '<br>';
echo product($arrs). '<br>';
echo difference($arrs). '<br>';
echo quotient($arrs). '<br>';

?>