<?php
  $rows = $cols = 5;

  $def = null; // should use the default 5x5 matrix
  while (strtolower($def) != 'y' && $def !== '' && $def != 'n') { // run until valid input
    printf("Use default (5x5 matrix)? (Y/n) ");
    $def = readline();
  }

  if ($def == 'n') { // if not using the default
    echo "rows: "; $rows = readline();
    echo "columns: "; $cols = readline();
  }

  echo "\nMATRIX {$rows}x{$cols}\n";

  // create matrix with defined size
  $matrix = array();
  for ($row = 0; $row < $rows; $row++) $matrix[$row] = array_fill(0, $cols, 0);

  function iter (&$matrix, $callback) {
    $rows = count($matrix);
    $cols = count($matrix[0]);

    for ($row = 0; $row < $rows; $row++) {
      for ($col = 0; $col < $cols; $col++) {
        $callback($matrix, $row, $col);
      }
    }
  }

  $assign = function (&$matrix, $row, $col) {
    echo "matrix[$row][$col] = ";
    $matrix[$row][$col] = readline();
  };

  $print = function ($matrix, $row, $col) {
    echo $matrix[$row][$col];
    
    // break line if column is last of row
    echo $col == count($matrix[0]) - 1 ? "\n" : ", ";
  };

  // $largest = [0, 0, $matrix[0][0]]; // [row, column, value]
  $largest = [
    'row' => 0,
    'col' => 0,
    'v' => $matrix[0][0]
  ];

  $find_largest = function ($matrix, $row, $col) {
    global $largest;

    if ($matrix[$row][$col] > $largest['v']) {
      $largest['row'] = $row;
      $largest['col'] = $col;
      $largest['v'] = $matrix[$row][$col];
    }
  };

  iter($matrix, $assign); echo "\n";
  iter($matrix, $print); echo "\n";
  iter($matrix, $find_largest);
  echo "Largest: matrix[" . $largest['row'] . "][" . $largest['col'] . "] =  " . $largest['v'] . "\n";
?>
