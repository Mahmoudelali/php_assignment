<?php

function wordToDigit($word)
{
    switch ($word) {
        case "one":
            echo "The number is is : 1";
            break;
        case "two":
            echo "The number is is : 2";
            break;
        case "three":
            echo "The number is is : 3";
            break;
        case "four":
            echo "The number is : 4";
            break;
        case "five":
            echo "The number is : 5";
            break;
        case "six":
            echo "The number is : 6";
            break;
        case "seven":
            echo "The number is : 7";
            break;
        case "eight":
            echo "The number is : 8";
            break;
        case "nine":
            echo "The number is : 9";
            break;
        case "ten":
            echo "the number is : 10";
            break;
        default:
            echo "the number is not defined , but it's greater than 10";

    }
}
wordToDigit("five")
    ?>