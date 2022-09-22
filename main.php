<?php
require "1.php";
require "2.php";
require "3.php";
require "4.php";
require "5.php";
require "6.php";
require "7.php";
require "8.php";
require "9.php";
require "10.php";

function clear() {
  system('cls');
  system('clear');
}

function menu() {
  $option;

  $names = [
    "basic calculator",
    "convert from month number to month name",
    "perfect numbers",
    "get day of the week from international date",
    "ideal weight",
    "roll a dice a thousand times and display the quantity of times each side appeared",
    "prime numbers",
    "sum of 3 numbers",
    "fibonacci sequence",
    "largest number of a matrix",
  ];

  echo "MENU\n";
  for ($i = 0; $i < count($names); $i++) {
    echo ($i < 9 ? " " : ""); // align single-digit numbers and double-digit number

    echo $i + 1 . " - " . ucfirst($names[$i]) . "\n";
  }

  // echo "\nOption (0 for exit): ";
  echo "\nOption (to exit, leave it blank): ";
  $option = readline();

  if ($option == '') {
    echo "\n"; return;
  }

  $continue;
  do {
    echo "\n"; call_user_func("f$option"); echo "\n"; // empty line before and after function echoes

    echo "Continue? (y/N) "; $input = readline();
    if (strtolower($input) == "n" || $input == "") $continue = false;
    else if($input == "y") $continue = true;

  } while ($continue);

  echo "\n"; menu();
}

menu();
?>