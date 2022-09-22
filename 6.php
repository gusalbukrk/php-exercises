<?php
function f6() {
  $sides = array_fill(0, 6, 0); // array_fill(start, count, value);

  for ($i = 0; $i < 1000; $i++) {
    $v = rand(1, 6) . "\n";
    $sides[$v - 1] += 1;
  }

  foreach ($sides as $index => $side) {
    echo $index + 1 . " = $side\n";
  }

  echo "    ————\n";
  echo "    " . array_reduce($sides, function ($acc, $cur) { return $acc += $cur; } ) . "\n";
}
?>