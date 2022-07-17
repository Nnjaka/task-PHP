<?php

/*Complete the function that accepts a string parameter, and reverses each word in the string.
All spaces in the string should be retained.

Examples
"This is an example!" ==> "sihT si na !elpmaxe"
"double  spaces"      ==> "elbuod  secaps"
*/

function reverseWords($str) {
    $array = explode(' ', $str);

    $newarr = [];

    foreach ($array as $key=>$item){
        $newarr[] = strrev($item);
    }

    return implode(' ', $newarr);
}

echo reverseWords("This is an example!");
echo reverseWords("double  spaces");