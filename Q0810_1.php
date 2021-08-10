<?php

// 10以下の素数の和は 2 + 3 + 5 + 7 = 17 である.
// 200万以下の全ての素数の和を求めよ.

$max = 200000;
$prime_number = 0;

for ($i = 1; $i <= $max; $i++) {
    $count = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j === 0) {
            $count += 1;
        }
    }
    if ($count === 2) {
        $prime_numbers += $i;
    }
}

echo $max, '以下の全て素数の和：', $prime_numbers;

?>
