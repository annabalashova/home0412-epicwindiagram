<?php
/*
$str = "England, France, Germany, Italy, Ukraine";
$arraystr = explode(",", $str);
sort($arraystr,SORT_NATURAL);
$res = implode(";",$arraystr);
print_r($res);
*/

function sortstring($str,$r=";"){
    $arraystr = explode(",", $str);
    sort($arraystr,SORT_NATURAL);
    $res = implode($r,$arraystr);
    print_r($res);
}
$str = "England, Germany, Ukraine, France, Italy";
sortstring($str,"/");

