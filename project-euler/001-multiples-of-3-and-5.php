<?php
/*
 * https://www.hackerrank.com/contests/projecteuler/challenges/euler001/problem
 */
 
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d",$n);

    print solve($n) . "\n";
}

fclose($handle);

function sum_multiples_of_n_below_k($k, $n){ // 10, 3 // 10, 5
    // m = 10 -1 div 3 :: m = 3
    // m = 10 - 1 div 5 :: m = 1
    $m = intdiv($k-1, $n);
    // 3 * 3 * 4 div 2 :: 18
    // 5 * 1 * 2 div 2
    // (n(n+1))/2 = somatorio de 1 a n (p.a.)
    return intdiv($n * $m * ($m+1), 2);
}
    
function solve($n){
    return (sum_multiples_of_n_below_k($n, 3) + 
            sum_multiples_of_n_below_k($n, 5) - 
            sum_multiples_of_n_below_k($n, 15));
}

    
?>

