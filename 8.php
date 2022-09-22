<?php
$add = function ($x, $y) { return $x + $y; };

function add3($x, $y, $z) {
  global $add;
  return $add($add($x, $y), $z);
}

function average($x, $y, $z) {
  return add3($x, $y, $z) / 3;
}

echo average(7, 3, 6) . "\n";
?>
