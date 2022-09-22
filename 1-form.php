<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      padding: 1rem;
    }

    #output {
      margin-bottom: 1rem;
      font-weight: bold;
    }

    form * {
      height: 30px;
    }

    input[type="number"] {
      width: 60px;
      text-align: center;
    }

    input[type="submit"] {
      font-weight: bold;
      margin: 0;
    }
  </style>
</head>
<body>
  <?php
    if ($_GET['x']) {
      $x = $_GET['x']; $y = $_GET['y'];
      
      // basic operations lookup table
      $operations = [
        'sum' => '+',
        'sub' => '-',
        'mul' => '*',
        'div' => '/',
      ];
      $operation = $operations[$_GET['operation']];

      $result = eval("return $x $operation $y;");

      echo "<div id=\"output\">$x $operation $y = $result</div>";
    }
  ?>

  <form method="get" action="index.php">
    <input name="x" type="number" required step="any" />
    <!-- <label for="operation">Operation</label> -->
    <select name="operation" id="operation">
      <option value="sum">+</option>
      <option value="sub">-</option>
      <option value="mul">*</option>
      <option value="div">/</option>
    </select>
    <input name="y" type="number" required step="any" />
    <input type="submit" value="calculate" required />
  </form>
</body>
</html>