<?php
function swapValues($val1, $val2)
{
    $val3 = $val2;
    $val2 = $val1;
    $val1 = $val3;

    return "value 1 : $val1 </br>value 2 : $val2";
}

echo swapValues(50, 60)
    ?>