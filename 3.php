<?php
$numbers = "123456789";
$arr = array();
$sum = "0";
for ($c = 0; $c < 2; $c++) {
    $rand_num = '';
    for ($i = 0; $i < 50; $i++) {
        $rand_one_num = rand(0, 8);
        $rand_num .= $numbers[$rand_one_num];
    }
    $arr[] = $rand_num;
}

for ($b = 0; $b < count($arr); $b++) {
    $sum = sumFifty($sum, $arr[$b]);
}

/**
 * @param $a
 * @param $b
 * @return string
 */
function sumFifty($a, $b)
{
    $num1 = str_split($a);
    $num2 = str_split($b);
    $diff = count($num1) - count($num2);
    if ($diff > 0) {
        $num2 = array_pad($num2, count($num1), 0);
    } else {
        $num1 = array_pad($num1, count($num2), 0);
    }
    $result = array();
    $carry = 0;
    for ($i = count($num1) - 1; $i >= 0; $i--) {
        $sum_num = $num1[$i] + $num2[$i] + $carry;
        $digit = $sum_num % 10;
        $carry = ($sum_num - $digit) / 10;
        array_unshift($result, $digit);
    }
    if ($carry > 0) {
        array_unshift($result, $carry);
    }
    return implode($result);
}

print_r($sum);
