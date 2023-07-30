<?php
$numbers = "123456789";
$arr = array();
for ($c = 0; $c < 50; $c++){
    $rand_num = '';
    for ($i = 0; $i < 50; $i++) {
        $rand_one_num = rand(0, 8);
        $rand_num .= $numbers[$rand_one_num];
    }
    $arr[] = $rand_num;
}

$result = array_sum($arr);
echo($result);
