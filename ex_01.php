<?php

function rev_epur_str($str = null) 
{
    if (!isset($str)) {
        return false;
    }

    $result = "";
    $str = preg_replace("/\s+/", " ", $str);
    $wordsTab = explode(" ", $str);

    if (!empty($wordsTab)) {
        foreach ($wordsTab as $word) {
            if (!empty($word) || $word !== "\t") {
                $result = implode(' ', array_reverse($wordsTab));
            }
        }
    }
    return trim($result);
}
