<?php

function isPrime($n) {
  if ($n == 1) return false;

  for ($i = 2; $i < $n; $i++) {
    if ($n % $i == 0) return false;
  }

  return true;
}

function printIfIsPrimeOrNot($n) {
  echo "$n " . (isPrime($n) ? "IS PRIME" : "ISN'T PRIME") . ".\n";
}

function printPrimesUntil($n) {
  for ($i = 2; $i <= $n; $i++) {
    echo isPrime($i) ? $i . "\n" : "";
  }
}

function f7() {
  echo "SUBMENU\n";
  echo "7.1 - Check if \$n is prime\n";
  echo "7.2 - Print all prime numbers until \$n\n";

  echo "\nOption (7.1 or 7.2): "; $option = readline();

  echo "\n\$n (positive integer): "; $n = readline();

  if ($option == 7.1) {
    printIfIsPrimeOrNot($n);
  } else if ($option == 7.2) {
    echo "\n"; printPrimesUntil($n);
  }
}
?>