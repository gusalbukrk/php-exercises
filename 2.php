<?php
function f2() {
  $months = [ 
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
  ];

  $input = readline("Number (1 - 12): ");

  // if ($input > 12) exit("ERROR: Number must be between 1 and 12.");
  // echo $months[$input - 1] . "\n";

  echo $input > 12 ? "ERROR: Number must be between 1 and 12.\n" : $months[$input - 1] . "\n";
}
?>