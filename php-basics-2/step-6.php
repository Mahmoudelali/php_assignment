<?php
// Write a PHP program to compute the sum of the digits of a number.
// Hint: Input $num = '54321'; $num[0]; // 5, $num[3] // 2
// Use strlen($num) to get the length of the string
function digitsSum($number)
{
    $number = (string) $number;
    $length = strlen($number);
    $sum = 0;

    for ($i = 0; $i < $length; $i++) {
        $sum = $sum + (int) $number[$i];
    }

    echo "the sum is : $sum ";

}

digitsSum(124)
    ?>