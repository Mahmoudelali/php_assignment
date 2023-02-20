<?php

$str = "*";
for ($i = 0; $i < 10; $i++) {
    if ($i < 5) {
        echo $str;
        $str .= '*';
        print('</br>');
    } else {
        $str = substr($str, 0, strlen($str) - 1);
        echo $str;
        print('</br>');
    }

}
?>