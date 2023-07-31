<?php
$numbers = "123456789";
$arr = array();
$sum = gmp_init("0");
for ($c = 0; $c < 50; $c++){
    $rand_num = '';
    for ($i = 0; $i < 50; $i++) {
        $rand_one_num = rand(0, 8);
        $rand_num .= $numbers[$rand_one_num];
    }
    $arr[] = $rand_num;
}


foreach ($arr as $number) {
    $sum = gmp_add($sum, $number);
}

echo gmp_strval($sum);
