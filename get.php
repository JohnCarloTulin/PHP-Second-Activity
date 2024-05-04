<?php

if(isset($_GET['submitName'])){
  $quantity = $_GET['quantity'];
  $cash = $_GET['cash'];
  $selectedvalue = $_GET['food'];
  $cost;
  $change;

  if ($selectedvalue == 'fishball'){
    $cost = $quantity * 30;
    $change = $cash - $cost;
  }
  elseif ($selectedvalue == 'kikiam'){
    $cost = $quantity * 40;
    $change = $cash - $cost;
  }
  elseif ($selectedvalue == 'corndog'){
    $cost = $quantity * 50;
    $change = $cash - $cost;
  }

  echo "<h2>The total cost is " .$cost;
  echo "<h2>Your change is " .$change;
  echo "<br><br>";
  echo '<span style="font-family: Times New Roman, sans-serif;
  font-size: 15px; color: #000000;">Thanks for the order</span>';
  echo "<br><br>";
  echo '<span style="font-family: Times New Roman, sans-serif;
  font-size: 15px; color: #000000;">Submitted by: John Carlo Tulin</span>';
}

?>