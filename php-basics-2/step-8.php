<?php
function powerOfTwo($number)
{
    if (($number & ($number - 1)) == 0 && $number != 0) {
        echo "$number is a power of 2";
    } else {
        echo "$number is not a power of 2";
    }
}

powerOfTwo(9)

    ?>