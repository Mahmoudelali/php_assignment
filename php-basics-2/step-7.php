<?php
// Write a PHP program to replace a string   "Python" with "PHP" and "Python" with " PHP" in a given string.
// Input: English letters (including single byte alphanumeric characters, blanks, symbols) are given on one line.
//  The length of the input character string is 1000 or less.
// Use str_replace
function replacePythonWithPHP($string)
{
    $string = str_replace('Python', "PHP", $string);
    echo $string;

}

replacePythonWithPHP("Python test1 Python test2");


?>