<?php

function isPrime($n) {
  for ($i = 2; $i < $n; $i++) {
    if ($n % $i == 0) return false;
  }

  return true;
}

// echo (int) isPrime(13) . "\n";
// echo (int) isPrime(15) . "\n";

echo "\$n (integer): ";
$n = readline();

for ($i = 1; $i <= $n; $i++) {
  echo isPrime($i) ? $i . "\n" : "";
}

?>