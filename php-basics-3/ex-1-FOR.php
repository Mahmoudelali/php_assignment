<?php
$number = 112345;
$castedNumber = (string) $number;
$sum = 0;

for ($i = 0; $i < strlen((string) $number); $i++) {
    $sum += (int) $castedNumber[$i];
}
echo $sum;
?>