<?php
/*
ini_set('display_errors',1);
$str = "kHBj jkkgU";
$mode = 5;
switch ($mode){
    case 1:
        $str = strtolower($str);
        $str = ucfirst($str);
        echo $str;
       break;
    case 2:
        $str = strtolower($str);
        echo $str;
        break;
    case 3:
        $str = ucwords(strtolower($str));
        echo $str;
        break;
    case 4:
        $str = strtoupper($str);
        echo $str;
        break;
    case 5:
        $str = strrev($str);
        print_r($str);
        break;
}
*/
function stringconv($str, $mode){
    switch ($mode){
        case 1:
            $str = strtoupper($str);
            echo $str;
            break;
        case 2:
            $str = strtolower($str);
            echo $str;
            break;
        case 3:
            $str = strtolower($str);
            $str = ucfirst($str);
            echo $str;
            break;
        case 4:
            $str = ucwords(strtolower($str));
            echo $str;
            break;
        case 5:
            $str = strrev($str);
            echo ($str);
            break;
    }

}
$str = "Gjk ygNKik";
stringconv($str, 3);
