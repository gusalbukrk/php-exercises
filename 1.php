<?php
  echo "Operation (+, -, * or /): ";
  $operation = readline();

  echo '1st number: ';
  $x = readline();

  echo '2nd number: ';
  $y = readline();

  $result = round(($operation == '+' ? $x + $y :
    ($operation == '-' ? $x - $y :
      ($operation == '*' ? $x * $y :
        ($operation == '/' ? $x / $y : 'invalid operator')
      )
    )
  ), 3);

  echo "\n$x $operation $y = $result\n";
?>
