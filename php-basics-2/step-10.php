<!-- Write a PHP function that checks whether a passed string is a palindrome or not?
A palindrome is word, phrase, or sequence that reads the same backward as forward, e.g., madam or nurses run.  -->

<?php
function isPalindrome($string)
{
    $reversedStr = strrev($string);
    if ($reversedStr === $string) {
        echo " is a palindrome";
    } else {
        echo "is not a palindrome";
    }
}

isPalindrome('madame')

    ?>