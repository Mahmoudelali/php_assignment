<?php

$indexedArr = ["Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon"];
$newArr = [];
for ($i = 0; $i < count($indexedArr); $i++) {
    if ($indexedArr[$i] == "Eggs" or $indexedArr[$i] == "Milk" or $indexedArr[$i] == "Cheese" or $indexedArr[$i] == "Watermelon") {
        array_push($newArr, $indexedArr[$i]);
    }
}
echo " Hello Sir, do you have $newArr[0], $newArr[1] ,
and $newArr[2]? Also if you sell fruits can I find a $newArr[3]"

    ?>