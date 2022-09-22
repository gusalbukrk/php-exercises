<?php
// men: (72.7 * H) - 58
// women: (62.1 * H) – 44.7
function idealWeight($gender, $height) {
  return $gender == 'M' ? (72.7 * $height - 58) : (62.1 * $height - 44.7);
}

echo "Gender (M or F): ";
$gender = readline();

echo "Height (float): ";
$height = readline();

$ideal = number_format(idealWeight($gender, $height), 2);
echo "The ideal weight of a " . ($gender == "M" ? "man" : "female") . " of height {$height}m is {$ideal}kg.\n";
?>