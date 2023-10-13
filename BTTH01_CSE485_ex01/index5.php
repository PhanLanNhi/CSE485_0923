<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
            ]
    ]
   ];

$value3 = $a['b']['o']['b'];
$value1 = $a['a']['c'];
$valueA = $a['a'];
echo "Giá trị = " .$value3. " có key là b từ mảng trên" .'<br>';
echo "Giá trị = " .$value1. " có key là c từ mảng trên" .'<br>';
echo "Thông tin phần tử có key là a: " .'<br>';
print_r($valueA);

?>