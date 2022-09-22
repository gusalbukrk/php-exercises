<?php
require "1.php";
// require "2.php";
// require "3.php";
// require "4.php";
// require "5.php";
// require "6.php";
// require "7.php";
// require "8.php";
// require "9.php";
// require "10.php";

function clear() {
  system('cls');
  system('clear');
}

function menu() {
  // clear();
  // echo "\n\n\n";

  $option;

  $names = [
    "calculator",
    "convert from month number to month name",
    "perfect numbers",
    "get day of the week from international date",
    "ideal weight",
    "a thousand dice rolls",
    "prime numbers",
    "sum of 3 numbers",
    "fibonacci sequence",
    "largest number of a matrix",
  ];

  echo "MENU\n";
  // echo " 0 - exit\n";
  for ($i = 0; $i < count($names); $i++) {
    echo ($i < 9 ? " " : ""); // align single-digit numbers and double-digit number

    echo $i + 1 . " - " . ucfirst($names[$i]) . "\n";
  }

  echo "\nOption (0 for exit): ";
  $option = readline();

  // if ($option != 0) menu();

  if ($option == 1) {
    echo "\n"; one();

    echo "\nPress `Enter` to continue"; readline(); echo "\n";
    menu();
  }

  // do {
  //   echo "Option: ";
  //   $option = readline();
  // } while ($option != 0);

  // while ($option != 0) {
  //   echo "Option: ";
  //   $option = readline();
  // }
}

menu();
?>