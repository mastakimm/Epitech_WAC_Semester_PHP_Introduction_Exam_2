<?php

function min_len_array($array)
{
    $lilKey = [];

    if (!empty($array)) {

        $keyLength = [];
        $valueLength = [];
        foreach ($array as $key => $value) {
            $keyLength[$key] = strlen($key);
            $valueLength[$value] = strlen($value);
            
        }
        print_r($array);
        sort($keyLength);
        sort($valueLength);

        if ($keyLength[0] == $keyLength[1]) {
            if ($valueLength[0] == $valueLength[1]) {
                return $valueLength[0];
            } else {
                return $keyLength[0];
            }
        }
    }
}
