<?php
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

  // 
  $largest = [
    'row' => 0,
    'col' => 0,
    'v' => null
  ];

  $print = function ($matrix, $row, $col) {
    global $largest;

    // echo $matrix[$row][$col];
    echo str_pad($matrix[$row][$col], strlen($largest['v']), " ", STR_PAD_LEFT);
    
    // break line if column is last of row
    echo $col == count($matrix[0]) - 1 ? "\n" : ", ";
  };

  $find_largest = function ($matrix, $row, $col) {
    global $largest;

    if ($matrix[$row][$col] > $largest['v']) {
      $largest['row'] = $row;
      $largest['col'] = $col;
      $largest['v'] = $matrix[$row][$col];
    }
  };

  function f10() {
    global $assign, $print, $find_largest, $largest;

    $rows = 2;
    $cols = 5;

    echo "SIZE\n";
    $def = null; // should use the default 2x5 matrix
    while (strtolower($def) != 'y' && $def !== '' && $def != 'n') { // run until valid input
      printf("Use default (2x5 matrix)? (Y/n) ");
      $def = readline();
    }

    if ($def == 'n') { // if not using the default
      echo "rows: "; $rows = readline();
      echo "columns: "; $cols = readline(); echo "\n";
    }

    echo "ASSIGNMENT\n";
    $matrix = array();
    for ($row = 0; $row < $rows; $row++) $matrix[$row] = array_fill(0, $cols, 0);
    iter($matrix, $assign); echo "\n";

    iter($matrix, $find_largest);

    echo "PRINT\n";
    iter($matrix, $print); echo "\n";

    echo "Largest: matrix[" . $largest['row'] . "][" . $largest['col'] . "] =  " . $largest['v'] . "\n";

    $largest['row'] = 0; $largest['col'] = 0; $largest['v'] = null;
  }
?>
