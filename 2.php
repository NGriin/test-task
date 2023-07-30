<?php
$numbers = "123456789";
$arr = array();
$sum = 0;
for ($c = 0; $c < 50; $c++) {
    $rand_num = '';
    for ($i = 0; $i < 50; $i++) {
        $rand_one_num = rand(0, 8);
        $rand_num .= $numbers[$rand_one_num];
    }
    $arr[] = $rand_num;
}

for ($b = 0; $b < count($arr); $b++) {
    $sum = bcadd($sum, $arr[$b]);
}

print_r($sum);
