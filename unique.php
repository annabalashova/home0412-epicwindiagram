<?php
/*
$array = array(4,6,8,4,7,8,8,6,9,9,1);
sort($array);
$numb =count($array);
$a = 0;
while ($numb!=0){
    if ($array[$a] == $array[$a++]) {
        unset($array[$a]);
        $a == $a++;
        $numb == $numb--;
    }else{
        $a == $a++;
        $numb == $numb--;
                  }
}
print_r($array);
$res = count($array);
echo $res;
*/

function unique($array){
    sort($array);
    $numb =count($array);
    $a = 0;
    while ($numb!=0) {
        if ($array[$a] == $array[$a++]) {
            unset($array[$a]);
            $a == $a++;
            $numb == $numb--;
        } else {
            $a == $a++;
            $numb == $numb--;
        }
    }
    $res = count($array);
    echo "В данном массиве $res уникальных элементов.";
}
$array = array(4,6,8,4,7,8,8,6,9,9,1);
unique($array);
/*Вариант 2*/
function uniqueduplicate($array){
    $arrayunique = array_unique($array);
    $res = count($arrayunique);
    echo " И таким образом результат также равен $res.";
}
uniqueduplicate($array);
