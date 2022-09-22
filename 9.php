<?php

echo "\$n (positive integer): ";
$n = readline();

function fib($left, $a = 0, $b = 1) {
  global $n;

  if ($left <= 0) return;


  echo $n - $left + 1 . "th = F(" . $n - $left . ") = " . $a . "\n";
  
  fib($left - 1, $b, $a + $b);
}

fib($n);

?>