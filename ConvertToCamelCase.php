<?php

/*Complete the method/function so that it converts dash/underscore delimited words into camel casing.
The first word within the output should be capitalized only if the original word was capitalized
(known as Upper Camel Case, also often referred to as Pascal case).

Examples
"the-stealth-warrior" gets converted to "theStealthWarrior"
"The_Stealth_Warrior" gets converted to "TheStealthWarrior"
*/

function toCamelCase($str){
    $array = preg_split('[-|_]', $str);

    foreach ($array as $key => $item){
        if($key === 0){
            continue;
        }
        $array[$key] = ucfirst($item);
    }

    return implode($array);
}

echo toCamelCase("the-stealth-warrior");
echo toCamelCase("The_Stealth_Warrior");
