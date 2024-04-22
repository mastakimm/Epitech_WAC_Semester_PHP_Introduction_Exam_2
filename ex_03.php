<?php

function resum_join_str($str1 = null, $str2 = null)
{
    $newStr1 = "";
    $newStr2 = "";

    if ($str1 == null || $str2 == null) {
        return false;
    }

    for ($i = 0; $i < 14; $i++) {
        if (!isset($str1[$i])) {
            $newStr1 .= ".";
        } else {
            $newStr1 .= $str1[$i];
        }
    }
    $length = 3;
    $revStr2 = strrev($str2);

    if (strlen($str2) < 3) {
        $length = strlen($str2);
    }

    for ($i = 0; $i < $length; $i++) {
        $newStr2 .= $revStr2[$i];
    }
    $newStr2 = strrev($newStr2);

    while (strlen($newStr2) < 3) {
        $newStr2 .= ".";
    }

    return $newStr1 . $newStr2;
}
