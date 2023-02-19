<?php

function primeNumber($number)
{
    if ($number <= 1) {
        echo "$number is not prime";
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                echo "$number is not prime";
                break;
            } else {
                echo "is a prime number";
            }
        }
    }
}

primeNumber(9)
    ?>