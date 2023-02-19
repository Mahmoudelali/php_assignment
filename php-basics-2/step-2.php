<?php
// Write a PHP function to test whether a number is greater than 30, 20 or 10
function checkNumber($number)
{
    if ($number > 30) {
        return "number is greater than 30";
    } elseif ($number > 20) {
        return "number is greater than 20";
    } elseif ($number > 10) {
        return "number is greater than 10";
    }
}
echo checkNumber(11)
    ?>