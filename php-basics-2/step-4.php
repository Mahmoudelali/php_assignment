<?php
function Armstrong($num)
{

    $sum = 0;
    $temp = $num;
    $n = strlen($num);

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $n);
        $temp = (int) ($temp / 10);
    }

    if ($num == $sum) {
        echo $num . " is an Armstrong number";
    } else {
        echo $num . " is not an Armstrong number";
    }
}
Armstrong(200)
    ?>