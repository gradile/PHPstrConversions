<?php
// $str = "many birds, fly south, for the WINTER* ";
// 1) Make the first letter of the first word uppercase
// 2) Convert the entire string to lowercase
// 3) Remove all the commas
// 4) Replace all the asterisks with exclamations and
// 5) Clear any whitespace from the end. Make your code a function that can be fed any $str.

// echo (ucfirst($str));
// echo (strtolower($str));
// echo (str_replace(",", "", $str));
// echo (str_replace("*", "!", $str));
// echo(rtrim($str));

function stepsString($str, $arg1, $arg2)
{
    $result1 = ucfirst($str);
    $result2 = strtolower($str);
    $result3 = str_replace($arg1, "", $str);
    $result4 = str_replace($arg2, "!", $str);
    $result5 = rtrim($str);
    echo ('<b>Original string: </b>' . $str . '<br /><br />');
    echo ('<b>Convert the entire string to lowercase: </b>' . $result2 . '<br /><br />');
    echo ('<b>Make the first letter of the first word uppercase: </b>' . $result1 . '<br /><br />');
    echo ('<b>Remove all the commas: </b> ' . $result3 . '<br /><br />');
    echo ('<b>Replace all the asterisks with exclamations: </b>' . $result4 . '<br /><br />');
    echo ('<b>Clear any whitespace from the end: </b>' . $result5);
}

function changeString($str)
{
    $result1 = strtolower($str);
    $result2 = ucfirst($result1);
    $result3 = str_replace(",", "", $result2);
    $result4 = str_replace("*", "!", $result3);
    $result5 = rtrim($result4);
    echo ('<b>Original string: </b>' . $str . '<br /><br />');
    echo ('<b>Output string: </b>' . $result5);
}

function changeChars($str, $char1, $char2, $char3, $char4)
{
    $result1 = strtolower($str);
    $result2 = ucfirst($result1);
    $result3 = str_replace($char1, $char2, $result2);
    $result4 = str_replace($char3, $char4, $result3);
    $result5 = rtrim($result4);
    echo ('<b>Original string: </b>' . $str . '<br /><br />');
    echo ('<b>Output string: </b>' . $result5);
}
