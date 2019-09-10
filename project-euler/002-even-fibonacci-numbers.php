<?php

/* 
 * https://www.hackerrank.com/contests/projecteuler/challenges/euler002/problem
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%ld",$n);

    print sumfib($n) . "\n";
}

function sumfib ($n) {
    $a = 1;
    $b = 2;
    $f = 0;
    $sum = 2;
    do{
        $f = $a + $b;
        $a = $b;
        $b = $f;
        $sum += ($f % 2 == 0) ? $f : 0;
    }while ($a + $b < $n);
    return $sum;
}
?>

