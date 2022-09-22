<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

function getDayOfWeek($date) {
  $date = ucfirst(strftime('%A', strtotime($date)));
  return $date;
}

function f4() {
  echo "Date (year-month-day, e.g. 2022-09-21): ";
  $input = readline();

  echo "Day of week: " . getDayOfWeek($input) . "\n";
}
?>
