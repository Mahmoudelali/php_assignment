<?php
function wordCounter($word, $text)
{
    $arrOfWords = explode(" ", $text);

    print_r($arrOfWords);

    echo count($arrOfWords) . "</br>";
    $i = 0;
    $count = 0;

    while ($i < count($arrOfWords)) {

        if ($arrOfWords[$i] === $word) {
            $count++;
        }
        $i++;
        continue;

    }
    echo "the word $word repeated $count times ";

}
wordCounter('world', 'world world');



?>