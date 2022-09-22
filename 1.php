<?php
  if ($_GET['x']) {
    // var_dump($_GET);

    $x = $_GET['x']; $y = $_GET['y'];
    $operation = $_GET['operation'];
    $result;
    
    switch ($operation) {
      case "sum":
        $result = $x + $y;
        break;
      case "sub":
        $result = $x - $y;
        break;
      case "mul":
        $result = $x * $y;
        break;
      case "div":
        $result = $x / $y;
        break;
    }
    
    echo "Result: " . $result ."</br></br>";
  }
?>

<form method="get" action="index.php">
  <input name="x" type="number" required /></br>
  <input name="y" type="number" required /></br>
  <fieldset>
    <input id="sum" type="radio" name="operation" value="sum" checked />
    <label for="sum">sum</label>
    <input id="sub" type="radio" name="operation" value="sub" />
    <label for="sub">subtraction</label>
    <input id="mul" type="radio" name="operation" value="mul" />
    <label for="mul">multiplication</label>
    <input id="div" type="radio" name="operation" value="div" />
    <label for="div">division</label>
  </fieldset></br>
  <input type="submit" required />
</form>

