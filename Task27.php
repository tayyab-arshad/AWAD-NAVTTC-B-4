<?php
echo "Using for loop:<br>";
for ($i = 5; $i <= 15; $i++) {
  echo $i . " ";
}
echo "Using while loop:<br>";
$i = 5;
while ($i <= 15) {
  echo $i . " ";
  $i++;
  echo "Using do...while loop:<br>";
  $i = 5;
  do {
    echo $i . " ";
    $i++;
  } while ($i <= 15);}
?>
