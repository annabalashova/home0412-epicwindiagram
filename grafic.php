<?php
/*
 * Написать приложение для отображения столбчатой диаграммы,
 *      по оси X - год, начиная с 2000 до 2019, по оси Y какие-то рандомные значения от 1 до 300
 *
 * Предлагается написать 3 функции:
 * 1. Функция randArray должна возращать массив, ключами которого будет год с 2000 до текущего, значениями - радномные числа
 *      Для формирования массива можно использовать цикл for или любой другой удобный
 *      По желанию можно модифицировать условие так, чтобы  начало отсчета было не с 2000, а тоже рандомно,
*       например, с 2000 до 2010, то есть если рандомное число 2006, то строим диаграмму от 2006 до текущего года
 *
 * 2. Функция randColor должна возвращать строку рандомного цвета rgb, например "rgb(122, 12, 208)"
 *
 * 3. Функция makeDiagram должна принимать массив, который будет получен из функции randArray, и строить по нему столбчатую диаграмму.
 *      Столбики раскрасить в рандомный цвет, который можно получить путем вызова функции randColor
 *
 * Пример результата работы приложения можно посмотреть на рисунке diagram.png
 */
function randArray(){
    $year = array();
    for ($i = 2000; $i <= 2019; $i++) {
        $year[] = $i;;
    }
    $arrayrand = array();
    for ($i = 0; $i < 20; $i++) {
        $arrayrand[] = mt_rand(0, 300);
    }
    $res = array_combine($year, $arrayrand);
    return $res;
}
function makeDiagram($array){
    $color = array();
    for($i=0; $i<20; $i++) {
        $color[] = sprintf('#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255));
    }
    $diagram = array_combine($color, $array);
    foreach ($diagram as $key => $value){
            echo "<td valign=\"bottom\"><table width=\"25\" height=\"$value\"<tr>$value<td bgcolor=\"$key\"></td></tr></table></td><td width=\"5\"</td>" . '<br>';
        }
    }
?>
<html>
<head>
    <title>Diagram</title>
    <style>

    </style>
</head>
<body>
    <div class="diagram">
<table height="300" align="center">
<tr>
<td width="1" bgcolor="#000000"></td>

<td width="10"</td>
    <?php
    makeDiagram(randArray());
    ?>
  </tr>

</table>

    </div>
</body>
</html>