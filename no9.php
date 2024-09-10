<?php

function findCoinCombination($amount) {
  $coins = [1000, 500, 200, 100,];
  $combination = [];

  foreach ($coins as $coin) {
    while ($amount >= $coin) {
      $amount -= $coin;
      $combination[] = $coin;
    }
  }

  return $combination;
}

$amount = 2800; 
$combination = findCoinCombination($amount);

echo "Jenis koin untuk Rp. $amount:". "<br>";
foreach ($combination as $coin) {
  echo "<li>"." Rp. $coin"."<br>"."</li>";
}

?>