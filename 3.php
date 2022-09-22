<?php
  function factors($n) {
    $f = [ 1, $n ];

    for ($i = 2; $i < $n; $i++) {
      $d = $n / $i;
      
      // if $i is a factor of $n, push it to the second to last position
      if (!is_float($d)) array_splice($f, -1, 0, [ $i ]);
    }

    // print_r($f);
    return $f;
  }

  function isPerfect($n) {
    // to calc if $n is perfect, must leave out last factor - itself
    $f = array_slice(factors($n), 0, -1);

    // print_r($f);

    // array_reduce(array $array, callable $callback, mixed $initial = null)
    $sum = array_reduce($f, function ($acc, $cur) { return $acc + $cur; });

    // echo $sum;

    return $n == $sum;
  }

  function printIfPerfectOrNot($n) {
    echo $n . " " . (isPerfect($n) ? "IS PERFECT" : "ISN'T PERFECT") . ".\n";
  }

  function printPerfectsUntil($n) {
    for ($i = 2; $i <= $n; $i++) {
      if (isPerfect($i)) echo $i . "\n";
    }
  }

  function f3() {
    echo "SUBMENU\n";
    echo "3.1 - Check if \$n is perfect\n";
    echo "3.2 - Print all perfect numbers until \$n\n";

    echo "\nOption (3.1 or 3.2): "; $option = readline();

    echo "\n\$n (positive integer): "; $n = readline();

    if ($option == 3.1) {
      printIfPerfectOrNot($n);
    } else if ($option == 3.2) {
      echo "\n"; printPerfectsUntil($n);
    }
  }
?>