<?php
$add = function ($x, $y) { return $x + $y; };

function add3($x, $y, $z) {
  global $add;
  return $add($add($x, $y), $z);
}

// function average($x, $y, $z) {
//   return add3($x, $y, $z) / 3;
// }
function averageOf3($sum) {
  return $sum / 3;
}

function f8() {
  echo "\$x (number): "; $x = readline();
  echo "\$y (number): "; $y = readline();
  echo "\$z (number): "; $z = readline();

  $sum = add3($x, $y, $z); echo "\nsum = $sum\n";
  echo "average = " . round(averageOf3($sum), 3) . "\n";
}
?>
