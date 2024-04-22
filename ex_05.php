<?php
 
function conway($n = null, $str = '1', $i = 0)
{
    $a1 = array('1', '2', '3');
    $a2 = array('a', 'b', 'c');
    $b1 = array('bbb', 'aaa', 'cc', 'bb', 'aa', 'c', 'b', 'a');
    $b2 = array('32', '31', '23', '22', '21', '13', '12', '11');

    if ($n < 0 || !is_int($n)) {
        return false;
    }

    if ($i < $n) {
        conway($n, str_replace($b1, $b2, str_replace($a1, $a2, $str)), ++$i);
    } else {
        echo $str . PHP_EOL;
    }
    return true;
}
