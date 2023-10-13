<?php
$numbers = [
    'key1' => 12, 
    'key2' => 30, 
    'key3' => 4, 
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565, 
   ];
// echo "Phần tử đầu tiên: ".$numbers['key1'] .'<br>';
echo "Phần tử đầu tiên trong mảng: " .reset($numbers) .'<br>';
echo "Phần tử cuối cùng trong mảng: " .end($numbers) .'<br>';
echo "Số lớn nhất trong mảng: " .max($numbers) .'<br>';
echo "Số nhỏ nhất trong mảng: " .min($numbers) .'<br>';
echo "Tổng các giá trị trong mảng: " .array_sum($numbers) .'<br>';

sort($numbers);
echo "Sắp xếp mảng theo chiều tăng các giá trị: ";
print_r($numbers);

rsort($numbers);
echo "<br> Sắp xếp mảng theo chiều giảm các giá trị: ";
print_r($numbers);

krsort($numbers);
echo "<br> Sắp xếp mảng theo chiều tăng các key: ";
print_r($numbers);

ksort($numbers);
echo "<br> Sắp xếp mảng theo chiều giảm các key: ";
print_r($numbers);
?>