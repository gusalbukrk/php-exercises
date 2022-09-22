<?php

$n; // store how many fibonacci positions must be printed

// print fibonacci sequence using recursion
function fib($left, $a = 0, $b = 1) {
  global $n;

  if ($left <= 0) return;


  echo $n - $left + 1 . "th = F(" . $n - $left . ") = " . $a . "\n";
  
  fib($left - 1, $b, $a + $b);
}

function f9() {
  global $n;
  echo "\$n (positive integer): "; $n = readline(); echo "\n";

  fib($n);
}
?>
